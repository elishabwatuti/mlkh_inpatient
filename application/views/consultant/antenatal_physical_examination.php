<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_physical_examination",array('id'=>'save_physical_examination_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">General</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'general',
									'id'=>'general',
									'value'=>$physical_examination["general"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">CVS</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'cvs',
									'id'=>'cvs',
									'value'=>$physical_examination["cvs"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">Respiratory</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'respiratory',
									'id'=>'respiratory',
									'value'=>$physical_examination["respiratory"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">Breasts</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'breast',
									'id'=>'breast',
									'value'=>$physical_examination["breast"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">Abdomen</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'abdomen',
									'id'=>'abdomen',
									'value'=>$physical_examination["abdomen"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">Vaginal Examination</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'vaginal',
									'id'=>'vaginal',
									'value'=>$physical_examination["vaginal"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
</tr>
<tr>
<td width="20%">Discharge/GUD</td>
<td align="left"><?php echo form_textarea(array(
									'name'=>'discharge',
									'id'=>'discharge',
									'value'=>$physical_examination["discharge"],
									'rows'=>2,
									'cols'=>30,
									'onchange' => 'save_physical_examination()')); ?></td>
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

function save_physical_examination()
{
	$("#save_physical_examination_form").ajaxSubmit();
}
</script>