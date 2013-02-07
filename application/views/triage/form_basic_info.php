<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

echo form_open($controller_name.'/add_patient/'.$person_info->person_id,array('id'=>'customer_form'));
?>
<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>
<ul id="error_message_box"></ul>
<fieldset id="customer_basic_info">
<legend><?php echo $this->lang->line("customers_basic_information"); ?></legend>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_first_name').':', 'first_name'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'first_name',
		'id'=>'first_name',
		'value'=>$person_info->first_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Middle Name:', 'middle_name'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'middle_name',
		'id'=>'middle_name',
		'value'=>$person_info->middle_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_last_name').':', 'last_name'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'last_name',
		'id'=>'last_name',
		'value'=>$person_info->last_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Gender:', 'gender',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_dropdown('gender',array(
		''=>'',
		'male'=>'male',
		'female'=>'female'),'id=gender'
	);?>
	</div>
</div>
<?php $patient_id=$this->db->query("SELECT `person_id` FROM `mlkh_people` WHERE `department_created`='accident' ORDER BY `person_id` DESC LIMIT 1");
	  //$patient_id=$query1->first_row();
	  echo $patient_id; ?>
<?php
echo form_submit(array(
	'name'=>'submit',
	'id'=>'submit',
	'value'=>$this->lang->line('common_submit'),
	'class'=>'submit_button float_right')
);
?>
</fieldset>
<?php 
echo form_close();
?>
<script type='text/javascript'>

//validation and submit handling
$(document).ready(function()
{
	$('#customer_form').validate({
		submitHandler:function(form)
		{
			$(form).ajaxSubmit({
			success:function(response)
			{
				post_person_form_submit(response);
			},
			dataType:'json'
		});

		},
		errorLabelContainer: "#error_message_box",
 		wrapper: "li",
		rules: 
		{
			gender: "required",
    		   		},
		messages: 
		{
     		first_name: "<?php echo 'Please enter the gender'; ?>",
		}
	});
});
</script>