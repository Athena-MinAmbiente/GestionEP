<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_002_producto_mod  extends eventsBase
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

$email=$values['email_not'];
$from="gestion@mincit.gov.co";
$msg="Aqui el mensaje de texto informando sobre la nueva modificación\r\n";
$subject="Solicitud de modificación a presupuesto:".$values['mod_id'];

$msg.= "Justificación: ".$values['mod_justificacion']."\r\n";
//$msg.= "Email: ".$values["email"]."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
