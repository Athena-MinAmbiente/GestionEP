<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_paa_master_stat_6  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;


		$this->events["BeforeEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;


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

		//inversion
$sql = DB::prepareSQL("UPDATE
	dbgp.paa_master
	INNER JOIN
	dbsep.q_ctrl_saldos_act_paa_1
	ON 
		dbgp.paa_master.ACT_ID = dbsep.q_ctrl_saldos_act_paa_1.ACT_ID
		SET
	dbgp.paa_master.VALOR_VIGENCIA = dbsep.q_ctrl_saldos_act_paa_1.SALDO_DISPONIBLE;");
DB::Exec( $sql );


//funcionamiento
$sql = DB::prepareSQL("	UPDATE
	dbgp.paa_master
	INNER JOIN
	dbsep.q_ctrl_saldos_prod_paa_1
	ON 
		dbgp.paa_master.PROD_ID = dbsep.q_ctrl_saldos_prod_paa_1.PROD_ID
		SET
	dbgp.paa_master.VALOR_VIGENCIA = dbsep.q_ctrl_saldos_prod_paa_1.SALDO_DISPONIBLE;");
DB::Exec( $sql );


//**********  Send email with new data  ************

$email=$values['REQ_MAILNOT'];
$from="gestion@mincit.gov.co";
$msg="<p>Buen dia,  se ha realizado la respuesta a su requerimiento con el número PAA ID: <strong>".$values['PAA_ID']."</strong> para su revisión, por favor revise su bandeja de entrada en el módulo de Planeación y Gestión para más detalle.</p>
<br />";
$subject="Respuesta a requerimiento de la solicitud PAA ID: ".$values['PAA_ID'];

$msg.= "<strong>Descripción | Objeto:</strong><br />".$values['DESCRIPCION']."<br />";
$msg.= "Valor solicitado: ".format_number($values['VALOR'],false)."<br />";
//$msg.= "<strong>Observaciones:</strong><br />".$values['OBS_anulacion']."<br />";
$msg.= "<p>Ingrese al siguiente <a href='".$_SESSION['urlweb']."' target='_blank'>Enlace</a></p>";
$msg.= "<p>Cordialmente</p><br />
<p>".$_SESSION['entidad']."<br /></p><br />";

$ret=runner_mail(array('to' => $email, 'bcc' => 'agutierrezd@mincit.gov.co', 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		if($values['VALOR'] > $values['VALOR_VIGENCIA']){
$message = "El valor solicitado, supera el valor del saldo disponible, ajuste el valor antes de continuar";
$return = false;
}
else 
{
return true;
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		//inversion
$sql = DB::prepareSQL("UPDATE
	dbgp.paa_master
	INNER JOIN
	dbsep.q_ctrl_saldos_act_paa_1
	ON 
		dbgp.paa_master.ACT_ID = dbsep.q_ctrl_saldos_act_paa_1.ACT_ID
		SET
	dbgp.paa_master.VALOR_VIGENCIA = dbsep.q_ctrl_saldos_act_paa_1.SALDO_DISPONIBLE;");
DB::Exec( $sql );


//funcionamiento
$sql = DB::prepareSQL("	UPDATE
	dbgp.paa_master
	INNER JOIN
	dbsep.q_ctrl_saldos_prod_paa_1
	ON 
		dbgp.paa_master.PROD_ID = dbsep.q_ctrl_saldos_prod_paa_1.PROD_ID
		SET
	dbgp.paa_master.VALOR_VIGENCIA = dbsep.q_ctrl_saldos_prod_paa_1.SALDO_DISPONIBLE;");
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>