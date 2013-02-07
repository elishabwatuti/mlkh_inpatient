<?php
  //get the controller name 
  $CI =& get_instance();
  $controller_name=strtolower(get_class($CI));

	echo form_open($controller_name.'/save_examination',array('id'=>'save_examination_form')); 
	//print_r($examination);
?>
<div id="examination_header_bar">General Examination</div>
<table width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Condition</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_condition',
            'value'=>'fair',
            'checked'=>$examination["general_condition"]=='fair'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Fair</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_condition',
            'value'=>'sickening',
            'checked'=>$examination["general_condition"]=='sickening'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Sickening</label></td></tr>
        
        <tr><td valign="top"><b>Pallor</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_pallor',
            'value'=>'yes',
            'checked'=>$examination["general_pallor"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_pallor',
            'value'=>'no',
            'checked'=>$examination["general_pallor"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Jaundice</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_jaundice',
            'value'=>'yes',
            'checked'=>$examination["general_jaundice"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_jaundice',
            'value'=>'no',
            'checked'=>$examination["general_jaundice"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Oedema</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_oedema',
            'value'=>'yes',
            'checked'=>$examination["general_oedema"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_oedema',
            'value'=>'no',
            'checked'=>$examination["general_oedema"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Lymphadenopathy</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_lymphadenopathy',
            'value'=>'yes',
            'checked'=>$examination["general_lymphadenopathy"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_lymphadenopathy',
            'value'=>'no',
            'checked'=>$examination["general_lymphadenopathy"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Cyanosis</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_cyanosis',
            'value'=>'yes',
            'checked'=>$examination["general_cyanosis"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_cyanosis',
            'value'=>'no',
            'checked'=>$examination["general_cyanosis"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Oral Thrush</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_oral_thrush',
            'value'=>'yes',
            'checked'=>$examination["general_oral_thrush"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_oral_thrush',
            'value'=>'no',
            'checked'=>$examination["general_oral_thrush"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Finger Clubbing</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'general_finger_clubbing',
            'value'=>'yes',
            'checked'=>$examination["general_finger_clubbing"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'general_finger_clubbing',
            'value'=>'no',
            'checked'=>$examination["general_finger_clubbing"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
                
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "general_examination_remarks",
			  "name"       => "general_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  'onchange' => 'save_examination()',
			  "value" => $examination["general_examination_remarks"]
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
<div id="examination_header_bar">Systemic Examinations</div>
<div id="Accordion_examination" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">CNS</div>
    <div class="AccordionPanelContent">
	<table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>GCS</b></td><td>
    	<?php echo form_input(array(
            'name'=>'cns_gcs',
            'value'=>$examination['cns_gcs'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Neck Soft</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cns_neck_soft',
            'value'=>'yes',
            'checked'=>$examination["cns_neck_soft"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cns_neck_soft',
            'value'=>'no',
            'checked'=>$examination["cns_neck_soft"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Pupils</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cns_pupils',
            'value'=>'reactive',
            'checked'=>$examination["cns_pupils"]=='reactive'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Reactive</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cns_pupils',
            'value'=>'non-reactive',
            'checked'=>$examination["cns_pupils"]=='non-reactive'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Non-reactive</label></td></tr>
        
        <tr><td valign="top"><b>Cranial Nerves</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cns_cranial_nerves',
            'value'=>'normal',
            'checked'=>$examination["cns_cranial_nerves"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cns_cranial_nerves',
            'value'=>'abnormal',
            'checked'=>$examination["cns_cranial_nerves"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abnormal</label></td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'cns_cranial_nerves_describe',
            'value'=>$examination['cns_cranial_nerves_describe'],
            'onchange' => 'save_examination()')); ?>
         </td></tr>
        
        <tr><td valign="top"><b>Sensory Motor</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cns_sensory_motor',
            'value'=>'normal',
            'checked'=>$examination["cns_sensory_motor"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cns_sensory_motor',
            'value'=>'abnormal',
            'checked'=>$examination["cns_cranial_nerves"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abnormal</label></td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'cns_sensory_motor_describe',
            'value'=>$examination['cns_sensory_motor_describe'],
            'onchange' => 'save_examination()')); ?>
         </td></tr>
                
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "cns_examination_remarks",
			  "name"       => "cns_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination['cns_examination_remarks'],
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
	<table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Moving with Respiration</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'ris_moving_with_respiration',
            'value'=>'yes',
            'checked'=>$examination["ris_moving_with_respiration"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'ris_moving_with_respiration',
            'value'=>'no',
            'checked'=>$examination["ris_moving_with_respiration"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Scars</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'ris_scars',
            'value'=>'yes',
            'checked'=>$examination["ris_scars"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'ris_scars',
            'value'=>'no',
            'checked'=>$examination["ris_scars"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        
        <tr><td valign="top"><b>Bilateral Expansion</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'ris_bilateral_expansion',
            'value'=>'yes',
            'checked'=>$examination["ris_bilateral_expansion"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'ris_bilateral_expansion',
            'value'=>'no',
           'checked'=>$examination["ris_bilateral_expansion"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No</label></td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'ris_bilateral_expansion_describe',
            'value'=>$examination['ris_bilateral_expansion_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Percussion</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'ris_percussion',
            'value'=>'resonant',
            'checked'=>$examination["ris_percussion"]=='resonant'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Resonant</label><label>
        <?php echo form_radio(array(
            'name'=>'ris_percussion',
            'value'=>'hyperresonant',
            'checked'=>$examination["ris_percussion"]=='hyperresonant'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Hyperresonant</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'ris_percussion',
            'value'=>'dull',
            'checked'=>$examination["ris_percussion"]=='dull'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Dull</label><label>
		<?php echo form_radio(array(
            'name'=>'ris_percussion',
            'value'=>'stony dullness',
            'checked'=>$examination["ris_percussion"]=='stony dullness'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Stony Dullness</label></td></tr>
        <tr><td valign="top">&nbsp;</td><td>
        <tr><td valign="top"><b>Auscultation</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'ris_auscultation',
            'value'=>'clear',
            'checked'=>$examination["ris_auscultation"]=='clear'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Clear</label><label>
        <?php echo form_radio(array(
            'name'=>'ris_auscultation',
            'value'=>'repitations',
            'checked'=>$examination["ris_auscultation"]=='repitations'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Repitations</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'ris_auscultation',
            'value'=>'rhonci',
            'checked'=>$examination["ris_auscultation"]=='rhonci'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Rhoncai</label><label>
		<?php echo form_radio(array(
            'name'=>'ris_auscultation',
            'value'=>'no breath sounds',
            'checked'=>$examination["ris_auscultation"]=='no breath sounds'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        No Breath Sounds</label></td></tr>
                
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "ris_examination_remarks",
			  "name"       => "ris_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["ris_examination_remarks"]
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
    <table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Pulses</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_pulses_presence',
            'value'=>'present',
            'checked'=>$examination["cvs_pulses_presence"]=='present'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Present</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_pulses_presence',
            'value'=>'absent',
            'checked'=>$examination["cvs_pulses_presence"]=='absent'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Absent</label>
        </td></tr>
        <tr><td></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_pulses_regularity',
            'value'=>'regular',
            'checked'=>$examination["cvs_pulses_regularity"]=='regular'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Regular</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_pulses_regularity',
            'value'=>'irregular',
            'checked'=>$examination["cvs_pulses_regularity"]=='irregular'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Irregular</label>
        </td></tr>
        
        <tr><td valign="top"><b>Volume</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_volume',
            'value'=>'good',
            'checked'=>$examination["cvs_volume"]=='good'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Good</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_volume',
            'value'=>'low',
            'checked'=>$examination["cvs_volume"]=='low'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Low</label></td></tr>
        
        <tr><td valign="top"><b>Peripheries</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_peripheries',
            'value'=>'warm',
            'checked'=>$examination["cvs_peripheries"]=='warm'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Warm</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_peripheries',
            'value'=>'cold',
            'checked'=>$examination["cvs_peripheries"]=='cold'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Cold</label></td></tr>
        
        <tr><td valign="top"><b>JvP</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_jvp',
            'value'=>'normal',
            'checked'=>$examination["cvs_jvp"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_jvp',
            'value'=>'raised',
            'checked'=>$examination["cvs_jvp"]=='raised'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Raised</label></td></tr>
        
        <tr><td valign="top"><b>Precordium</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_precordium',
            'value'=>'normal',
            'checked'=>$examination["cvs_precordium"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_precordium',
            'value'=>'hyperactive',
            'checked'=>$examination["cvs_precordium"]=='hyperactive'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Hyperactive</label></td></tr>
        
        <tr><td valign="top"><b>Apex</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_apex',
            'value'=>'normal',
            'checked'=>$examination["cvs_apex"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'cvs_apex',
            'value'=>'abnormal',
            'checked'=>$examination["cvs_apex"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abnormal</label></td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'cvs_apex_describe',
            'value'=>$examination['cvs_apex_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Heart Sounds</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'cvs_heart_sounds',
            'value'=>'normal',
            'checked'=>$examination["cvs_heart_sounds"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label><label>
        <?php echo form_radio(array(
            'name'=>'cvs_heart_sounds',
            'value'=>'abnormal',
            'checked'=>$examination["cvs_heart_sounds"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abnormal</label><label>
		<?php echo form_radio(array(
            'name'=>'cvs_heart_sounds',
            'value'=>'murmurs',
            'checked'=>$examination["cvs_heart_sounds"]=='murmurs'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Murmurs</label></td></tr>
                
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "cvs_examination_remarks",
			  "name"       => "cvs_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["cvs_examination_remarks"]
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">PA</div>
    <div class="AccordionPanelContent">
    <table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    
    <tr><td valign="top"><b>State</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_state',
            'value'=>'normal fullness',
            'checked'=>$examination["pa_state"]=='normal fullness'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal Fullness</label><label>
        <?php echo form_radio(array(
            'name'=>'pa_state',
            'value'=>'distended',
            'checked'=>$examination["pa_state"]=='distended'?'checked':'',
            'onchange' => 'save_examination()')); ?>
            Distended</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'pa_state',
            'value'=>'sunken',
            'checked'=>$examination["pa_state"]=='sunken'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Sunken</label>
        </td></tr>
        
        <tr><td valign="top"><b>Scars</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_scars',
            'value'=>'yes',
            'checked'=>$examination["pa_scars"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_scars',
            'value'=>'no',
            'checked'=>$examination["pa_scars"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Moving with Respiration</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_moving_with_respiration',
            'value'=>'yes',
            'checked'=>$examination["pa_moving_with_respiration"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_moving_with_respiration',
            'value'=>'no',
            'checked'=>$examination["pa_moving_with_respiration"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Tender</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_tender',
            'value'=>'yes',
            'checked'=>$examination["pa_tender"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_tender',
            'value'=>'no',
            'checked'=>$examination["pa_tender"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'pa_tender_describe',
            'value'=>$examination['pa_tender_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Rebound Tenderness</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_rebound_tenderness',
            'value'=>'yes',
            'checked'=>$examination["pa_rebound_tenderness"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_rebound_tenderness',
            'value'=>'no',
            'checked'=>$examination["pa_rebound_tenderness"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Rigidity</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_rigidity',
            'value'=>'yes',
            'checked'=>$examination["pa_rigidity"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_rigidity',
            'value'=>'no',
            'checked'=>$examination["pa_rigidity"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Guarding</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_guarding',
            'value'=>'yes',
            'checked'=>$examination["pa_guarding"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_guarding',
            'value'=>'no',
            'checked'=>$examination["pa_guarding"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Organomegaly</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_organomegaly',
            'value'=>'yes',
            'checked'=>$examination["pa_organomegaly"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_organomegaly',
            'value'=>'no',
            'checked'=>$examination["pa_organomegaly"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'pa_organomegaly_describe',
            'value'=>$examination['pa_organomegaly_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Percussion</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_percussion',
            'value'=>'tympanic',
            'checked'=>$examination["pa_percussion"]=='tympanic'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Tympanic</label><label>
        <?php echo form_radio(array(
            'name'=>'pa_percussion',
            'value'=>'dull',
            'checked'=>$examination["pa_percussion"]=='dull'?'checked':'',
            'onchange' => 'save_examination()')); ?>
            Dull</label><br /><label>
        <?php echo form_radio(array(
            'name'=>'pa_percussion',
            'value'=>'shifting dullness',
            'checked'=>$examination["pa_percussion"]=='shifting dullness'?'checked':'',
            'onchange' => 'save_examination()')); ?>
            Shifting Dullness</label>
        </td></tr>
       
        <tr><td valign="top"><b>Bowel Sounds</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pa_bowel_sounds',
            'value'=>'yes',
            'checked'=>$examination["pa_bowel_sounds"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pa_bowel_sounds',
            'value'=>'no',
            'checked'=>$examination["pa_bowel_sounds"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
              
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "pa_examination_remarks",
			  "name"       => "pa_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["pa_examination_remarks"],
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">GIT(plus DRE for men)</div>
    <div class="AccordionPanelContent"><?php
     	$data = array(
              'name'        => 'git',
              'id'          => 'git_examination',
              'value'       => $examination['git'],
              'rows'        => '10',
			  'onchange' => 'save_examination()',
            );

	echo form_textarea($data);

	 ?></div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">GUT</div>
    <div class="AccordionPanelContent"><?php
     	$data = array(
              'name'        => 'gut',
              'id'          => 'gut_examination',
              'value'       => $examination['gut'],
              'rows'        => '10',
			  'onchange' => 'save_examination()',
            );

	echo form_textarea($data);

	 ?></div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Pelvic Assessment</div>
    <div class="AccordionPanelContent">
    <?php if ($gender == 'female'){ 
	$data = array(
	  'name'        => 'pelvic_female',
	  'id'          => 'pelvic_female',
	  'value'       => $examination['pelvic_female'],
	  'rows'        => '8',
	  'onchange' => 'save_examination()',
	);

	echo form_textarea($data);  
	} else{ ?>
    <table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    
    <tr><td valign="top"><b>Scrotum</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pelvic_scrotum',
            'value'=>'normal',
            'checked'=>$examination["pelvic_scrotum"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pelvic_scrotum',
            'value'=>'abnormal',
            'checked'=>$examination["pelvic_scrotum"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>Abnormal</label>
        </td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'pelvic_scrotum_describe',
            'value'=>$examination['pelvic_scrotum_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Testes</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pelvic_testes',
            'value'=>'normal',
            'checked'=>$examination["pelvic_testes"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pelvic_testes',
            'value'=>'abnormal',
            'checked'=>$examination["pelvic_testes"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>Abnormal</label>
        </td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'pelvic_testes_describe',
            'value'=>$examination['pelvic_testes_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Penis</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'pelvic_penis',
            'value'=>'normal',
            'checked'=>$examination["pelvic_penis"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'pelvic_penis',
            'value'=>'abnormal',
            'checked'=>$examination["pelvic_penis"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>Abnormal</label>
        </td></tr>
        <tr><td></td><td style='font-size:smaller; font-style:italic'>Describe:
        <?php echo form_input(array(
            'name'=>'pelvic_penis_describe',
            'value'=>$examination['pelvic_penis_describe'],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
              
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "pelvic_examination_remarks",
			  "name"       => "pelvic_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["pelvic_examination_remarks"],
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
     <?php } ?>
    </div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">MSK</div>
    <div class="AccordionPanelContent">
    <table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Upper Limbs</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'msk_upper_limbs',
            'value'=>'normal',
            'checked'=>$examination["msk_upper_limbs"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'msk_upper_limbs',
            'value'=>'abnormal',
            'checked'=>$examination["msk_upper_limbs"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>Abnormal</label>
        </td></tr>
        
        <tr><td valign="top"><b>Lower Limbs</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'msk_lower_limbs',
            'value'=>'normal',
            'checked'=>$examination["msk_lower_limbs"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'msk_lower_limbs',
            'value'=>'abnormal',
            'checked'=>$examination["msk_lower_limbs"]=='abnormal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abnormal</label>
        </td></tr>
        
        <tr><td valign="top"><b>Tone</b></td><td>
    	<?php echo form_input(array(
            'name'=>'msk_tone',
            'value'=>$examination["msk_tone"],
            'onchange' => 'save_examination()')); ?>
      	</td></tr>
        
        <tr><td valign="top"><b>Bulk</b></td><td>
    	<?php echo form_input(array(
            'name'=>'msk_bulk',
            'value'=>$examination["msk_bulk"],
            'onchange' => 'save_examination()')); ?>
      	</td></tr>
        
        <tr><td valign="top"><b>Power Grade</b></td><td>
    	<?php echo form_input(array(
            'name'=>'msk_power_grade',
            'value'=>$examination["msk_power_grade"],
            'onchange' => 'save_examination()')); ?>
      	</td></tr>
              
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "msk_examination_remarks",
			  "name"       => "msk_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["msk_examination_remarks"],
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Skin</div>
    <div class="AccordionPanelContent"><?php
     	$data = array(
              'name'        => 'skin',
              'id'          => 'skin_examination',
              'value'       => $examination['skin'],
              'rows'        => '10',
			  'onchange' => 'save_examination()',
            );

	echo form_textarea($data);

	 ?></div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Eye</div>
    <div class="AccordionPanelContent">
    <table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Vision</b></td><td>
    	<label>RE
		<?php echo form_input(array(
            'name'=>'eye_vision_re',
            'value'=>$examination["eye_vision_re"],
            'onchange' => 'save_examination()')); ?>
            </label><br/><label>LE
		<?php echo form_input(array(
            'name'=>'eye_vision_le',
            'value'=>$examination["eye_vision_le"],
            'onchange' => 'save_examination()')); ?>
        </label>
        </td></tr>
        
        <tr><td valign="top"><b>Lids</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_lids',
            'value'=>'normal',
            'checked'=>$examination["eye_lids"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'eye_lids',
            'value'=>'oedematous',
            'checked'=>$examination["eye_lids"]=='oedematous'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Oedematous</label><br /><label>
        <?php echo form_radio(array(
            'name'=>'eye_lids',
            'value'=>'laceration',
            'checked'=>$examination["eye_lids"]=='laceration'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Laceration</label>label>
        <?php echo form_radio(array(
            'name'=>'eye_lids',
            'value'=>'swelling',
            'checked'=>$examination["eye_lids"]=='swelling'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Swelling</label></td></tr>
        
        <tr><td valign="top"><b>Conjunctiva</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'clear',
            'checked'=>$examination["eye_conjunctiva"]=='clear'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Clear</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'injected',
            'checked'=>$examination["eye_conjunctiva"]=='injected'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Injected</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'redness',
            'checked'=>$examination["eye_conjunctiva"]=='redness'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Redness</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'chemosis',
            'checked'=>$examination["eye_conjunctiva"]=='chemosis'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Chemosis</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'laceration',
            'checked'=>$examination["eye_conjunctiva"]=='laceration'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Laceration</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'subconjunctiva haemorrhage',
            'checked'=>$examination["eye_conjunctiva"]=='subconjunctiva haemorrhage'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Subconjunctiva Haemorrhage</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'pupillae',
            'checked'=>$examination["eye_conjunctiva"]=='pupillae'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Pupillae</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'follicles',
            'checked'=>$examination["eye_conjunctiva"]=='follicles'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Follicles</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_conjunctiva',
            'value'=>'concrections',
            'checked'=>$examination["eye_conjunctiva"]=='concrections'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Concrections</label>&nbsp;</td></tr>
        
        <tr><td valign="top"><b>Cornea</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'clear',
            'checked'=>$examination["eye_cornea"]=='clear'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Clear</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'ulcer',
            'checked'=>$examination["eye_cornea"]=='ulcer'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Ulcer</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'abrasion',
            'checked'=>$examination["eye_cornea"]=='abrasion'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Abrasion</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'laceration',
            'checked'=>$examination["eye_cornea"]=='laceration'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Laceration</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'hazy',
            'checked'=>$examination["eye_cornea"]=='hazy'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Hazy</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'opaque',
            'checked'=>$examination["eye_cornea"]=='opaque'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Opaque</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_cornea',
            'value'=>'keratic precipitates',
            'checked'=>$examination["eye_cornea"]=='keratic precipitates'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Keratic Precipitates</label></td></tr>
        
        <tr><td valign="top"><b>A/C</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'deep',
            'checked'=>$examination["eye_ac"]=='deep'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Deep</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'shallow',
            'checked'=>$examination["eye_ac"]=='shallow'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Shallow</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'flat',
            'checked'=>$examination["eye_ac"]=='flat'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Flat</label><label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'cells',
            'checked'=>$examination["eye_ac"]=='cells'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Cells</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'flare',
            'checked'=>$examination["eye_ac"]=='flare'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Flare</label><label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'hyphaema',
            'checked'=>$examination["eye_ac"]=='hyphaema'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Hyphaema</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_ac',
            'value'=>'hypopyon',
            'checked'=>$examination["eye_ac"]=='hypopyon'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Hypopyon</label></td></tr>
        
        <tr><td valign="top"><b>Pupil</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_pupil',
            'value'=>'round reacting to light',
            'checked'=>$examination["eye_pupil"]=='round reacting to light'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Round reacting to light</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_pupil',
            'value'=>'dilated not reacting to light',
            'checked'=>$examination["eye_pupil"]=='dilated not reacting to light'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Dilated not reacting to light</label><br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_pupil',
            'value'=>'miotic',
            'checked'=>$examination["eye_pupil"]=='miotic'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Miotic</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_pupil',
            'value'=>'mydriasis',
            'checked'=>$examination["eye_pupil"]=='mydriasis'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Mydriasis</label><br /></td></tr>
        
        <tr><td valign="top"><b>Lens</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_lens',
            'value'=>'clear',
            'checked'=>$examination["eye_lens"]=='clear'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Clear</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_lens',
            'value'=>'opaque',
            'checked'=>$examination["eye_lens"]=='opaque'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Opaque</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_lens',
            'value'=>'cataract',
            'checked'=>$examination["eye_lens"]=='cataract'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Cataract</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_lens',
            'value'=>'dislocated',
            'checked'=>$examination["eye_lens"]=='dislocated'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Dislocated</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_lens',
            'value'=>'sublaxated',
            'checked'=>$examination["eye_lens"]=='sublaxated'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Sublaxated</label>&nbsp;</td></tr>
        
        <tr><td valign="top"><b>Fundoscopy</b></td></tr>
        <tr><td valign="top" align="right">Retina</td><td>
    	<label>
		<?php echo form_input(array(
            'name'=>'eye_retina',
            'value'=>$examination["eye_retina"],
            'onchange' => 'save_examination()')); ?>
        </label></td></tr>
        
        <tr><td valign="top" align="right">Disc</td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_disc',
            'value'=>'normal',
            'checked'=>$examination["eye_disc"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_disc',
            'value'=>'cupped',
            'checked'=>$examination["eye_disc"]=='cupped'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Cupped</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_disc',
            'value'=>'tortious',
            'checked'=>$examination["eye_disc"]=='tortious'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Tortious</label>&nbsp;</td></tr>
        
        <tr><td valign="top" align="right">Macula</td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'eye_macula',
            'value'=>'normal',
            'checked'=>$examination["eye_macula"]=='normal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Normal</label>&nbsp;<label>
		<?php echo form_radio(array(
            'name'=>'eye_macula',
            'value'=>'dull',
            'checked'=>$examination["eye_macula"]=='dull'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Dull</label>&nbsp;<br /><label>
		<?php echo form_radio(array(
            'name'=>'eye_macula',
            'value'=>'macula lole',
            'checked'=>$examination["eye_macula"]=='macula lole'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Macula lole</label>&nbsp;</td></tr>
                
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "eye_examination_remarks",
			  "name"       => "eye_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["eye_examination_remarks"]
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>

  <div class="AccordionPanel">
    <div class="AccordionPanelTab">ENT</div>
    <div class="AccordionPanelContent"><?php
     	$data = array(
              'name'        => 'ent',
              'id'          => 'ent_examination',
              'value'       => $examination['ent'],
              'rows'        => '10',
			  'onchange' => 'save_examination()',
            );

	echo form_textarea($data);

	 ?></div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Obstetrics and Gynaecology</div>
    <div class="AccordionPanelContent">
	<table height="200px" width="100%">
    <tr><td valign="top">
    <table>
    <tr><td valign="top"><b>Scar</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'obst_gyn_scar',
            'value'=>'yes',
            'checked'=>$examination["obst_gyn_scar"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'obst_gyn_scar',
            'value'=>'no',
            'checked'=>$examination["obst_gyn_scar"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Fundal Height</b></td><td>
    	<?php echo form_input(array(
            'name'=>'obst_gyn_fundal_height',
            'value' => $examination["obst_gyn_fundal_height"],
            'onchange' => 'save_examination()')); ?>
        </td></tr>
        
        <tr><td valign="top"><b>Presentation</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'obst_gyn_presentation',
            'value'=>'cephalic',
            'checked'=>$examination["obst_gyn_presentation"]=='cephalic'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Cephalic</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'obst_gyn_presentation',
            'value'=>'breech',
            'checked'=>$examination["obst_gyn_presentation"]=='breech'?'checked':'',
            'onchange' => 'save_examination()')); ?>Breech</label>
        </td></tr>
        
        <tr><td valign="top"><b>Lie</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'obst_gyn_lie',
            'value'=>'longitudinal',
            'checked'=>$examination["obst_gyn_lie"]=='longitudinal'?'checked':'',
            'onchange' => 'save_examination()')); ?>
        Longitudinal</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'obst_gyn_lie',
            'value'=>'transverse',
            'checked'=>$examination["obst_gyn_lie"]=='transverse'?'checked':'',
            'onchange' => 'save_examination()')); ?>Transverse</label>
        </td></tr>
        
        <tr><td valign="top"><b>Engagement</b></td><td>
    	<label>
		<?php echo form_radio(array(
            'name'=>'obst_gyn_engagement',
            'value'=>'yes',
            'checked'=>$examination["obst_gyn_engagement"]=='yes'?'checked':'',
            'onchange' => 'save_examination()')); ?>
       Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <?php echo form_radio(array(
            'name'=>'obst_gyn_engagement',
            'value'=>'no',
            'checked'=>$examination["obst_gyn_engagement"]=='no'?'checked':'',
            'onchange' => 'save_examination()')); ?>No</label>
        </td></tr>
        
        <tr><td valign="top"><b>Fetal Heart Rate</b></td><td>
    	<?php echo form_input(array(
            'name'=>'obst_gyn_fetal_heart_rate',
            'value' => $examination["obst_gyn_fetal_heart_rate"],
            'onchange' => 'save_examination()')); ?>
      	</td></tr>
              
        </table>
     </td><td valign="top" align="right">
     <table><tr><td valign="top"><b>Other Remarks</b></td>
     <td><?php
	 	
     	$data = array(
              "id"       => "obst_gyn_examination_remarks",
			  "name"       => "obst_gyn_examination_remarks",
              "cols"   => "30",
              "rows"        => "8",
			  "onchange" => "save_examination()",
			  "value" => $examination["obst_gyn_examination_remarks"],
            );

	echo form_textarea($data);

	 ?></td></tr>
     </table>
     </td>
     </tr></table>
    </div>
  </div>
</div>
</form>

<script type="text/javascript" language="javascript">
var Accordion_examination = new Spry.Widget.Accordion("Accordion_examination");

function save_examination()
{
	$("#save_examination_form").ajaxSubmit();
}
</script>
