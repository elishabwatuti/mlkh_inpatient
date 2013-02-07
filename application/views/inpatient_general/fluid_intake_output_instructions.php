<!--FLUID INTAKE OUTPUT INSTRUCTIONS-->
<div class="field_row clearfix">	
<?php echo form_label('Intravenous Infusion:', 'instructions_intravenous_infusion'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'instructions_intravenous_infusion',
		'id'=>'instructions_intravenous_infusion',
		'value'=>$person_info->instructions_intravenous_infusion,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Oral Fluids:', 'instructions_oral_fluids'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'instructions_oral_fluids',
		'id'=>'instructions_oral_fluids',
		'value'=>$person_info->instructions_oral_fluids,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Nasogastric Suction:', 'instructions_nasogastric_suction'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'instructions_nasogastric_suction',
		'id'=>'instructions_nasogastric_suction',
		'value'=>$person_info->instructions_nasogastric_suction,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>
