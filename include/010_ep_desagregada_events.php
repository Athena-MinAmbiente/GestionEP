<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_010_ep_desagregada  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterImport"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, $pageObject)
{

		DB::SetConnection("dbsep at 127.0.0.1");

$sql = DB::prepareSQL("UPDATE
	dbsep.010_ep_desagregada
	SET dbsep.010_ep_desagregada.FA = (SELECT dbsep.global_fecha_actualiza_siif.fecha_actualiza_siif FROM dbsep.global_fecha_actualiza_siif WHERE dbsep.global_fecha_actualiza_siif.id_fs = 1)
WHERE
	dbsep.010_ep_desagregada.FA IS NULL;");
DB::Exec( $sql );

DB::SetConnection("");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		
		
		
		
		
		
		



}
?>
