<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_paa_master_modifica_0  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		//**********  Send email with new data  ************

$email=$values['MAIL_NOT'];
$from="gestion@mincit.gov.co";
$fromName="Planeación y Gestión";
$msg="<p>Buen dia,  se ha registrado una nueva solicitud de Modificación al PAA ID: <strong>".$values['PAA_ID_FK']."</strong> para su revisión y gestión, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="Nueva solicitud de Modificación: ".$values['PAA_ID_FK'];

//$msg.= "<strong>Comentarios :</strong><br />".$values['OBS']."<br />";
//$msg.= "Valor solicitado: ".format_number($values['VALOR_SOLICITADO'],false)."<br />";
//$msg.= "<strong>Observaciones:</strong><br />".$values['OBS']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'cc' => $values['SYSUSER'], 'bcc' => 'agutierrezd@mincit.gov.co', 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
