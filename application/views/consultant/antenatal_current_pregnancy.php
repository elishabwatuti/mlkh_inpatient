<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_current_pregnancy",array('id'=>'save_current_pregnancy_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Urine</td>
<td align="left"><?php echo form_input(array(
									'name'=>'urine',
									'id'=>'urine',
									'value'=>$current_pregnancy["urine"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Weight</td>
<td align="left"><?php echo form_input(array(
									'name'=>'weight',
									'id'=>'weight',
									'value'=>$current_pregnancy["weight"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">B.P. </td>
<td align="left"><?php echo form_input(array(
									'name'=>'bp',
									'id'=>'bp',
									'value'=>$current_pregnancy["bp"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">H.b.</td>
<td align="left"><?php echo form_input(array(
									'name'=>'hb',
									'id'=>'hb',
									'value'=>$current_pregnancy["hb"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Pallor</td>
<td align="left"><?php echo form_input(array(
									'name'=>'pallor',
									'id'=>'pallor',
									'value'=>$current_pregnancy["pallor"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Maturity</td>
<td align="left"><?php echo form_input(array(
									'name'=>'maturity',
									'id'=>'maturity',
									'value'=>$current_pregnancy["maturity"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Fundal Height</td>
<td align="left"><?php echo form_input(array(
									'name'=>'fundal_height',
									'id'=>'fundal_height',
									'value'=>$current_pregnancy["fundal_height"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Presentation</td>
<td align="left"><?php echo form_input(array(
									'name'=>'presentation',
									'id'=>'presentation',
									'value'=>$current_pregnancy["presentation"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Lie</td>
<td align="left"><?php echo form_input(array(
									'name'=>'lie',
									'id'=>'lie',
									'value'=>$current_pregnancy["lie"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Foetal Heart</td>
<td align="left"><?php echo form_input(array(
									'name'=>'foetal_heart',
									'id'=>'foetal_heart',
									'value'=>$current_pregnancy["foetal_heart"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr>
<td width="20%">Foetal Movement</td>
<td align="left"><?php echo form_input(array(
									'name'=>'foetal_movt',
									'id'=>'foetal_movt',
									'value'=>$current_pregnancy["foetal_movt"],
									'size'=>60,
									'onchange' => 'save_current_pregnancy()')); ?></td>
</tr>
<tr><td><?php echo form_submit('add', 'Add'); ?> </td></tr>
</tbody>
</table>
</form>
<?php //if (isset($customer)): ?>
	<table id="current_pregnancy" border="1">
	<caption>Current Pregnancy</caption>
	<thead>
		<th>Date</th>
		<th>Urine</th>
		<th>Weight</th>
		<th>B.P.</th>
		<th>H.b.</th>
		<th>Pallor</th>
		<th>Maturity</th>
		<th>Fundal Height</th>
		<th>Presentation</th>
		<th>Lie</th>
		<th>Foetal Heart</th>
		<th>Foetal Movement</th>
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

function save_current_pregnancy()
{
	$("#save_current_pregnancy_form").ajaxSubmit();
}
</script>