<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once ("secure_area.php");
class Prescribe extends Secure_area {

	
	function __construct()
	{
		parent::__construct();
		$this->load->library('prescribe_lib');
		$this->load->helper('url');
	}

	function index()
	{
		$this->_reload();
	}

	function item_search()
	{
		$suggestions = $this->Prescribe_model->get_item_search_suggestions($this->input->post('q'),$this->input->post('limit'));
		echo implode("\n",$suggestions);
	}

	function customer_search()
	{
		$suggestions = $this->Customer->get_customer_search_suggestions($this->input->post('q'),$this->input->post('limit'));
		echo implode("\n",$suggestions);
	}

	function select_customer($customer_id = 0)
	{
		if ( !$customer_id )
		{
			if ( $this->input->post("customer") )
			{ 
				$customer_id = $this->input->post("customer");
				$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
				$this->prescribe_lib->set_customer($customer_id);
				$this->prescribe_lib->get_invoice($customer_id,$employee_id);
			}
		}
		
		else 
		{
			if ($this->Customer->customer_exists($customer_id) == 1) 
			{
				$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
				$this->prescribe_lib->set_customer($customer_id);
				$this->prescribe_lib->get_invoice($customer_id,$employee_id);
			}
		}
		$this->_reload();
	}
	
	function select_item($item_id = 0)
	{
		$data=array();
		$item_id = $this->input->post("item");
		$data['invoice_id'] = $this->input->post('invoice_id');
		//$this->load->model('item');
		if(!$this->Item->exists($item_id))
		{
			//try to get item id given an item_number
			//no this is useless, what exactly is being submitted????
			$item_id = $this->Item->get_item_id($item_id);

			if(!$item_id)
				$this->_reload();
		}else{

			$data['item'] = array(
				'item_id'=>$item_id,
				'name'=>$this->Item->get_info($item_id)->name,
				'item_number'=>$this->Item->get_info($item_id)->item_number,
				);
			

			// $data['error']=$this->lang->line('invoices_unable_to_add_item');
			// $data['warning'] = $this->lang->line('invoices_quantity_less_than_zero');
			
			$this->_reload($data);
		}
	}

	function add()
	{
		$data = array();
		//creates cart session data if not exists
		if (!$this->session->userdata('presc_cart')) {
				$this->session->set_userdata('presc_cart', array());
		}
		//get current items in cart
		$current_cart = $this->session->userdata('presc_cart');
		$insertkey = count($current_cart) + 1;
		if (!count($current_cart)) {
			$insertkey = 0;
		}
		//update them
		$dosage = $this->input->post('number') * $this->input->post('frequency') * $this->input->post('duration');
		$item_id = $this->input->post('item_id');

		//bwats start pass check and age in the add_item()
		//get the status whether an item is charged under five or not
		$check=$this->Item->get_info($item_id)->items_under_five;
		//get customer_id
		$customer_id=$this->prescribe_lib->get_customer();
		//get details of customer
		$info=$this->Customer->get_info($customer_id);
		//get age of customer
		$age = date_diff(date_create(date("Y-m-d")),date_create(date("Y-m-d",strtotime($info->age))))->format('%y');
		//end bwats


		$new_items = array(
			'insertkey' => $insertkey,
			'item_id' =>$item_id,
			'time' => date('Y-m-d h:i:s'),
			'dosage' => $dosage,
			'name'=>$this->Item->get_info($item_id)->name,
			'frequency' => $this->input->post('frequency'),
			'duration' => $this->input->post('duration'),
			'price'=>$check==1 && $age<=5 ? 0 : $this->Item->get_info($item_id)->unit_price
			);
		$current_cart[] = $new_items;
		//save the items to cookie
		$this->session->set_userdata('presc_cart',$current_cart);
		//reload view with new data
		$data['cart'] = $current_cart;

		$this->_reload($data);
	}

	function delete($insertkey=0)
	{
		if ($insertkey < 0 || '') {
			$this->_reload();
		}else{
			//get current cart
			$current_cart = $this->session->userdata('presc_cart');
			//remove selected item from cart 
			unset($current_cart[$insertkey]);
			//save new cart to session
			$this->session->set_userdata('presc_cart',$current_cart);
			//reload page
			$this->_reload($data);
		}	
	}

	//save to db, shida zingine ziko hapa
	function complete()
	{
		$customer_id = $this->prescribe_lib->get_customer();
		$employee_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$over_period = $this->input->post('period');
		if (!$this->session->userdata('presc_cart')) {
				$this->_reload();
		}else{
			$current_cart = $this->session->userdata('presc_cart');
			$invoice_data = array(
				'invoice_time' => date('Y-m-d H:i:s'),
				'customer_id' =>  $customer_id,
				'employee_id' => $employee_id,
				'department'=>'Pharmacy',
				'over_period'=>$over_period,
				'consultation_id'=> $this->Consultation->returning($customer_id,$employee_id),
			);
			//save values to db and take care of the pre processing of items
			//unset all values from session and allow new one to start and reload page
			$data['invoice_id'] = $this->Prescribe_model->save_cart($invoice_data, $current_cart);
			if ($data['invoice_id'] == 'Invoice -1')
			{
				$data['error_message'] = $this->lang->line('invoices_transaction_failed');
				$this->_reload($data);
			}else{
				unset($current_cart);
				$this->session->set_userdata('presc_cart',$current_cart);
				$data['success'] = $this->lang->line('prescription_added_succesfully');
				redirect($this->session->userdata('consultation'));
			}
			

		}
	}
		
	function cancel(){
		$current_cart = $this->session->userdata('presc_cart');
		unset($current_cart);
		redirect($this->session->userdata('consultation'));
	}


	function _reload($data=array())
	{
		$person_info = $this->Employee->get_logged_in_employee_info();
		$data['modes']=array('sale'=>$this->lang->line('invoices_invoice'),'return'=>$this->lang->line('invoices_return'));
		$data['mode']=$this->prescribe_lib->get_mode();
		$data['items_module_allowed'] = $this->Employee->has_permission('items', $person_info->person_id);
		//Alain Multiple Payments
		$customer_id=$this->prescribe_lib->get_customer();
		$data['histories'] = $this->Prescribe_model->get_prescriptions_for_customer($customer_id);
		//need to get customer data about prescriptions
		//$data['prescriptions'] = $this->Prescribe_model->get_prescriptions_for_customer($customer_id);
		if($customer_id!=-1)
		{
			$info=$this->Customer->get_info_consultation($customer_id);
			$cust_info=$this->Customer->get_info($customer_id);
			
			$data['customer']=$cust_info->first_name.' '.$cust_info->middle_name.' '.$cust_info->last_name;
			$data['patient_id'] = $this->Appconfig->get('patient_prefix').$customer_id;
			$data['age'] = date_diff(date_create(date("Y-m-d")),date_create(date("Y-m-d",strtotime($cust_info->age))))->format('%y');
			$data['gender'] = $cust_info->gender;
			$data['blood_pressure'] = $info->blood_pressure;
			$data['temperature'] = $info->temperature;
			$data['pulse_rate'] = $info->pulse_rate;
			$data['weight'] = $info->weight;
		}
		$data['roa'] = $this->Prescribe_model->get_all_routes_of_adm();
		$data['frequency'] = $this->Prescribe_model->get_all_frequencies();
		//load cart items
		$data['cart'] = $this->session->userdata('presc_cart');
		$this->load->view("prescribe/prescribe_view", $data);
	}

}

/* End of file Docprescribe.php */
/* Location: ./application/controllers/Docprescribe.php */
