<!--PREVIOUS ATTENDANCE TO MLKH-->
<div class="field_row clearfix">	
<?php echo form_label('Referred From:', 'attendance_referal'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'attendance_referal',
		'id'=>'attendance_referal',
		'value'=>$person_info->attendance_referal)
	);?>
	</div>
</div>

<!--FOR OUTPATIENT-->
<div class="field_row clearfix">	
<?php echo form_label('To Attend:', 'attendance_to_attend'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'attendance_to_attend',
		'id'=>'attendance_to_attend',
		'value'=>$person_info->attendance_to_attend)
	);?>
	</div>
</div>

<div class="field_row clearfix">
<?php echo form_label('Date: MM/DD/YYYY', 'attendance_date'); ?>
        <div class='form_field'>
        <?php 
			$dob = explode('-',$person_info->attendance_date);
			
			if($dob[0] != 0000) $attendance_date = $dob[2]."/".$dob[1]."/".$dob[0]; 
			echo form_input(array(
                'name'=>'attendance_date',
                'id'=>'attendance_date',
               	'value'=>$attendance_date, 
				'class'=>'date')
        );?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Time:', 'attendance_time'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'attendance_time',
		'id'=>'attendance_time',
		'value'=>$person_info->attendance_to_time)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Ward Admitted:', 'attendance_ward'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'attendance_ward',
		'id'=>'attendance_ward',
		'value'=>$person_info->attendance_ward)
	);?>
	</div>
</div>