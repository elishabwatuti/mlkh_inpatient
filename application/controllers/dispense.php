<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once ("secure_area.php");
class Dispense extends Secure_area {

	
	function __construct()
	{
		parent::__construct('dispense');
		$this->load->library('dispense_lib');
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
		$suggestions = $this->Dispensing_model->get_customer_search_suggestions_dispensing($this->input->post('q'),$this->input->post('limit'));
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
				$this->dispense_lib->set_customer($customer_id);
				$this->dispense_lib->get_invoice($customer_id);
			}
		}
		
		else 
		{
			if ($this->Customer->customer_exists($customer_id) == 1) 
			{
				$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
				$this->dispense_lib->set_customer($customer_id);
				$this->dispense_lib->get_invoice($customer_id);
			}
		}
		$this->_reload();
	}
	
	

	function remove_customer()
	{
		$this->dispense_lib->delete_customer();
		$this->_reload();
	}

	function complete()
	{
		$customer_id=$this->dispense_lib->get_customer();
		// $invoice_id = $this->Dispensing_model->get_invoice_id_by_customer_id($customer_id);
		$invoice_data = array('processed' => 2);
		$result = $this->Dispensing_model->update_prescription_invoice($invoice_data, $customer_id);
			if ($result = TRUE) {
					$data['success'] = $this->lang->line('dispense_invoice_successfully');
				}else{
					$data['error_message'] = $this->lang->line('dispense_invoice_failed');

				}
		$this->_reload($data);
	}


	function _reload($data=array())
	{
		$person_info = $this->Employee->get_logged_in_employee_info();
		$data['items_module_allowed'] = $this->Employee->has_permission('items', $person_info->person_id);
		$customer_id=$this->dispense_lib->get_customer();
		$data['consultation'] = $this->Invoice->get_pharmacy_consultation($customer_id,'Pharmacy');
		$data['histories'] = $this->Dispensing_model->get_prescriptions_for_customer($customer_id);
		//need to get customer data about prescriptions history
		$data['prescriptions'] = $this->Dispensing_model->get_customer_history($customer_id);
		if($customer_id!=-1)
		{$info=$this->Customer->get_info_dispense($customer_id,$data['consultation']);
			$cust_info=$this->Customer->get_info($customer_id);
			$data['customer']=$cust_info->first_name.' '.$info->last_name;
			$data['gender'] = $cust_info->gender;
			$data['age'] = $cust_info->age;
			$data['patient_no'] = $this->Appconfig->get('patient_prefix').$customer_id;
			$data['civil_status'] = $cust_info->civil_status;
			$data['blood_pressure'] = $info->blood_pressure;
			$data['temperature'] = $info->temperature;
			$data['pulse_rate'] = $info->pulse_rate;
			$data['weight'] = $info->weight;
			$info=$this->Customer->get_info($customer_id);
			$data['customer']=$info->first_name.' '.$info->last_name;
			$data['gender'] = $info->gender;
			$data['age'] = $info->age;
			$data['patient_no'] = "MLKH".$customer_id;
			$data['civil_status'] = $info->civil_status;
		}
		$this->load->view("dispense/dispense_view", $data);
	}
	
	function view_consultation_notes($consultation_id)
	{
		$summary = $this->Consultation->get_consultation_summary($consultation_id)->row();
		
		$info=$this->Customer->get_info($summary->patient_id);
		$person_info = $this->Employee->get_info($summary->consultant_id);
		$data['customer']=$info->first_name.' '.$info->middle_name.' '.$info->last_name;
		$data['gender'] = $info->gender;
		$data['date'] = $summary->consultation_time;
		$data['consultant'] = $person_info->first_name.' '.$person_info->middle_name.' '.$person_info->last_name;
		$data['complaints'] = unserialize($summary->consultation_complaints);
		$data['medical_history'] = unserialize($summary->consultation_medical_history);
		$data['family_history'] = unserialize($summary->consultation_family_history);
		$data['obst_gyn'] = unserialize($summary->consultation_obst_gyn);
		$data['examination'] = unserialize($summary->consultation_examination);
		$data['diagnoses'] = $this->Consultation->get_consultation_diagnoses($consultation_id);
		
		$this->load->view('consultant/consultation_summary',$data);
	}

}

/* End of file Dispense.php */
/* Location: ./application/controllers/Docprescribe.php */
