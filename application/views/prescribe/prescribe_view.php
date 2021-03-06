<?php $this->load->view("partial/header"); ?>
<div id="page_title" style="margin-bottom:8px;"><?php echo $this->lang->line('prescription'); ?></div>
<?php
if(isset($error))
{
	echo "<div class='error_message'>".$error."</div>";
}

if (isset($warning))
{
	echo "<div class='warning_mesage'>".$warning."</div>";
}

if (isset($success))
{
	echo "<div class='success_message'>".$success."</div>";
}
?>
<div id="register_wrapper">
<?php echo form_open("prescribe/select_item",array('id'=>'add_item_form')); ?>
<?php if (isset($invoice_id)): ?>
			<?php echo form_hidden('invoice_id', $invoice_id); ?>
<?php endif ?>
<label id="item_label" for="item">

<?php
echo $this->lang->line('invoices_find_or_scan_item');
?>
</label>
<?php echo form_input(array('name'=>'item','id'=>'item','value'=>"".$item['name'].""));?>

</form>

<table >
<thead>
<tr>
<th style="width:10%;"><?php echo $this->lang->line('prescription_item_name'); ?></th>
<th style="width:10%;"><?php echo $this->lang->line('prescription_number_of_items'); ?></th>
<th style="width:15%;"><?php echo $this->lang->line('prescription_frequency'); ?></th>
<th style="width:15%;"><?php echo $this->lang->line('prescription_duration'); ?></th>
<th style="width:15%;"><?php echo $this->lang->line('prescription_add'); ?></th>
</tr>
</thead>
<tbody>
	<tr>
		<?php echo form_open("prescribe/add",array('id'=>'add_presc_form')); ?>
		<?php if (isset($invoice_id)): ?>
			<?php echo form_hidden('invoice_id', $invoice_id); ?>
		<?php endif ?>
		<?php echo form_hidden('item_id', $item['item_id']); ?>
		<td style="align:center;"><?php echo $item['name'];?></td>
		<td><?php echo form_input(array('name'=>'number','value'=>"",'size'=>'3')); ?></td>
		<td><?php echo form_dropdown('frequency', $frequency, "1"); ?></td>
		<td><?php echo form_input(array('name'=>'duration','value'=>"",'size'=>'3')); ?></td>
		<td><?php echo form_submit('add', $this->lang->line("prescription_add")); ?> </td>
		</form>
	</tr>

</tbody>
</table>
<br />
<?php if (isset($customer)): ?>
	<table id="register">
	<caption>Patient Prescription</caption>
	<thead>
		<th>Date</th>
		<th>Drug</th>
		<th>Dosage(ml\tablets)</th>
		<th>Frequency</th>
		<th>Duration</th>
		<th>Delete</th>
	</thead>
	<tbody id="cart_contents">
		<?php if (isset($cart)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
				<td><?php echo $cart_item['time']; ?></td>
				<td><?php echo $cart_item['name'];?></td>
				<td><?php echo $cart_item['dosage'];?></td>
				<td><?php echo $cart_item['frequency']; ?></td>
				<td><?php echo $cart_item['duration']; ?></td>
				<td><?php echo anchor("prescribe/delete/".$cart_item['insertkey']."", 'Delete'); ?></td>
			</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>
</table>
<?php endif ?>
</div>
<div id="overall_sale">
<?php if (isset($customer)): ?>
<?php
$patient=$this->Customer->get_info($customer_id);
echo $customer_id;
		?>
<table>
	<tr><td><b>Patient Id</b></td><td>:<?php echo $patient_id ?></td></tr>
	<tr><td><b>Name</b></td><td>:<?php echo $patient->first_name.' '.$patient->last_name; ?></td></tr>
	<tr><td><b>Gender</b></td><td>:<?php echo $patient->gender; ?></td></tr>
	<tr><td><b>Age</b></td><td>:<?php echo date_diff(date_create(date("Y-m-d")),date_create(date("Y-m-d",strtotime($patient->age))))->format('%y'); ?></td></tr>
	<tr><td><b>Blood pressure</b></td><td>:<?php echo $blood_pressure ?></td></tr>
	<tr><td><b>SPO2</b></td><td>:<?php echo $temperature ?></td></tr>
	<tr><td><b>Pulse rate</b></td><td>:<?php echo $pulse_rate ?></td></tr>
	<tr><td><b>Weight</b></td><td>:<?php echo $weight ?></td></tr>
</table>
<?php endif ?>
	
		<div class="cancel_sale">
        <?php echo form_open("prescribe/complete",array('id'=>'finish_invoice_form')); ?>
        <br/><br/>
        <?php echo form_checkbox('period', '1', FALSE)."Continuous Prescription";?>
        <?php if (isset($cart)): ?>
				<div class='small_button' id='finish_sale_button' style='float:left;margin-top:5px;'><span>Complete</span></div>
        <?php endif ?>
				<div class='small_button' id='cancel_sale_button' style='float:right;margin-top:5px;'><span>Cancel</span></div>
    	<?php echo form_close(); ?>
		</div>

	
</div>

<div class="clearfix" style="margin-bottom:30px;">&nbsp;</div>


<?php $this->load->view("partial/footer"); ?>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
    $("#item").autocomplete('<?php echo site_url("prescribe/item_search"); ?>',
    {
    	minChars:0,
    	max:100,
    	selectFirst: false,
       	delay:10,
    	formatItem: function(row) {
			return row[1];
		}
    });

    $("#item").result(function(event, data, formatted)
    {
		$("#add_item_form").submit();
    });

	$('#item').focus();

	$('#item').blur(function()
    {
    	$(this).attr('value',"<?php echo $this->lang->line('invoices_start_typing_item_name'); ?>");
    });

	$('#item').click(function()
    {
    	$(this).attr('value','');
    });
	
    $("#finish_sale_button").click(function()
    {
    	if (confirm('<?php echo $this->lang->line("invoices_confirm_finish_invoice"); ?>'))
    	{
    		$('#finish_invoice_form').submit();
    	}
    });

    $("#cancel_sale_button").click(function()
    {
    	if (confirm('<?php echo $this->lang->line("invoices_confirm_cancel_invoice"); ?>'))
    	{
    		$('#finish_invoice_form').attr('action', '<?php echo site_url("prescribe/cancel"); ?>');
			$('#finish_invoice_form').submit();
    	}
    });

	
});


</script>
