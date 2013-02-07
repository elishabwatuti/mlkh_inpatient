<!--SOCIO-ECONOMIC STATUS-->
<div class="field_row clearfix">	
<?php echo form_label('Education Level:', 'status_education'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('status_education',array(
		'Primary'=>'Primary',
		'Secondary'=>'Secondary',
		'College_Univesity'=>'College/University',
		'None'=>'None'),
		$person_info->status_education);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Who Will Pay Hospital Bill:', 'status_payment'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('status_payment',array(
		'Primary'=>'Self',
		'Secondary'=>'Employer',
		'College_Univesity'=>'NHIF'),
		$person_info->status_payment);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Other (Specify):', 'status_payment_2'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'status_payment_2',
		'id'=>'status_payment_2',
		'value'=>$person_info->status_payment_2)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Security to be Charged:', 'status_security_charged'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'status_security_charged',
		'id'=>'status_security_charged',
		'value'=>$person_info->status_security_charged)
	);?>
	</div>
</div>