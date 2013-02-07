<!--NURSING CARDEX-->
<!--MEDICAL HISTORY-->
<div class="field_row clearfix">	
<?php echo form_label('Nurse Notes:', 'nursing_cardex_med_history'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'nursing_cardex_med_hist',
		'id'=>'nursing_cardex_med_hist',
		'value'=>$person_info->nursing_cardex_med_hist,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>

<!--FAMILY SOCIAL HISTORY-->
<div class="field_row clearfix">	
<?php echo form_label('Nurse Notes:', 'nursing_cardex_soc_hist'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'nursing_cardex_soc_hist',
		'id'=>'nursing_cardex_soc_hist',
		'value'=>$person_info->nursing_cardex_soc_hist,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>

<!--TABLE-->
<?php //if (isset($customer)): ?>
	<table id="nursing_cardex" border="1">
	<caption>Nursing Cardex</caption>
	<thead>
		<th>Date</th>
		<th>Time</th>
		<th>Notes</th>
		<th>Name</th>
	</thead>
	<tbody id="nursing_cardex">
		<?php //if (isset($d)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
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

<!--NURSING CARDEX-->
<div class="field_row clearfix">	
<?php echo form_label('Nurse Notes:', 'nursing_cardex_notes'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'nursing_cardex_notes',
		'id'=>'nursing_cardex_notes',
		'value'=>$person_info->nursing_cardex_notes,
		'rows'=>5,
		'columns'=>30,
		'onchange' => 'save_clinical_notes()')); ?>
	</div>
</div>