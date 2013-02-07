<!--DEPOSIT AND OTHER PAYMENTS-->
<div class="field_row clearfix">	
<?php echo form_label('Amount Paid:', 'payment_amount'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'payment_amount',
		'id'=>'payment_amount',
		'value'=>$person_info->payment_amount)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Receipt No.:', 'payment_receipt'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'payment_receipt',
		'id'=>'payment_receipt',
		'value'=>$person_info->payment_receipt)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Invoice No.:', 'payment_invoice_no'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'payment_invoice_no',
		'id'=>'payment_invoice_no',
		'value'=>$person_info->payment_invoice_no)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Amount Invoiced:', 'payment_amount_invoiced'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'payment_amount_invoiced',
		'id'=>'payment_amount_invoiced',
		'value'=>$person_info->payment_amount_invoiced)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label('Institution Invoiced:', 'payment_institution_invoiced'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'payment_institution_invoiced',
		'id'=>'payment_institution_invoiced',
		'value'=>$person_info->payment_institution_invoiced)
	);?>
	</div>
</div>
