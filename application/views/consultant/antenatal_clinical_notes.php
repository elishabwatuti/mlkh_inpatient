<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_clinical_notes",array('id'=>'save_clinical_notes_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Clinical Notes</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'notes',
									'id'=>'notes',
									'value'=>$clinical_notes["notes"],
									'rows'=>5,
									'columns'=>30,
									'onchange' => 'save_clinical_notes()')); ?></td>
</tr>
<tr><td><?php echo form_submit('add', 'Add'); ?> </td></tr>
</tbody>
</table>
</form>
<?php //if (isset($customer)): ?>
	<table id="clinical_notes" border="1">
	<caption>Clinical Notes</caption>
	<thead>
		<th width="120">Date</th>
		<th width="500">Clinical Notes</th>
		<th width="200">Examined By</th>
	</thead>
	<tbody id="cart_contents">
		<?php //if (isset($d)): ?>
		<?php //print_r($cart); ?>
			<?php foreach ($cart as $cart_item): ?>
			<tr>
				<td width="120"><?php echo $cart_item['time']; ?></td>
				<td width="500"><?php echo $cart_item['time']; ?></td>
				<td width="200"><?php echo $cart_item['time']; ?></td>
				<td><?php //echo anchor("prescribe/delete/".$cart_item['insertkey']."", 'Delete'); ?></td>
			</tr>
			<?php endforeach ?>
		<?php //endif ?>
	</tbody>
</table>
<?php //endif ?>
<script type='text/javascript'>

//validation and submit handling
$(document).ready(function()
{
	$('.date').datePicker({startDate: '01/01/1900'});
});

function disable_text(source,target)
{
	if(source.checked == "checked") $("#"+target).attr("readonly","readonly");
	
}

function save_clinical_notes()
{
	$("#save_clinical_notes_form").ajaxSubmit();
}
</script>