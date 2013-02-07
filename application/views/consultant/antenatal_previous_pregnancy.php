<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_previous_pregnancy",array('id'=>'save_previous_pregnancy_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Pregnancy Order</td>
<td align="left"><?php echo form_input(array(
									'name'=>'pregnancy_order',
									'id'=>'pregnancy_order',
									'readonly'=>'readonly',
									'value'=>$previous_pregnancy["pregnancy_order"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Year</td>
<td align="left"><?php echo form_input(array(
									'name'=>'pregnancy_year',
									'id'=>'pregnancy_year',
									'value'=>$previous_pregnancy["pregnancy_year"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="30%">No. of times ANC attended</td>
<td align="left"><?php echo form_input(array(
									'name'=>'anc_attended',
									'id'=>'anc_attended',
									'value'=>$previous_pregnancy["anc_attended"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Place of Delivery</td>
<td align="left"><?php echo form_input(array(
									'name'=>'delivery_place',
									'id'=>'delivery_place',
									'value'=>$previous_pregnancy["delivery_place"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Maturity</td>
<td align="left"><?php echo form_input(array(
									'name'=>'maturity',
									'id'=>'maturity',
									'value'=>$previous_pregnancy["maturity"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Duration of Labour</td>
<td align="left"><?php echo form_input(array(
									'name'=>'labour_duration',
									'id'=>'labour_duration',
									'value'=>$previous_pregnancy["labour_duration"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Type of Delivery</td>
<td align="left"><?php echo form_input(array(
									'name'=>'delivery_type',
									'id'=>'delivery_type',
									'value'=>$previous_pregnancy["delivery_type"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Birth Weight</td>
<td align="left"><?php echo form_input(array(
									'name'=>'birth_weight',
									'id'=>'birth_weight',
									'value'=>$previous_pregnancy["birth_weight"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<td width="20%">Gender of Baby</td>
<td align="left"><?php echo form_dropdown('gender',array(
		'male'=>'Male',
		'female'=>'Female'),
		$previous_pregnancy["birth_weight"]	);?></td>
</tr>
<tr>
<td width="20%">Outcome</td>
<td align="left"><?php echo form_input(array(
									'name'=>'outcome',
									'id'=>'outcome',
									'value'=>$previous_pregnancy["outcome"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Puerperium</td>
<td align="left"><?php echo form_input(array(
									'name'=>'puerperium',
									'id'=>'puerperium',
									'value'=>$previous_pregnancy["puerperium"],
									'size'=>60,
									'onchange' => 'save_previous_pregnancy()')); ?></td>
</tr>
<tr><td><?php echo form_submit('add', 'Add'); ?> </td></tr>
</tbody>
</table>
</form>
<?php //if (isset($customer)): ?>
	<table id="previous_pregnancy" border="1">
	<caption>Previous Pregnancy</caption>
	<thead>
		<th>Pregnacy Order</th>
		<th>Year</th>
		<th>ANC Attended</th>
		<th>Place of Delivery</th>
		<th>Maturity</th>
		<th>Duration of Labour</th>
		<th>Type of Delivery</th>
		<th>Birth Weight Kg</th>
		<th>Sex</th>
		<th>Outcome</th>
		<th>Puerperium</th>
	</thead>
	<tbody id="cart_contents">
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

function save_previous_pregnancy()
{
	$("#save_previous_pregnancy_form").ajaxSubmit();
}
</script>