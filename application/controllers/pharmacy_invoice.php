<?php
require_once ("invoices.php");
class pharmacy_invoice extends invoices
{
	function __construct()
	{
		parent::__construct('pharmacy_invoice');
	}

	function select_customer($customer_id = 0)
	{
		if ( !$customer_id )
		{
			if ( $this->input->post("customer") )
			{ 
				$customer_id = $this->input->post("customer");
				$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
				$this->invoice_lib->set_customer($customer_id);
				$this->invoice_lib->get_invoice_pharm($customer_id,$employee_id);
			}
		}
		
		else 
		{
			if ($this->Customer->customer_exists($customer_id) == 1) 
			{
				$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
				$this->invoice_lib->set_customer($customer_id);
				$this->invoice_lib->get_invoice_pharm($customer_id,$employee_id);
			}
		}
		
		$this->_reload();
	}

	function complete()
	{
		$data['cart']=$this->invoice_lib->get_cart();
		$data['subtotal']=$this->invoice_lib->get_subtotal();
		$data['total']=$this->invoice_lib->get_total();
		$data['receipt_title']=$this->lang->line('invoice_receipt');
		$data['transaction_time']= date('m/d/Y h:i:s a');
		$customer_id=$this->invoice_lib->get_customer();
		$employee_id=$this->Employee->get_logged_in_employee_info()->person_id;
		$comment = $this->input->post('comment');
		$emp_info=$this->Employee->get_info($employee_id);
		$data['employee']=$emp_info->first_name.' '.$emp_info->last_name;

		if($customer_id!=-1)
		{
			$cust_info=$this->Customer->get_info($customer_id);
			$data['customer']=$cust_info->first_name.' '.$cust_info->last_name;
		}

		

		//SAVE invoice to database
		$data['invoice_id']='Invoice '.$this->Invoice->save_pharm($data['cart'], $customer_id,$employee_id,$comment,$data['total']);
		if ($data['invoice_id'] == 'Invoice -1')
		{
			$data['error_message'] = $this->lang->line('invoices_transaction_failed');
		}
		$this->load->view("invoices/receipt",$data);
		$this->invoice_lib->clear_all();
	}

}
?>
