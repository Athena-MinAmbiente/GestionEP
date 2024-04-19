<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_paa_master_stat_1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		if($values['VALOR'] > $values['VALOR_VIGENCIA']){
$message = "El valor solicitado, supera el valor del saldo disponible, ajuste el valor antes de continuar";
$return = false;
}
else 
{
return true;
}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		//**********  Send email with new data  ************
IF ($values['sys_status'] == 6)
{
$email=$values['sys_user']."@mincit.gov.co";
$from="gestion@mincit.gov.co";
$msg="<p>Buen dia,  se ha devuelto la solicitud con el número PAA ID: <strong>".$values['PAA_ID']."</strong> para su respuesta, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="No aprobada la solicitud PAA ID: ".$values['PAA_ID'];

$msg.= "<strong>Descripción | Objeto:</strong><br />".$values['DESCRIPCION']."<br />";
$msg.= "Valor solicitado: ".format_number($values['VALOR'],false)."<br />";
$msg.= "<strong>Observaciones:</strong><br />".$values['OBS_anulacion']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'cc' => 'agutierrezd@mincit.gov.co', 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];
}
else if ($values['sys_status'] == 2)
{
$email=$values['REQ_MAILNOT'];
$from="gestion@mincit.gov.co";
$msg="<p>Buen dia,  se ha revisado y aprobado por el Grupo Administrativa la solicitud con el número PAA ID: <strong>".$values['PAA_ID']."</strong> para verificación y aprobación del ordenador del gasto, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="Aprobación de solicitud PAA ID: ".$values['PAA_ID'];

$msg.= "<strong>Descripción | Objeto:</strong><br />".$values['DESCRIPCION']."<br />";
$msg.= "Valor solicitado: ".format_number($values['VALOR'],false)."<br />";
//$msg.= "<strong>Observaciones:</strong><br />".$values['OBS_anulacion']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'bcc' => 'agutierrezd@mincit.gov.co', 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
