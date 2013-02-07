<!--PERSONAL DETAILS-->
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
<?php echo form_label('Gender:', 'gender'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('gender',array(
		'male'=>'Male',
		'female'=>'Female'),
		$person_info->gender	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('National/Passport ID :', 'national_id'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'national_id',
		'id'=>'national_id',
		'value'=>$person_info->national_id)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Nationality :', 'country'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'country',
		'id'=>'country',
		'value'=>$person_info->country));?>
	</div>
</div>

<div class="field_row clearfix">
<?php echo form_label('Date of Birth: MM/DD/YYYY', ' age'); ?>
        <div class='form_field'>
        <?php 
			$dob = explode('-',$person_info->age);
			
			if($dob[0] != 0000) $age = $dob[2]."/".$dob[1]."/".$dob[0]; 
			echo form_input(array(
                'name'=>'age',
                'id'=>'age',
               	'value'=>$age, 
				'class'=>'date')
        );?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Place of Birth :', 'birth_place'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'birth_place',
		'id'=>'birth_place',
		'value'=>$person_info->birth_place)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Occupation :', 'occupation'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'occupation',
		'id'=>'occupation',
		'value'=>$person_info->occupation)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Marital Status:', 'civil_status'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('civil_status',array(
		'single'=>'Single',
		'married'=>'Married',
		'divorced'=>'Divorced',
		'widowed'=>'Widowed'),
		$person_info->civil_status	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Religion:', 'religion'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('religion',array(
		'Christianity'=>'Christianity',
		'Muslim'=>'Muslim',
		'Hinduism'=>'Hinduism',
		'Budhisim'=>'Budhisim',
		'Pagan'=>'Pagan'),
		$person_info->religion);?>
	</div>
</div>

<!--ADDRESS-->
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_address').':', 'address_1'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'address_1',
		'id'=>'address_1',
		'value'=>$person_info->address_1));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Code:', 'zip'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'zip',
		'id'=>'zip',
		'value'=>$person_info->zip));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Town:', 'city'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'city',
		'id'=>'city',
		'value'=>$person_info->city));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Patient Telephone:', 'phone_number'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'phone_number',
		'id'=>'phone_number',
		'value'=>$person_info->phone_number));?>
	</div>
</div>
