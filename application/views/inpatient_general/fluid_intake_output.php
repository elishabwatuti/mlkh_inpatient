<!--FLUID INTAKE OUTPUT-->
<!--TABLE-->
<?php //if (isset($customer)): ?>
	<table id="input_output" border="1">
	<caption>Fluid Intake and Output Chart</caption>
	<thead>
		<th>Time</th>
		<th>Systolic B.P</th>
		<th>Type of Fluid</th>
		<th>Intravenous</th>
		<th>Oral</th>
		<th>Nastogastric Suction</th>
		<th>Vomitous</th>
		<th>Drain, Stool or Fistina</th>
		<th>Presentation</th>
		<th>Urine Amount</th>
		<th>Urine Sp. Gr.</th>
	</thead>
	<tbody id="input_output">
		<?php //if (isset($d)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php //echo anchor("prescribe/delete/".$cart_item['insertkey']."", 'Delete'); ?></td>
			</tr>
			<?php endforeach ?>
		<?php //endif ?>
	</tbody>
</table>
<?php //endif ?>


<!--INTAKE-->
<div class="field_row clearfix">	
<?php echo form_label('Systolic B.P.:', 'input_output_bp'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_bp',
		'id'=>'input_output_bp',
		'value'=>$person_info->input_output_bp)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Type of fluid:', 'input_output_type'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_type',
		'id'=>'input_output_type',
		'value'=>$person_info->input_output_type)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Intra Venous:', 'input_output_intravenous'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_intravenous',
		'id'=>'input_output_intravenous',
		'value'=>$person_info->input_output_intravenous)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Oral:', 'input_output_oral'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_oral',
		'id'=>'input_output_oral',
		'value'=>$person_info->input_output_oral)
	);?>
	</div>
</div>

<!--OUTPUT-->
<div class="field_row clearfix">	
<?php echo form_label('Nasogastric Suction:', 'input_output_nasogastric'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_nasogastric',
		'id'=>'input_output_nasogastric',
		'value'=>$person_info->input_output_nasogastric)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Vomitous:', 'input_output_vomitous'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_vomitous',
		'id'=>'input_output_vomitous',
		'value'=>$person_info->input_output_vomitous)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Drain, Stool or Fistnia:', 'input_output_other'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_other',
		'id'=>'input_output_other',
		'value'=>$person_info->input_output_other)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Urine Amount:', 'input_output_urine_amount'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_urine_amount',
		'id'=>'input_output_urine_amount',
		'value'=>$person_info->input_output_urine_amount)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Urine Sp. Gr.:', 'input_output_urine_spgr'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'input_output_urine_spgr',
		'id'=>'input_output_urine_spgr',
		'value'=>$person_info->input_output_urine_spgr)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Time:', 'input_output_time'); ?>
	<div class='form_field'>
	<?php echo form_dropdown('input_output_time',array(
		'9 am'=>'9 am',
		'10 am'=>'10 am',
		'11 am'=>'11 am',
		'12 noon'=>'12 noon',
		'1 pm'=>'1 pm',
		'2 pm'=>'2 pm',
		'3 pm'=>'3 pm',
		'4 pm'=>'4 pm',
		'5 pm'=>'5 pm',
		'6 pm'=>'6 pm',
		'7 pm'=>'7 pm',
		'8 pm'=>'8 pm',
		'9 pm'=>'9 pm',
		'10 pm'=>'10 pm',
		'11 pm'=>'11 pm',
		'12 midnight'=>'12 midnight',
		'1 am'=>'1 am',
		'2 am'=>'2 am',
		'3 am'=>'3 am',
		'4 am'=>'4 am',
		'5 am'=>'5 am',
		'6 am'=>'6 am',
		'7 am'=>'7 am',
		'8 am'=>'8 am'),
		$person_info->input_output_time);?>
	</div>
</div>