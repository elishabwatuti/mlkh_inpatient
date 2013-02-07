<!--TEMPERTATURE CHART-->
<div class="field_row clearfix">	
<?php echo form_label('Time:', 'temperature_chart_time'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'temperature_chart_time',
		'id'=>'temperature_chart_time',
		'value'=>date('h:m:s'))
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Pulse Rate:', 'temperature_chart_rate'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'temperature_chart_rate',
		'id'=>'temperature_chart_rate',
		'value'=>$person_info->temperature_chart_rate)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Time:', 'temperature_chart_pressure'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'temperature_chart_pressure',
		'id'=>'temperature_chart_pressure',
		'value'=>$person_info->temperature_chart_pressure)
	);?>
	</div>
</div>
