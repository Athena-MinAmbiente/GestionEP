<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbledl_at_127_0_0_1__cargo;
	var $tbledl_at_127_0_0_1__contrato;
	var $tbledl_at_127_0_0_1__dependencia;
	var $tbledl_at_127_0_0_1__dependencias_001;
	var $tbledl_at_127_0_0_1__funcionario;
	var $tbledl_at_127_0_0_1__nombramiento;
	var $tbledl_at_127_0_0_1__tparam_estados;
	var $tbledl_at_127_0_0_1__tparam_sn;
	var $tbldbct_at_127_0_0_1__contractor_master;
	var $tbldbct_at_127_0_0_1__q_001_dashboard;
	var $tbldbct_at_127_0_0_1__q_contrato_paa;
	var $tbldbct_at_127_0_0_1__tparam_tipo_ct_000;
	var $tbldbct_at_127_0_0_1__tparam_tipo_ct_001;
	var $tbldbct_at_127_0_0_1__tparam_tipo_ct_002;
	var $tbldbusers_at_127_0_0_1__divipola;
	var $tbldbusers_at_127_0_0_1__gestionep_uggroups;
	var $tbldbusers_at_127_0_0_1__gestionep_ugmembers;
	var $tbldbusers_at_127_0_0_1__gestionep_ugrights;
	var $tbldbusers_at_127_0_0_1__global_users;
	var $tblsep2_at_127_0_0_1__tbl000_global;
	var $tblsep2_at_127_0_0_1__tbl001_rubro;
	var $tblsep2_at_127_0_0_1__tbl002_producto;
	var $tblsep2_at_127_0_0_1__tbl002_producto_mod;
	var $tblsep2_at_127_0_0_1__tbl003_actividad;
	var $tblsep2_at_127_0_0_1__tbl006_compromisos;
	var $tblsep2_at_127_0_0_1__tbl007_cdp;
	var $tblsep2_at_127_0_0_1__tbl009_ep_agregada;
	var $tblsep2_at_127_0_0_1__tbl010_ep_desagregada;
	var $tblsep2_at_127_0_0_1__tbl011_obligaciones;
	var $tblsep2_at_127_0_0_1__tbl012_odp;
	var $tblsep2_at_127_0_0_1__global_fecha_actualiza_siif;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldo_0000c;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldo_0000f;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldo_0001c;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldo_0001f;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldo_00021c;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldos_act_paa_1;
	var $tblsep2_at_127_0_0_1__q_ctrl_saldos_prod_paa_1;
	var $tblsep2_at_127_0_0_1__q_ep_000;
	var $tblsep2_at_127_0_0_1__q_info_actividad;
	var $tblsep2_at_127_0_0_1__q_info_producto;
	var $tblsep2_at_127_0_0_1__q_recursos_gestor_c;
	var $tblsep2_at_127_0_0_1__q_recursos_gestor_c1;
	var $tblsep2_at_127_0_0_1__q_recursos_gestor_f;
	var $tblsep2_at_127_0_0_1__q_recursos_gestor_f1;
	var $tblsep2_at_127_0_0_1__q_reporte_oaps_000;
	var $tblsep2_at_127_0_0_1__q_seg_prog_funcionamiento_001;
	var $tblsep2_at_127_0_0_1__q_seg_prog_inversion_001;
	var $tblsep2_at_127_0_0_1__q_seg_prog_inversion_x_rubro_001;
	var $tblsep2_at_127_0_0_1__tparam_estado;
	var $tblsep2_at_127_0_0_1__tparam_fuente;
	var $tblsep2_at_127_0_0_1__tparam_fuente_siif;
	var $tblsep2_at_127_0_0_1__tparam_fuenterec;
	var $tblsep2_at_127_0_0_1__tparam_mod_estado;
	var $tblsep2_at_127_0_0_1__tparam_tipomod;
	var $tblsep2_at_127_0_0_1__tparam_tiporubro;
	var $tblsep2_at_127_0_0_1__tparam_uej;
	var $tblsep2_at_127_0_0_1__tparam_vigencia;
	var $tblmincit_global_20x_at_127_0_0_1__global_duracion;
	var $tblmincit_global_20x_at_127_0_0_1__global_estado;
	var $tblmincit_global_20x_at_127_0_0_1__global_estado_mod;
	var $tblmincit_global_20x_at_127_0_0_1__global_estado_scdp;
	var $tblmincit_global_20x_at_127_0_0_1__global_estvf;
	var $tblmincit_global_20x_at_127_0_0_1__global_fuenterec;
	var $tblmincit_global_20x_at_127_0_0_1__global_meses;
	var $tblmincit_global_20x_at_127_0_0_1__global_modalidad;
	var $tblmincit_global_20x_at_127_0_0_1__global_operacion;
	var $tblmincit_global_20x_at_127_0_0_1__global_paa_nopaa;
	var $tblmincit_global_20x_at_127_0_0_1__global_tipo_cdp;
	var $tblmincit_global_20x_at_127_0_0_1__global_ubicacion;
	var $tblmincit_global_20x_at_127_0_0_1__global_uc;
	var $tblmincit_global_20x_at_127_0_0_1__global_unspsc;
	var $tblmincit_global_20x_at_127_0_0_1__global_vf;
	var $tblmincit_global_20x_at_127_0_0_1__global_vigencia;
	var $tblmincit_global_20x_at_127_0_0_1__nopaa_master;
	var $tblmincit_global_20x_at_127_0_0_1__paa_master;
	var $tblmincit_global_20x_at_127_0_0_1__paa_master_modifica;
	var $tblmincit_global_20x_at_127_0_0_1__paa_master_msj;
	var $tblmincit_global_20x_at_127_0_0_1__paa_master_pscdp;
	var $tblmincit_global_20x_at_127_0_0_1__q_info_nopaa_integrado;
	var $tblmincit_global_20x_at_127_0_0_1__q_info_paa;
	var $tblmincit_global_20x_at_127_0_0_1__q_info_paa_secgen;
	var $tblmincit_global_20x_at_127_0_0_1__q_informe_export_secop;
	var $tblmincit_global_20x_at_127_0_0_1__q_informe_export_secop_no_aprobadas;
	var $tblmincit_global_20x_at_127_0_0_1__q_paa_integrados;
	var $tblmincit_global_20x_at_127_0_0_1__q_sumatotal_nopaa_integrados;
	var $tblmincit_global_20x_at_127_0_0_1__scdp_event_type;
	var $tblmincit_global_20x_at_127_0_0_1__scdp_event_type_actividad;
	var $tblmincit_global_20x_at_127_0_0_1__scdp_tracking;
	var $tblmincit_global_20x_at_127_0_0_1__tparam_patrimonios;
	var $tblmincit_global_20x_at_127_0_0_1__tparam_publicarsecop;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cargo", "varname" => "edl_at_127_0_0_1__cargo", "altvarname" => "cargo", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato", "varname" => "edl_at_127_0_0_1__contrato", "altvarname" => "contrato", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "edl_at_127_0_0_1__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "nombramiento", "varname" => "edl_at_127_0_0_1__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados", "varname" => "edl_at_127_0_0_1__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "edl_at_127_0_0_1__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_127_0_0_1__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_001_dashboard", "varname" => "dbct_at_127_0_0_1__q_001_dashboard", "altvarname" => "q_001_dashboard", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_contrato_paa", "varname" => "dbct_at_127_0_0_1__q_contrato_paa", "altvarname" => "q_contrato_paa", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_001", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_001", "altvarname" => "tparam_tipo_ct_001", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "divipola", "varname" => "dbusers_at_127_0_0_1__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionep_uggroups", "varname" => "dbusers_at_127_0_0_1__gestionep_uggroups", "altvarname" => "gestionep_uggroups", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionep_ugmembers", "varname" => "dbusers_at_127_0_0_1__gestionep_ugmembers", "altvarname" => "gestionep_ugmembers", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionep_ugrights", "varname" => "dbusers_at_127_0_0_1__gestionep_ugrights", "altvarname" => "gestionep_ugrights", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_127_0_0_1__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "000_global", "varname" => "sep2_at_127_0_0_1__tbl000_global", "altvarname" => "tbl000_global", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "001_rubro", "varname" => "sep2_at_127_0_0_1__tbl001_rubro", "altvarname" => "tbl001_rubro", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "002_producto", "varname" => "sep2_at_127_0_0_1__tbl002_producto", "altvarname" => "tbl002_producto", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "002_producto_mod", "varname" => "sep2_at_127_0_0_1__tbl002_producto_mod", "altvarname" => "tbl002_producto_mod", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "003_actividad", "varname" => "sep2_at_127_0_0_1__tbl003_actividad", "altvarname" => "tbl003_actividad", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "006_compromisos", "varname" => "sep2_at_127_0_0_1__tbl006_compromisos", "altvarname" => "tbl006_compromisos", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "007_cdp", "varname" => "sep2_at_127_0_0_1__tbl007_cdp", "altvarname" => "tbl007_cdp", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "009_ep_agregada", "varname" => "sep2_at_127_0_0_1__tbl009_ep_agregada", "altvarname" => "tbl009_ep_agregada", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "010_ep_desagregada", "varname" => "sep2_at_127_0_0_1__tbl010_ep_desagregada", "altvarname" => "tbl010_ep_desagregada", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "011_obligaciones", "varname" => "sep2_at_127_0_0_1__tbl011_obligaciones", "altvarname" => "tbl011_obligaciones", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "012_odp", "varname" => "sep2_at_127_0_0_1__tbl012_odp", "altvarname" => "tbl012_odp", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_fecha_actualiza_siif", "varname" => "sep2_at_127_0_0_1__global_fecha_actualiza_siif", "altvarname" => "global_fecha_actualiza_siif", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldo_0000c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0000c", "altvarname" => "q_ctrl_saldo_0000c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldo_0000f", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0000f", "altvarname" => "q_ctrl_saldo_0000f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldo_0001c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0001c", "altvarname" => "q_ctrl_saldo_0001c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldo_0001f", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0001f", "altvarname" => "q_ctrl_saldo_0001f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldo_00021c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_00021c", "altvarname" => "q_ctrl_saldo_00021c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldos_act_paa_1", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_act_paa_1", "altvarname" => "q_ctrl_saldos_act_paa_1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ctrl_saldos_prod_paa_1", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_prod_paa_1", "altvarname" => "q_ctrl_saldos_prod_paa_1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_ep_000", "varname" => "sep2_at_127_0_0_1__q_ep_000", "altvarname" => "q_ep_000", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_actividad", "varname" => "sep2_at_127_0_0_1__q_info_actividad", "altvarname" => "q_info_actividad", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_producto", "varname" => "sep2_at_127_0_0_1__q_info_producto", "altvarname" => "q_info_producto", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_recursos_gestor_c", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c", "altvarname" => "q_recursos_gestor_c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_recursos_gestor_c1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c1", "altvarname" => "q_recursos_gestor_c1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_recursos_gestor_f", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_f", "altvarname" => "q_recursos_gestor_f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_recursos_gestor_f1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_f1", "altvarname" => "q_recursos_gestor_f1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_reporte_oaps_000", "varname" => "sep2_at_127_0_0_1__q_reporte_oaps_000", "altvarname" => "q_reporte_oaps_000", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_seg_prog_funcionamiento_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_funcionamiento_001", "altvarname" => "q_seg_prog_funcionamiento_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_seg_prog_inversion_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_inversion_001", "altvarname" => "q_seg_prog_inversion_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_seg_prog_inversion_x_rubro_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_inversion_x_rubro_001", "altvarname" => "q_seg_prog_inversion_x_rubro_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estado", "varname" => "sep2_at_127_0_0_1__tparam_estado", "altvarname" => "tparam_estado", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fuente", "varname" => "sep2_at_127_0_0_1__tparam_fuente", "altvarname" => "tparam_fuente", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fuente_siif", "varname" => "sep2_at_127_0_0_1__tparam_fuente_siif", "altvarname" => "tparam_fuente_siif", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fuenterec", "varname" => "sep2_at_127_0_0_1__tparam_fuenterec", "altvarname" => "tparam_fuenterec", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_mod_estado", "varname" => "sep2_at_127_0_0_1__tparam_mod_estado", "altvarname" => "tparam_mod_estado", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipomod", "varname" => "sep2_at_127_0_0_1__tparam_tipomod", "altvarname" => "tparam_tipomod", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tiporubro", "varname" => "sep2_at_127_0_0_1__tparam_tiporubro", "altvarname" => "tparam_tiporubro", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_uej", "varname" => "sep2_at_127_0_0_1__tparam_uej", "altvarname" => "tparam_uej", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_vigencia", "varname" => "sep2_at_127_0_0_1__tparam_vigencia", "altvarname" => "tparam_vigencia", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_duracion", "varname" => "mincit_global_20x_at_127_0_0_1__global_duracion", "altvarname" => "global_duracion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_estado", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado", "altvarname" => "global_estado", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_estado_mod", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado_mod", "altvarname" => "global_estado_mod", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_estado_scdp", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado_scdp", "altvarname" => "global_estado_scdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_estvf", "varname" => "mincit_global_20x_at_127_0_0_1__global_estvf", "altvarname" => "global_estvf", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_fuenterec", "varname" => "mincit_global_20x_at_127_0_0_1__global_fuenterec", "altvarname" => "global_fuenterec", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_meses", "varname" => "mincit_global_20x_at_127_0_0_1__global_meses", "altvarname" => "global_meses", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_modalidad", "varname" => "mincit_global_20x_at_127_0_0_1__global_modalidad", "altvarname" => "global_modalidad", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_operacion", "varname" => "mincit_global_20x_at_127_0_0_1__global_operacion", "altvarname" => "global_operacion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_paa_nopaa", "varname" => "mincit_global_20x_at_127_0_0_1__global_paa_nopaa", "altvarname" => "global_paa_nopaa", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_tipo_cdp", "varname" => "mincit_global_20x_at_127_0_0_1__global_tipo_cdp", "altvarname" => "global_tipo_cdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_ubicacion", "varname" => "mincit_global_20x_at_127_0_0_1__global_ubicacion", "altvarname" => "global_ubicacion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_uc", "varname" => "mincit_global_20x_at_127_0_0_1__global_uc", "altvarname" => "global_uc", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_unspsc", "varname" => "mincit_global_20x_at_127_0_0_1__global_unspsc", "altvarname" => "global_unspsc", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_vf", "varname" => "mincit_global_20x_at_127_0_0_1__global_vf", "altvarname" => "global_vf", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_vigencia", "varname" => "mincit_global_20x_at_127_0_0_1__global_vigencia", "altvarname" => "global_vigencia", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "nopaa_master", "varname" => "mincit_global_20x_at_127_0_0_1__nopaa_master", "altvarname" => "nopaa_master", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "paa_master", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master", "altvarname" => "paa_master", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "paa_master_modifica", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_modifica", "altvarname" => "paa_master_modifica", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "paa_master_msj", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_msj", "altvarname" => "paa_master_msj", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "paa_master_pscdp", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_pscdp", "altvarname" => "paa_master_pscdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_nopaa_integrado", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_nopaa_integrado", "altvarname" => "q_info_nopaa_integrado", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_paa", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_paa", "altvarname" => "q_info_paa", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_paa_secgen", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_paa_secgen", "altvarname" => "q_info_paa_secgen", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_informe_export_secop", "varname" => "mincit_global_20x_at_127_0_0_1__q_informe_export_secop", "altvarname" => "q_informe_export_secop", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_informe_export_secop_no_aprobadas", "varname" => "mincit_global_20x_at_127_0_0_1__q_informe_export_secop_no_aprobadas", "altvarname" => "q_informe_export_secop_no_aprobadas", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_paa_integrados", "varname" => "mincit_global_20x_at_127_0_0_1__q_paa_integrados", "altvarname" => "q_paa_integrados", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_sumatotal_nopaa_integrados", "varname" => "mincit_global_20x_at_127_0_0_1__q_sumatotal_nopaa_integrados", "altvarname" => "q_sumatotal_nopaa_integrados", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "scdp_event_type", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_event_type", "altvarname" => "scdp_event_type", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "scdp_event_type_actividad", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_event_type_actividad", "altvarname" => "scdp_event_type_actividad", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "scdp_tracking", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_tracking", "altvarname" => "scdp_tracking", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_patrimonios", "varname" => "mincit_global_20x_at_127_0_0_1__tparam_patrimonios", "altvarname" => "tparam_patrimonios", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_publicarsecop", "varname" => "mincit_global_20x_at_127_0_0_1__tparam_publicarsecop", "altvarname" => "tparam_publicarsecop", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>