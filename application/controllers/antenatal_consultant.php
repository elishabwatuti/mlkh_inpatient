<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once("consultant.php");
class antenatal_consultant extends consultant {

	
	function __construct()
	{
		parent::__construct('antenatal_consultant');
		$this->session->set_userdata('clinic','anc');
		$this->session->set_userdata('consultation','antenatal_consultant');
	}

	function customer_search()
	{
		$dept="anc";
		$suggestions = $this->Consultation->get_customer_search_suggestions_consultation($this->input->post('q'),$this->input->post('limit'), $dept);
		echo implode("\n",$suggestions);
	}

	function save_consultation()
	{
		$dept="anc";
		$data['diagnoses']=$this->consultant_lib->get_diagnoses();
		$patient_id=$this->consultant_lib->get_customer();
		$consultant_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$encounter_status = "2";
		
		$data["complaints"] = $this->consultant_lib->get_complaints();
		$data['obst_gyn'] = $this->consultant_lib->get_obst_gyn();
		$data['medical_history'] = $this->consultant_lib->get_medical_history();
		$data['family_history'] = $this->consultant_lib->get_family_history();
		$data['examination'] = $this->consultant_lib->get_examination();
		//SAVE invoice to database
		$data['consultation_id']=$this->Consultation->save($data['diagnoses'],$data["complaints"],$data['obst_gyn'],$data['medical_history'],$data['family_history'],$data['examination'],$patient_id,$encounter_status,$consultant_id,$dept);
		
		if ($data['consultation_id'] == '-1')
		{
			$data['error_message'] = 'Failed to save the consultation.';
		}
		$this->_reload();
	}
	
	
	
	function close_consultation()
	{
		$dept="anc";
		$data['diagnoses']=$this->consultant_lib->get_diagnoses();
		$patient_id=$this->consultant_lib->get_customer();
		$consultant_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$encounter_status = "2";
		
		$data["complaints"] = $this->consultant_lib->get_complaints();
		$data['obst_gyn'] = $this->consultant_lib->get_obst_gyn();
		$data['medical_history'] = $this->consultant_lib->get_medical_history();
		$data['family_history'] = $this->consultant_lib->get_family_history();
		$data['examination'] = $this->consultant_lib->get_examination();
		//SAVE invoice to database
		$consultation_id=$this->Consultation->save($data['diagnoses'],$data["complaints"],$data['obst_gyn'],$data['medical_history'],$data['family_history'],$data['examination'],$patient_id,$encounter_status,$consultant_id,$dept);
		
		$this->cancel_consultation();
	}
	
	function discharge()
	{
		$dept="anc";
		$data['diagnoses']=$this->consultant_lib->get_diagnoses();
		$patient_id=$this->consultant_lib->get_customer();
		$consultant_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$encounter_status = "5";
		
		$data["complaints"] = $this->consultant_lib->get_complaints();
		$data['obst_gyn'] = $this->consultant_lib->get_obst_gyn();
		$data['medical_history'] = $this->consultant_lib->get_medical_history();
		$data['family_history'] = $this->consultant_lib->get_family_history();
		$data['examination'] = $this->consultant_lib->get_examination();
		//SAVE invoice to database
		$consultation_id=$this->Consultation->save($data['diagnoses'],$data["complaints"],$data['obst_gyn'],$data['medical_history'],$data['family_history'],$data['examination'],$patient_id,$encounter_status,$consultant_id,$dept);
		
		$this->Consultation->discharge($consultation_id);
		
		$this->cancel_consultation();		
	}

	function save_child_profile()
	{

	}

	function save_maternal_profile()
	{

	}

	function save_history()
	{

	}
	function save_physical_examination()
	{

	}
	function save_clinical_notes()
	{

	}
	function save_current_pregnancy()
	{
		
	}
}
