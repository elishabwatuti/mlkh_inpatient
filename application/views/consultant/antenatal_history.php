<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_history",array('id'=>'save_history_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Surgical Operation</td>
<td align="left"><?php echo form_input(array(
									'name'=>'surgical_operation',
									'id'=>'surgical_operation',
									'value'=>$history["surgical_operation"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr>
<td width="20%">Diabetes</td>
<td align="left"><?php echo form_input(array(
									'name'=>'diabetes',
									'id'=>'diabetes',
									'value'=>$history["diabetes"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr>
<td width="20%">Hypertension</td>
<td align="left"><?php echo form_input(array(
									'name'=>'hypertension',
									'id'=>'hypertension',
									'value'=>$history["hypertension"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr>
<td width="20%">Blood Transfusion</td>
<td align="left"><?php echo form_input(array(
									'name'=>'blood_transfusion',
									'id'=>'blood_transfusion',
									'value'=>$history["blood_transfusion"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr>
<td width="20%">Tuberculosis</td>
<td align="left"><?php echo form_input(array(
									'name'=>'tb',
									'id'=>'tb',
									'value'=>$history["tb"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr><td width="20%"><b>Family History</b></td></tr>
<tr>
<td width="20%">Twins</td>
<td align="left"><?php echo form_input(array(
									'name'=>'twins',
									'id'=>'twins',
									'value'=>$history["twins"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>
<tr>
<td width="20%">Tuberculosis</td>
<td align="left"><?php echo form_input(array(
									'name'=>'family_tb',
									'id'=>'family_tb',
									'value'=>$history["family_tb"],
									'size'=>60,
									'onchange' => 'save_history()')); ?></td>
</tr>

</tbody>
</table>

</form>
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

function save_history()
{
	$("#save_history_form").ajaxSubmit();
}
</script>