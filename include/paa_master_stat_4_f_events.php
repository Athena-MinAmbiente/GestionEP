<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_paa_master_stat_4_f  extends eventsBase
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

$email=$values['transferir_a'];
$from="notifica_paa@mincit.gov.co";
$msg="<p>Buen dia,  se ha revisado la solicitud con el número PAA ID: ".$values['PAA_ID']." para su publicación, por favor revise su bandeja de entrada para más detalle.</p>
<p>Ingrese al siguiente <a href='http://gestion.mincit.gov.co/Athena/GestionPAA/login.php' target='_blank'>enlace</a></p><br />
";
$subject="Revisión de solicitud PAA ID: ".$values['PAA_ID'];

$msg.= "Descripción: ".$values['DESCRIPCION']."<br />";
$msg.= "Valor solicitado: ".$values['VALOR']."<br />";
$msg.= "<p>Cordialmente</p><br />
<p>Ministerio de Comercio, Industria y Turismo<br />
</p><br />";

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
