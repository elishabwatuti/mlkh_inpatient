<!--EMPLOYMENT-->
<div class="field_row clearfix">	
<?php echo form_label('Employer Names:', 'employer_names'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'employer_names',
		'id'=>'employer_names',
		'value'=>$person_info->employer_names)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Street:', 'employment_street'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'employment_street',
		'id'=>'employment_street',
		'value'=>$person_info->employment_street)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Town:', 'employment_town'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'employment_town',
		'id'=>'employment_town',
		'value'=>$person_info->employment_town));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('P.O. Box:', 'employment_address'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'employment_address',
		'id'=>'employment_address',
		'value'=>$person_info->employment_address));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Telephone:', 'employment_telephone'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'employment_telephone',
		'id'=>'employment_telephone',
		'value'=>$person_info->employment_telephone));?>
	</div>
</div>

<!--RURAL RESIDENCE-->
<div class="field_row clearfix">	
<?php echo form_label('Home Village:', 'home_village'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'home_village',
		'id'=>'home_village',
		'value'=>$person_info->home_village)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Sub-Location:', 'sub_location'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'sub_location',
		'id'=>'sub_location',
		'value'=>$person_info->sub_location)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Location:', 'location'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'location',
		'id'=>'location',
		'value'=>$person_info->location)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Division:', 'division'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'division',
		'id'=>'division',
		'value'=>$person_info->division)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Constituency:', 'constituency'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'constituency',
		'id'=>'constituency',
		'value'=>$person_info->constituency)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Chief:', 'chief'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'chief',
		'id'=>'chief',
		'value'=>$person_info->chief)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('No. of People Staying with Patient:', 'no_people_staying_rural'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'no_people_staying_rural',
		'id'=>'no_people_staying_rural',
		'value'=>$person_info->no_people_staying_rural)
	);?>
	</div>
</div>
<!--URBAN RESIDENCE-->
<div class="field_row clearfix">	
<?php echo form_label('WN:', 'wn'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'wn',
		'id'=>'wn',
		'value'=>$person_info->wn)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Estate:', 'estate'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'estate',
		'id'=>'estate',
		'value'=>$person_info->wn)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('House No.:', 'house_no'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'house_no',
		'id'=>'house_no',
		'value'=>$person_info->house_no)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Road/Street:', 'residence_street'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'residence_street',
		'id'=>'residence_street',
		'value'=>$person_info->residence_street)
	);?>
	</div>
</div>
<div class="field_row clearfix">	
<?php echo form_label('No. of People Staying with Patient:', 'no_people_staying_urban'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'no_people_staying_urban',
		'id'=>'no_people_staying_urban',
		'value'=>$person_info->no_people_staying_urban)
	);?>
	</div>
</div>