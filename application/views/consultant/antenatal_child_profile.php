<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_child_profile",array('id'=>'save_child_profile_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Issued On</td>
<td align="left"><?php echo form_input(array(
									'name'=>'date_issued',
									'id'=>'date_issued',
									'readonly'=>'readonly',
									'value'=>$child_profile["date_issued"],
									'size'=>60,
									'onchange' => 'save_child_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Name of Mother</td>
<td align="left"><?php echo form_input(array(
									'name'=>'mother_name',
									'id'=>'mother_name',
									'value'=>$child_profile["mother_name"],
									'size'=>60,
									'onchange' => 'save_child_profile()')); ?></td>
</tr>
<tr>
<td width="30%">Name of Child After Birth</td>
<td align="left"><?php echo form_input(array(
									'name'=>'child_name',
									'id'=>'child_name',
									'value'=>$child_profile["child_name"],
									'size'=>60,
									'onchange' => 'save_child_profile()')); ?></td>
</tr><tr>
<td width="30%">Birth Notification No.</td>
<td align="left"><?php echo form_input(array(
									'name'=>'notification_no',
									'id'=>'notification_no',
									'value'=>$child_profile["notification_no"],
									'size'=>60,
									'onchange' => 'save_child_profile()')); ?></td>
</tr><tr>
<td width="40%">Certificate of Birth Registration No.</td>
<td align="left"><?php echo form_input(array(
									'name'=>'registration_no',
									'id'=>'registration_no',
									'value'=>$child_profile["registration_no"],
									'size'=>60,
									'onchange' => 'save_child_profile()')); ?></td>
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

function save_child_profile()
{
	$("#save_child_profile_form").ajaxSubmit();
}
</script>