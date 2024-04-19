<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "funcionario";
$nonAdminTablesArr[] = "divipola";
$nonAdminTablesArr[] = "global_users";
$nonAdminTablesArr[] = "001_rubro";
$nonAdminTablesArr[] = "002_producto";
$nonAdminTablesArr[] = "dependencias_001";
$nonAdminTablesArr[] = "tparam_fuente";
$nonAdminTablesArr[] = "003_actividad";
$nonAdminTablesArr[] = "tparam_uej";
$nonAdminTablesArr[] = "000_global";
$nonAdminTablesArr[] = "q_recursos_gestor_c";
$nonAdminTablesArr[] = "q_recursos_gestor_c1";
$nonAdminTablesArr[] = "paa_master";
$nonAdminTablesArr[] = "global_unspsc";
$nonAdminTablesArr[] = "global_meses";
$nonAdminTablesArr[] = "global_duracion";
$nonAdminTablesArr[] = "global_fuenterec";
$nonAdminTablesArr[] = "global_vf";
$nonAdminTablesArr[] = "global_estvf";
$nonAdminTablesArr[] = "global_ubicacion";
$nonAdminTablesArr[] = "global_estado";
$nonAdminTablesArr[] = "paa_master_f";
$nonAdminTablesArr[] = "q_ctrl_saldos_act_paa_1";
$nonAdminTablesArr[] = "paa_master_stat_0";
$nonAdminTablesArr[] = "q_info_inversion";
$nonAdminTablesArr[] = "paa_master_msj";
$nonAdminTablesArr[] = "global_vigencia";
$nonAdminTablesArr[] = "global_estado_mod";
$nonAdminTablesArr[] = "tparam_estado";
$nonAdminTablesArr[] = "000_global_fun";
$nonAdminTablesArr[] = "001_rubro_fun";
$nonAdminTablesArr[] = "002_producto_fun";
$nonAdminTablesArr[] = "q_recursos_gestor_f_all";
$nonAdminTablesArr[] = "dependencia";
$nonAdminTablesArr[] = "paa_master_stat_1";
$nonAdminTablesArr[] = "q_info_funcionamiento";
$nonAdminTablesArr[] = "q_info_paa_secgen_report_c";
$nonAdminTablesArr[] = "q_info_paa_secgen_report_f";
$nonAdminTablesArr[] = "paa_master_stat_2";
$nonAdminTablesArr[] = "paa_master_integrado";
$nonAdminTablesArr[] = "tparam_publicarsecop";
$nonAdminTablesArr[] = "q_paa_integrados";
$nonAdminTablesArr[] = "q_informe_export_secop";
$nonAdminTablesArr[] = "q_informe_export_secop_no_aprobadas";
$nonAdminTablesArr[] = "paa_master_admin";
$nonAdminTablesArr[] = "paa_master_stat_6";
$nonAdminTablesArr[] = "q_ctrl_saldo_0000c Chart";
$nonAdminTablesArr[] = "q_ctrl_saldo_0000f Chart";
$nonAdminTablesArr[] = "Dashboard";
$nonAdminTablesArr[] = "q_ctrl_saldo_0001c";
$nonAdminTablesArr[] = "q_ctrl_saldo_0001f";
$nonAdminTablesArr[] = "q_seg_prog_inversion_x_rubro_001";
$nonAdminTablesArr[] = "q_info_paa";
$nonAdminTablesArr[] = "q_seg_prog_funcionamiento_001";
$nonAdminTablesArr[] = "q_info_paa_f";
$nonAdminTablesArr[] = "q_seg_prog_funcionamiento_001 Chart";
$nonAdminTablesArr[] = "q_seg_prog_inversion_x_rubro_001 Chart";
$nonAdminTablesArr[] = "q_ctrl_saldo_00021c";
$nonAdminTablesArr[] = "tparam_patrimonios";
$nonAdminTablesArr[] = "q_reporte_oaps_000 Report";
$nonAdminTablesArr[] = "q_seg_prog_inversion_001";
$nonAdminTablesArr[] = "paa_master_stat_3";
$nonAdminTablesArr[] = "paa_master_stat_4_c";
$nonAdminTablesArr[] = "paa_master_pscdp_c";
$nonAdminTablesArr[] = "global_estado_scdp";
$nonAdminTablesArr[] = "global_operacion";
$nonAdminTablesArr[] = "paa_master_modifica";
$nonAdminTablesArr[] = "paa_master_stat_4_f";
$nonAdminTablesArr[] = "paa_master_pscdp_f";
$nonAdminTablesArr[] = "paa_master_pscdp_0";
$nonAdminTablesArr[] = "paa_master_pscdp_1";
$nonAdminTablesArr[] = "paa_master_modifica_0";
$nonAdminTablesArr[] = "paa_master_info";
$nonAdminTablesArr[] = "paa_master_stat_4_c_integrado";
$nonAdminTablesArr[] = "paa_master_stat_4_f_integrado";
$nonAdminTablesArr[] = "002_producto_mod";
$nonAdminTablesArr[] = "tparam_tipomod";
$nonAdminTablesArr[] = "002_producto_m";
$nonAdminTablesArr[] = "tparam_mod_estado";
$nonAdminTablesArr[] = "002_producto_mod_oap";
$nonAdminTablesArr[] = "002_producto_m_oap";
$nonAdminTablesArr[] = "paa_master_pscdp_00";
$nonAdminTablesArr[] = "scdp_event_type";
$nonAdminTablesArr[] = "scdp_event_type_actividad";
$nonAdminTablesArr[] = "scdp_tracking";
$nonAdminTablesArr[] = "paa_master_stat_0f";
$nonAdminTablesArr[] = "global_uc";
$nonAdminTablesArr[] = "global_paa_nopaa";
$nonAdminTablesArr[] = "q_recursos_gestor_f";
$nonAdminTablesArr[] = "tparam_tipo_ct_000";
$nonAdminTablesArr[] = "tparam_tipo_ct_002";
$nonAdminTablesArr[] = "tparam_tipo_ct_001";
$nonAdminTablesArr[] = "tparam_vigencia";
$nonAdminTablesArr[] = "paa_master_ci";
$nonAdminTablesArr[] = "global_modalidad";
$nonAdminTablesArr[] = "q_recursos_gestor_c2";
$nonAdminTablesArr[] = "q_recursos_gestor_f2";
$nonAdminTablesArr[] = "nopaa_master_c";
$nonAdminTablesArr[] = "Tablero_01";
$nonAdminTablesArr[] = "nopaa_master_f";
$nonAdminTablesArr[] = "q_ctrl_saldos_prod_paa_1";
$nonAdminTablesArr[] = "nopaa_master_ci";
$nonAdminTablesArr[] = "nopaa_master_fi";
$nonAdminTablesArr[] = "q_info_nopaa_integrado";
$nonAdminTablesArr[] = "paa_master_pscdp_integrado";
$nonAdminTablesArr[] = "global_tipo_cdp";
$nonAdminTablesArr[] = "nopaa_master_f_s5";
$nonAdminTablesArr[] = "nopaa_master_c_s5";
$nonAdminTablesArr[] = "paa_master_pscdp_c_nopaa";
$nonAdminTablesArr[] = "paa_master_pscdp_f_nopaa";
$nonAdminTablesArr[] = "nopaa_master";
$nonAdminTablesArr[] = "q_info_paa_cdp_int";
$nonAdminTablesArr[] = "nopaa_master_c_cdp_int";
$nonAdminTablesArr[] = "nopaa_master_f_cdp_int";
$nonAdminTablesArr[] = "nopaa_master_admin";
$nonAdminTablesArr[] = "q_info_actividad";
$nonAdminTablesArr[] = "q_info_producto";
$nonAdminTablesArr[] = "nopaa_master_stat_0";
$nonAdminTablesArr[] = "nopaa_master_c_s5i";
$nonAdminTablesArr[] = "nopaa_master_f_s5i";
$nonAdminTablesArr[] = "q_contrato_paa";
$nonAdminTablesArr[] = "q_001_dashboard";
$nonAdminTablesArr[] = "global_fecha_actualiza_siif";
$nonAdminTablesArr[] = "009_ep_agregada";
$nonAdminTablesArr[] = "010_ep_desagregada";
$nonAdminTablesArr[] = "007_cdp";
$nonAdminTablesArr[] = "006_compromisos";
$nonAdminTablesArr[] = "011_obligaciones";
$nonAdminTablesArr[] = "012_odp";
$nonAdminTablesArr[] = "contractor_master";
$nonAdminTablesArr[] = "q_ep_000 Chart";
$nonAdminTablesArr[] = "000_global_sad";
$nonAdminTablesArr[] = "001_rubro_sad";
$nonAdminTablesArr[] = "002_producto_sad";
$nonAdminTablesArr[] = "tparam_fuente_siif";
$nonAdminTablesArr[] = "tparam_tiporubro";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "gestionep_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "gestionep_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "gestionep_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}