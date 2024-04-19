<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_paa_master_pscdp_1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		//**********  Send email with new data  ************

$email=$values['NOT_MAIL'];
$from="gestion@mincit.gov.co";
$fromName="Planeación y Gestión";
$msg="<p>Buen dia,  se ha registrado una nueva solicitud de CDP con número PAA ID: <strong>".$values['PAA_ID_FK']."</strong> para su revisión y gestión, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="Nueva solicitud CDP: ".$values['PAA_ID_FK'];

//$msg.= "<strong>Comentarios :</strong><br />".$values['OBS']."<br />";
$msg.= "Valor solicitado: ".format_number($values['VALOR_SOLICITADO'],false)."<br />";
$msg.= "<strong>Observaciones:</strong><br />".$values['OBS']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'bcc' => 'agutierrezd@mincit.gov.co', 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$data = array();
$data['scdpid_fk'] = $values['PAAU_ID'];
$data['sys_status'] = $values['SYS_STATUS'];
$data['hr_valor'] = $values['VALOR_SOLICITADO'];
$data['sol_fecha'] = strftime("%Y-%m-%d %H:%M:%S");
$data['user_from'] = $_SESSION["UserID"];
$data['user_to'] = $values['sys_user'];
$data['not_mail'] = $values['NOT_MAIL'];
$data['not_msg'] = $values['OBS'];
DB::Insert("dbgp.scdp_tracking", $data );

//**********  Send email with new data  ************

$email=$values['USER_REG'].$_SESSION['mailserver'].",".$values['NOT_MAIL'];
$from=$_SESSION['correosmtp'];
$fromName="Planeación y Gestión";
$msg="<p>Buen dia,  se ha gestionado la solicitud de CDP con número PAA ID: <strong>".$values['PAA_ID_FK']."</strong>, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="Nueva solicitud CDP | Financiera | PAA ".$values['PAA_ID_FK'];

//$msg.= "<strong>Comentarios :</strong><br />".$values['OBS']."<br />";
$msg.= "Valor solicitado: ".format_number($values['VALOR_SOLICITADO'],false)."<br />";
$msg.= "<strong>Observaciones:</strong><br />".$values['OBS']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'bcc' => 'desarrolloit@live.com', 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
