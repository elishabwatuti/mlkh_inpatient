<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

 echo form_open($controller_name."/save_maternal_profile",array('id'=>'save_maternal_profile_form')); ?>

<table id="register">
<tbody id="cart_contents">
<tr>
<td width="20%">Name of Institution</td>
<td align="left"><?php echo form_input(array(
									'name'=>'institution_name',
									'id'=>'institution_name',
									'value'=>$maternal_profile["institution_name"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">ANC No.</td>
<td align="left"><?php echo form_input(array(
									'name'=>'anc_no',
									'id'=>'anc_no',
									'value'=>$maternal_profile["anc_no"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Name of Client</td>
<td align="left"><?php echo form_input(array(
									'name'=>'client_name',
									'id'=>'client_name',
									'value'=>$maternal_profile["client_name"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Gravida</td>
<td align="left"><?php echo form_input(array(
									'name'=>'gravida',
									'id'=>'gravida',
									'value'=>$maternal_profile["gravida"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Parity</td>
<td align="left"><?php echo form_input(array(
									'name'=>'parity',
									'id'=>'parity',
									'value'=>$maternal_profile["parity"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Height</td>
<td align="left"><?php echo form_input(array(
									'name'=>'height',
									'id'=>'height',
									'value'=>$maternal_profile["height"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">LMP</td>
<td align="left"><?php echo form_input(array(
									'name'=>'lmp',
									'id'=>'lmp',
									'value'=>$maternal_profile["lmp"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">EDD</td>
<td align="left"><?php echo form_input(array(
									'name'=>'edd',
									'id'=>'edd',
									'value'=>$maternal_profile["edd"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Marital Status</td>
<td align="left"><?php echo form_dropdown('marital_status',array(
		'single'=>'Single',
		'married'=>'Married',
		'divorced'=>'Divorced',
		'widowed'=>'Widowed'),
		$maternal_profile["marital_status"]	);?></td>
</tr>
<tr>
<td width="20%">Education</td>
<td align="left"><?php echo form_input(array(
									'name'=>'education',
									'id'=>'education',
									'value'=>$maternal_profile["education"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Address</td>
<td align="left"><?php echo form_input(array(
									'name'=>'address',
									'id'=>'address',
									'value'=>$maternal_profile["address"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Phone Number</td>
<td align="left"><?php echo form_input(array(
									'name'=>'phone_number',
									'id'=>'phone_number',
									'value'=>$maternal_profile["phone_number"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Occupation</td>
<td align="left"><?php echo form_input(array(
									'name'=>'occupation',
									'id'=>'occupation',
									'value'=>$maternal_profile["occupation"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Next of Kin</td>
<td align="left"><?php echo form_input(array(
									'name'=>'next_kin',
									'id'=>'next_kin',
									'value'=>$maternal_profile["next_kin"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="30%">Next of Kin Relationsip</td>
<td align="left"><?php echo form_input(array(
									'name'=>'next_kin_relationship',
									'id'=>'next_kin_relationship',
									'value'=>$maternal_profile["next_kin_relationship"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
</tr>
<tr>
<td width="20%">Next of Kin Contacts</td>
<td align="left"><?php echo form_input(array(
									'name'=>'next_kin_contacts',
									'id'=>'next_kin_contacts',
									'value'=>$maternal_profile["next_kin_contacts"],
									'size'=>60,
									'onchange' => 'save_maternal_profile()')); ?></td>
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

function save_maternal_profile()
{
	$("#save_maternal_profile_form").ajaxSubmit();
}
</script>