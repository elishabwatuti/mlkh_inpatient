<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

	echo form_open($controller_name.'/save_complaints',array('id'=>'save_complaints_form')); 
	//echo form_hidden('patient_id', $customer_id);
?>
<div id="Accordion_chief_complaints" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">CNS</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'confusion||cns'  => 'confusion',
				  'convulsion||cns'    => 'convulsion',
				  'headache||cns'    => 'headache',
                  'dizziness||cns'    => 'dizziness',
				  'inability to move limbs||cns'    => 'inability to move limbs',
                  'lethargy||cns'   => 'lethargy',
                  'loss of balance||cns' => 'loss of balance',
				  'loss of sensation||cns'    => 'loss of sensation',
				  'memory loss||cns'    => 'memory loss',
				  'syncope||cns'    => 'syncope',
				  'visual complaints||cns'    => 'visual complaints',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_cns[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "cns_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'cns')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['cns'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('cns')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'cns',
              'id'          => 'cns',
              'value'       => $complaints['cns'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">RIS</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'cough'  => array('productive||ris,cough'=>'productive','not productive||ris,cough'=>'not productive'),
				  'difficulty in breathing||ris'    => 'difficulty in breathing',
                  'chestpain||ris'    => 'chest pain',
				  'haemoptysis||ris'    => 'haemoptysis',
                  'voice'   => array('hoarse||ris,voice'=>'hoarse','normal||ris,voice'=>'normal'),
                  'throat' => array('sore||ris,throat'=>'sore','normal||ris,throat'=>'normal'),
				  'wheezing||ris'    => 'wheezing',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_ris[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "ris_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'ris')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['ris'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('ris')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'ris',
              'id'          => 'ris',
              'value'       => $complaints['ris'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">CVS</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'chest pain'  => array('left||cvs,chest pain'=>'left','right||cvs,chest pain'=>'right','diffuse||cvs,chest pain'=>'diffuse'),
				  'palpitations||cvs'    => 'palpitations',
                  'dizziness||cvs'    => 'dizziness',
				  'dyspnoea'    => array('at rest||cvs,dyspnoea'=>'at rest','on minimal effort||cvs,dyspnoea'=>'on minimal effort','on normal activity||cvs,dyspnoea'=>'on normal activity'),
                  'orthopnea||cvs'   => 'orthopnea',
                  'paroxysmal nocturnal dyspnoea||cvs' => 'paroxysmal nocturnal dyspnoea',
				  'cough'    => array('productive||cvs,cough'=>'productive','not productive||cvs,cough'=>'not productive'),
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_cvs[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "cvs_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'cvs')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['cvs'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('cvs')",
		"content" => "Clear",
		"id" => "summary",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'cvs',
              'id'          => 'cvs',
              'value'       => $complaints['cvs'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">GIT</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'esophagus'  => array('dysphasia||git,esophagus'=>'dysphasia',
				  						'vomiting(bloody)||git,esophagus'=>'vomiting(bloody)',
										'vomiting(food)||git,esophagus'=>'vomiting(food)',
										'pain on swallowing||git,esophagus'=>'pain on swallowing',
										'heartburn||git,esophagus'=>'heartburn'),
				  'stomach down'    => array('abdominal pain||git,stomach down'=>'abdominal pain',
				  						'vomiting(bloody)||git,stomach down'=>'vomiting(bloody)',
										'vomiting(bile)||git,stomach down'=>'vomiting(bile)',
										'vomiting(food)||git,stomach down'=>'vomiting(food)',
										'abdominal distension||git,stomach down'=>'abdominal distension',
										'diarrhea||git,stomach down'=>'diarrhea',
										'constipation||git,stomach down'=>'constipation',
										'obstipation||git,stomach down'=>'obstipation',
										'jaundice||git,stomach down'=>'jaundice',
										'weight changes||git,stomach down'=>'weight changes',
										'stool(melaena)||git,stomach down'=>'stool(melaena)',
										'fresh blood in passing stool||git,stomach down'=>'fresh blood in passing stool',
										'pain in passing stool||git,stomach down'=>'pain in passing stool'),
                  'renal/prostate'    => array('pain in flanks||git,renal/prostate'=>'pain in flanks',
				  						'passing urine/not||git,renal/prostate'=>'passing urine/not',
										'frequency||git,renal/prostate'=>'frequency',
										'nocturia||git,renal/prostate'=>'nocturia',
										'haematuria||git,renal/prostate'=>'haematuria',
										'dysuria||git,renal/prostate'=>'dysuria',
										'urethral discharge||git,renal/prostate'=>'urethral discharge',
										'urgency||git,renal/prostate'=>'urgency(males)',
										'frequency||git,renal/prostate'=>'frequency(males)',
										'stream||git,renal/prostate'=>'stream(males)',
										'dribbling||git,renal/prostate'=>'dribbling(males)',
										'feeling of incomplete emptying of bladder||git,renal/prostate'=>'feeling of incomplete emptying of bladder(males)'),
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_git[]',$options,'','style="height:190px;"');
	 ?>
    </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "mis_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'git')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['git'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('git')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'git',
              'id'          => 'git',
              'value'       => $complaints['git'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">M/S</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'pain||mis'  => 'pain',
				  'deformity||mis'    => 'deformity',
                  'disability||mis'    => 'disability',
				  'bleeding||mis'    => 'bleeding',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_mis[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "mis_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'mis')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['mis'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('mis')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'mis',
              'id'          => 'mis',
              'value'       => $complaints['mis'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Dental</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'pain during chewing||dental'  => 'pain during chewing',
				  'bad breath||dental'    => 'bad breath',
                  'bitter taste(pus taste)||dental'    => 'bitter taste(pus taste)',
				  'swelling jaw||dental'    => 'swelling jaw',
				  'sensitivity to cold and hot foods||dental'    => 'sensitivity to cold and hot foods',
				  'fever(mild)||dental'    => 'fever(mild)',
				  'gum soreness||dental'    => 'gum soreness',
				  'facial swelling||dental'    => 'facial swelling',
				  'general uneasiness||dental'    => 'general uneasiness',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_dental[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "dental_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'dental')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['dental'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('dental')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'dental',
              'id'          => 'dental',
              'value'       => $complaints['dental'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Eye</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'itching||eye'  => 'itching',
				'redness||eye'  => 'redness',
				  'pain||eye'  => 'pain',
				  'tearing||eye'  => 'tearing',
				  'discharge||eye'  => 'discharge',
				  'viral conjuctivitis||eye' => 'viral conjuctivitis',
				  'bacterial conjuctivitis||eye' => 'bacterial conjuctivitis',
				  'sensation of a foreign body||eye'    => 'sensation of a foreign body',
				  'photosensitivity||eye'    => 'photosensitivity',
				  'constant involuntary blinking||eye'    => 'constant involuntary blinking',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_eye[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "eye_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'eye')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['eye'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('eye')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'eye',
              'id'          => 'eye',
              'value'       => $complaints['eye'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table></div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">ENT</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'ear'  => array('loss of balance||ent,ear'=>'loss of balance',
				  						'fever||ent,ear'=>'fever',
										'pain and pressure||ent,ear'=>'pain and pressure',
										'nausea and vomiting||ent,ear'=>'nausea and vomiting',
										'fluid discharge from the ear||ent,ear'=>'fluid discharge from the ear',
										'difficulty hearing||ent,ear'=>'difficulty hearing'),
				  'nose'    => array('headache||ent,nose'=>'headache',
				  						'cough||ent,nose'=>'cough',
										'nasal discharge of various colors and consistency||ent,nose'=>'nasal discharge of various colors and consistency',
										'congestion||ent,nose'=>'congestion',
										'tooth ache||ent,nose'=>'tooth ache',
										'fever||ent,nose'=>'fever',
										'fatigue||ent,nose'=>'fatigue'),
                  'throat'    => array('sore throat||ent,throat'=>'sore throat',
				  						'difficulty swallowing||ent,throat'=>'difficulty swallowing',
										'enlarged tonsils||ent,throat'=>'enlarged tonsils',
										'enlarged lymph nodes||ent,throat'=>'nocturia',
										'white patches on the tonsils/in the back of the throat||ent,throat'=>'white patches on the tonsils/in the back of the throat',
										'fever||ent,throat'=>'fever',
										'body aches||ent,throat'=>'body aches',
										'fatigue||ent,throat'=>'fatigue',
										'skin rash||ent,throat'=>'skin rash'),
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_ent[]',$options,'','style="height:190px;"');
	 ?>
    </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "ent_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'ent')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['ent'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('ent')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'ent',
              'id'          => 'ent',
              'value'       => $complaints['ent'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Genitalia</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'wounds||genitalia'  => 'wounds',
				  'ulcers||genitalia'    => 'ulcers',
                  'discharge||genitalia'    => 'discharge',
				  'blood||genitalia'    => 'blood',
				  'trauma||genitalia'    => 'trauma',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_genitalia[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "genitalia_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'genitalia')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['genitalia'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('genitalia')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'genitalia',
              'id'          => 'genitalia',
              'value'       => $complaints['genitalia'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table></div>
  </div>
 <?php  if ($gender == 'female'){ ?>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Obstetrics and Gynaecology</div>
    <div class="AccordionPanelContent">
    <table height="200px">
    <tr><td>
    <?php 
		$options = array(
                  'lower abdominal pain||obst_gyn'  => 'lower abdominal pain',
				  'amenorrhea||obst_gyn'    => 'amenorrhea',
                  'PV bleeding/spotting||obst_gyn'    => 'PV bleeding/spotting',
				  'dysmenorrhea||obst_gyn'    => 'dysmenorrhea',
				  'menorrhagia||obst_gyn'    => 'menorrhagia',
				  'PV discharge||obst_gyn'    => 'PV discharge',
				  'dyspareunia||obst_gyn'    => 'dyspareunia',
				  'reduced fetal movements||obst_gyn'    => 'reduced fetal movements',
                );
		array_multisort($options, SORT_ASC, SORT_STRING);
		echo form_multiselect('panel_obst_gyn[]',$options,'','style="height:190px; width:250px"');
	 ?>
     </td><td valign="top">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
     	$data = array(
              "id"       => "obst_gyn_remarks",
              "cols"   => "30",
              "rows"        => "5",
			  "onchange" => "add_remarks(this,'obst_gyn')",
			  "value" => str_ireplace("other remarks: ", "", stristr($complaints['obst_gyn'], 'other remarks: '))
            );

	echo form_textarea($data);

	 ?></td></tr>
     <tr><td valign="top"><b>Summary</b></br>
     <?php
	 $data = array(
		"value" => "Clear",
		"onClick" => "clear_complaint('obst_gyn')",
		"content" => "Clear",
	);
	
	echo form_button($data);
	 ?>
     </td>
     <td><?php
     	$data = array(
              'name'        => 'obst_gyn',
              'id'          => 'obst_gyn',
              'value'       => $complaints['obstetrics and gynaecology'],
              'cols'   => '30',
              'rows'        => '5',
			  'readonly' => 'readonly',
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table></div>
  </div>
  <?php } ?>
</div>
</form>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{
$("option").attr("onClick","duration(this)");

});	

function duration(option)
{
	if (option.selected="selected")
	{
		var value = option.value.split("||",3);
		var info = value[1].split(",",2);
		var text = $("#"+info[0]).val();
		
		if (info.length == 1) info[1] = "";
		else info[1] += ": ";
		
		var duration = prompt("description/duration",(typeof value[2])=='undefined'?'':value[2]);
		if(duration!=null && duration!="") 
		{
			option.value = value[0] + "||" + value[1] + "||" + duration;
			option.selected = "selected";
			
			if (text.search(info[1] + value[0]) == -1)
				$("#"+info[0]).prepend(info[1] + value[0]+" - "+duration+"\n");
			else
			{
				var old_text = text.substring(text.search(info[1] + value[0]),text.slice(text.search(info[1] + value[0])).search("\n") + text.search(info[1] + value[0]));
				var new_text = info[1] + value[0]+" - "+duration;
				
				$("#"+info[0]).val(text.replace(old_text,new_text));
			}
			$("#save_complaints_form").ajaxSubmit();
		}
		else
		{
			option.selected="";
			option.value = value[0]+"||"+value[1];
		}
		setInterval(function(){$("#save_complaints_form").ajaxSubmit();},1000);
	}
}

function clear_complaint(target)
{
	$("#"+target).empty();
	$("#"+target+"_remarks").empty();
	$("#save_complaints_form").ajaxSubmit();
}

function add_remarks(source,target)
{
	if (source.value!="")
	{		
		var text = $("#"+target).val();
		
		var remarks = "Other Remarks: "
		
		if (text.search(remarks) == -1)
			$("#"+target).append("\nOther Remarks: "+source.value);
		else
		{
			var old_text = text.substring(text.search(remarks));
			var new_text = remarks + source.value;
			
			$("#"+target).val(text.replace(old_text,new_text));
		}
		$("#save_complaints_form").ajaxSubmit();
	}
}

var Accordion_chief_complaints = new Spry.Widget.Accordion("Accordion_chief_complaints");

</script>
