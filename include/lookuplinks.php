<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario.idCargo"]["edit"] = array("table" => "funcionario", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario.idEvaluador"]["edit"] = array("table" => "funcionario", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario.idContrato"]["edit"] = array("table" => "funcionario", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"]["edit"] = array("table" => "funcionario", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"]["edit"] = array("table" => "funcionario", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["000_global"] ) ) {
			$lookupTableLinks["000_global"] = array();
		}
		if( !isset( $lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"] )) {
			$lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"]["edit"] = array("table" => "001_rubro", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"]["edit"] = array("table" => "001_rubro", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["009_ep_agregada"] ) ) {
			$lookupTableLinks["009_ep_agregada"] = array();
		}
		if( !isset( $lookupTableLinks["009_ep_agregada"]["001_rubro.RUBRO"] )) {
			$lookupTableLinks["009_ep_agregada"]["001_rubro.RUBRO"] = array();
		}
		$lookupTableLinks["009_ep_agregada"]["001_rubro.RUBRO"]["edit"] = array("table" => "001_rubro", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"]["edit"] = array("table" => "001_rubro", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente_siif"] ) ) {
			$lookupTableLinks["tparam_fuente_siif"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente_siif"]["001_rubro.FUENTE"] )) {
			$lookupTableLinks["tparam_fuente_siif"]["001_rubro.FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente_siif"]["001_rubro.FUENTE"]["edit"] = array("table" => "001_rubro", "field" => "FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"] )) {
			$lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"]["edit"] = array("table" => "001_rubro", "field" => "TIPO_FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["001_rubro.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["001_rubro.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["001_rubro.Dependencia"]["edit"] = array("table" => "001_rubro", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["001_rubro.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["001_rubro.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["001_rubro.UsuarioResp"]["edit"] = array("table" => "001_rubro", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["010_ep_desagregada"] ) ) {
			$lookupTableLinks["010_ep_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["010_ep_desagregada"]["002_producto.PRODUCTO"] )) {
			$lookupTableLinks["010_ep_desagregada"]["002_producto.PRODUCTO"] = array();
		}
		$lookupTableLinks["010_ep_desagregada"]["002_producto.PRODUCTO"]["edit"] = array("table" => "002_producto", "field" => "PRODUCTO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto.REC"]["edit"] = array("table" => "002_producto", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto.Dependencia"]["edit"] = array("table" => "002_producto", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto.UsuarioResp"]["edit"] = array("table" => "002_producto", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldo_00021c"] ) ) {
			$lookupTableLinks["q_ctrl_saldo_00021c"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldo_00021c"]["003_actividad.PROD_ID_FK"] )) {
			$lookupTableLinks["q_ctrl_saldo_00021c"]["003_actividad.PROD_ID_FK"] = array();
		}
		$lookupTableLinks["q_ctrl_saldo_00021c"]["003_actividad.PROD_ID_FK"]["edit"] = array("table" => "003_actividad", "field" => "PROD_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] )) {
			$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] = array();
		}
		$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"]["add"] = array("table" => "003_actividad", "field" => "PROD_ID_FK", "page" => "add");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] )) {
			$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] = array();
		}
		$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"]["search"] = array("table" => "003_actividad", "field" => "PROD_ID_FK", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"]["edit"] = array("table" => "003_actividad", "field" => "DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"] )) {
			$lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"] = array();
		}
		$lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"]["edit"] = array("table" => "003_actividad", "field" => "RESPONSABLE", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["000_global.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["000_global.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["000_global.VIGENCIA"]["edit"] = array("table" => "000_global", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["000_global.UEJ"] )) {
			$lookupTableLinks["tparam_uej"]["000_global.UEJ"] = array();
		}
		$lookupTableLinks["tparam_uej"]["000_global.UEJ"]["edit"] = array("table" => "000_global", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["000_global.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["000_global.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["000_global.TIPO"]["edit"] = array("table" => "000_global", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estado"] ) ) {
			$lookupTableLinks["tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estado"]["000_global.ESTADO"] )) {
			$lookupTableLinks["tparam_estado"]["000_global.ESTADO"] = array();
		}
		$lookupTableLinks["tparam_estado"]["000_global.ESTADO"]["edit"] = array("table" => "000_global", "field" => "ESTADO", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"]["edit"] = array("table" => "q_recursos_gestor_c", "field" => "DEP_002", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"]["edit"] = array("table" => "q_recursos_gestor_c", "field" => "RESPONSABLE_002", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"]["edit"] = array("table" => "q_recursos_gestor_c1", "field" => "DEP_003", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"]["edit"] = array("table" => "q_recursos_gestor_c1", "field" => "RESPONSABLE_003", "page" => "edit");
		if( !isset( $lookupTableLinks["003_actividad"] ) ) {
			$lookupTableLinks["003_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["003_actividad"]["paa_master.ACT_ID"] )) {
			$lookupTableLinks["003_actividad"]["paa_master.ACT_ID"] = array();
		}
		$lookupTableLinks["003_actividad"]["paa_master.ACT_ID"]["edit"] = array("table" => "paa_master", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"]["edit"] = array("table" => "paa_master", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"]["edit"] = array("table" => "paa_master", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"]["edit"] = array("table" => "paa_master", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"]["edit"] = array("table" => "paa_master", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master.VF"]["edit"] = array("table" => "paa_master", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"]["edit"] = array("table" => "paa_master", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"]["edit"] = array("table" => "paa_master", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master.sys_status"]["edit"] = array("table" => "paa_master", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master.TIPOSOL"]["edit"] = array("table" => "paa_master", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["paa_master.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["paa_master.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["paa_master.responsable_depsup"]["edit"] = array("table" => "paa_master", "field" => "responsable_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["paa_master.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master.responsable_dep"]["edit"] = array("table" => "paa_master", "field" => "responsable_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["paa_master.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["paa_master.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["paa_master.PAAID_INTEGRADO"]["edit"] = array("table" => "paa_master", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["paa_master.cont_tipoca"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["paa_master.cont_tipoca"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["paa_master.cont_tipoca"]["edit"] = array("table" => "paa_master", "field" => "cont_tipoca", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["paa_master.cont_tipocb"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["paa_master.cont_tipocb"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["paa_master.cont_tipocb"]["edit"] = array("table" => "paa_master", "field" => "cont_tipocb", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["paa_master.cont_tipocc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["paa_master.cont_tipocc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["paa_master.cont_tipocc"]["edit"] = array("table" => "paa_master", "field" => "cont_tipocc", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master.nivel_formacion"] )) {
			$lookupTableLinks[""]["paa_master.nivel_formacion"] = array();
		}
		$lookupTableLinks[""]["paa_master.nivel_formacion"]["edit"] = array("table" => "paa_master", "field" => "nivel_formacion", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master.titulo_otorgado"] )) {
			$lookupTableLinks[""]["paa_master.titulo_otorgado"] = array();
		}
		$lookupTableLinks[""]["paa_master.titulo_otorgado"]["edit"] = array("table" => "paa_master", "field" => "titulo_otorgado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master.nivel_formacion_a"] )) {
			$lookupTableLinks[""]["paa_master.nivel_formacion_a"] = array();
		}
		$lookupTableLinks[""]["paa_master.nivel_formacion_a"]["edit"] = array("table" => "paa_master", "field" => "nivel_formacion_a", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master.titulo_otorgado_a"] )) {
			$lookupTableLinks[""]["paa_master.titulo_otorgado_a"] = array();
		}
		$lookupTableLinks[""]["paa_master.titulo_otorgado_a"]["edit"] = array("table" => "paa_master", "field" => "titulo_otorgado_a", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["paa_master_f.PROD_ID"] )) {
			$lookupTableLinks["002_producto"]["paa_master_f.PROD_ID"] = array();
		}
		$lookupTableLinks["002_producto"]["paa_master_f.PROD_ID"]["edit"] = array("table" => "paa_master_f", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"]["edit"] = array("table" => "paa_master_f", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"]["edit"] = array("table" => "paa_master_f", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"]["edit"] = array("table" => "paa_master_f", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_f", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"]["edit"] = array("table" => "paa_master_f", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_f", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_f.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_f.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_f.VF"]["edit"] = array("table" => "paa_master_f", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"]["edit"] = array("table" => "paa_master_f", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"]["edit"] = array("table" => "paa_master_f", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_f.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_f.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_f.sys_status"]["edit"] = array("table" => "paa_master_f", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_f.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_f.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_f.TIPOSOL"]["edit"] = array("table" => "paa_master_f", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["paa_master_f.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["paa_master_f.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["paa_master_f.PAAID_INTEGRADO"]["edit"] = array("table" => "paa_master_f", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["paa_master_f.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["paa_master_f.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["paa_master_f.responsable_depsup"]["edit"] = array("table" => "paa_master_f", "field" => "responsable_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_f.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["paa_master_f.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_f.responsable_dep"]["edit"] = array("table" => "paa_master_f", "field" => "responsable_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["paa_master_f.cont_tipoca"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["paa_master_f.cont_tipoca"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["paa_master_f.cont_tipoca"]["edit"] = array("table" => "paa_master_f", "field" => "cont_tipoca", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["paa_master_f.cont_tipocb"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["paa_master_f.cont_tipocb"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["paa_master_f.cont_tipocb"]["edit"] = array("table" => "paa_master_f", "field" => "cont_tipocb", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["paa_master_f.cont_tipocc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["paa_master_f.cont_tipocc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["paa_master_f.cont_tipocc"]["edit"] = array("table" => "paa_master_f", "field" => "cont_tipocc", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_f.nivel_formacion"] )) {
			$lookupTableLinks[""]["paa_master_f.nivel_formacion"] = array();
		}
		$lookupTableLinks[""]["paa_master_f.nivel_formacion"]["edit"] = array("table" => "paa_master_f", "field" => "nivel_formacion", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_f.titulo_otorgado"] )) {
			$lookupTableLinks[""]["paa_master_f.titulo_otorgado"] = array();
		}
		$lookupTableLinks[""]["paa_master_f.titulo_otorgado"]["edit"] = array("table" => "paa_master_f", "field" => "titulo_otorgado", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_f.nivel_formacion_a"] )) {
			$lookupTableLinks[""]["paa_master_f.nivel_formacion_a"] = array();
		}
		$lookupTableLinks[""]["paa_master_f.nivel_formacion_a"]["edit"] = array("table" => "paa_master_f", "field" => "nivel_formacion_a", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_f.titulo_otorgado_a"] )) {
			$lookupTableLinks[""]["paa_master_f.titulo_otorgado_a"] = array();
		}
		$lookupTableLinks[""]["paa_master_f.titulo_otorgado_a"]["edit"] = array("table" => "paa_master_f", "field" => "titulo_otorgado_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0.ACT_ID"]["edit"] = array("table" => "paa_master_stat_0", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_0.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_0.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_0.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_0", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_0.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_0.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_0.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_0", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_0.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_0.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_0.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_0", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_0.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_0.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_0.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_0", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_0.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_0.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_0.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_0", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_0.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_0.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_0.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_0", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_0.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_0.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_0.VF"]["edit"] = array("table" => "paa_master_stat_0", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_0.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_0.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_0.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_0", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_0.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_0.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_0.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_0", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_0.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_0.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_0.sys_status"]["edit"] = array("table" => "paa_master_stat_0", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_0.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_0.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_0.registrado_por"]["edit"] = array("table" => "paa_master_stat_0", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_0", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_inversion.DEP_003"] )) {
			$lookupTableLinks["dependencia"]["q_info_inversion.DEP_003"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_inversion.DEP_003"]["edit"] = array("table" => "q_info_inversion", "field" => "DEP_003", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_info_inversion.RESPONSABLE_003"] )) {
			$lookupTableLinks["global_users"]["q_info_inversion.RESPONSABLE_003"] = array();
		}
		$lookupTableLinks["global_users"]["q_info_inversion.RESPONSABLE_003"]["edit"] = array("table" => "q_info_inversion", "field" => "RESPONSABLE_003", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_msj.paa_id_fk"] )) {
			$lookupTableLinks["paa_master"]["paa_master_msj.paa_id_fk"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_msj.paa_id_fk"]["edit"] = array("table" => "paa_master_msj", "field" => "paa_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_msj.user"] )) {
			$lookupTableLinks["global_users"]["paa_master_msj.user"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_msj.user"]["edit"] = array("table" => "paa_master_msj", "field" => "user", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["000_global_fun.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["000_global_fun.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["000_global_fun.VIGENCIA"]["edit"] = array("table" => "000_global_fun", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["000_global_fun.UEJ"] )) {
			$lookupTableLinks["tparam_uej"]["000_global_fun.UEJ"] = array();
		}
		$lookupTableLinks["tparam_uej"]["000_global_fun.UEJ"]["edit"] = array("table" => "000_global_fun", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["000_global_fun.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["000_global_fun.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["000_global_fun.TIPO"]["edit"] = array("table" => "000_global_fun", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estado"] ) ) {
			$lookupTableLinks["tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estado"]["000_global_fun.ESTADO"] )) {
			$lookupTableLinks["tparam_estado"]["000_global_fun.ESTADO"] = array();
		}
		$lookupTableLinks["tparam_estado"]["000_global_fun.ESTADO"]["edit"] = array("table" => "000_global_fun", "field" => "ESTADO", "page" => "edit");
		if( !isset( $lookupTableLinks["000_global_fun"] ) ) {
			$lookupTableLinks["000_global_fun"] = array();
		}
		if( !isset( $lookupTableLinks["000_global_fun"]["001_rubro_fun.RUBRO_ID_FK"] )) {
			$lookupTableLinks["000_global_fun"]["001_rubro_fun.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["000_global_fun"]["001_rubro_fun.RUBRO_ID_FK"]["edit"] = array("table" => "001_rubro_fun", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["001_rubro_fun.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["001_rubro_fun.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["001_rubro_fun.VIGENCIA"]["edit"] = array("table" => "001_rubro_fun", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["010_ep_desagregada"] ) ) {
			$lookupTableLinks["010_ep_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["010_ep_desagregada"]["001_rubro_fun.RUBRO"] )) {
			$lookupTableLinks["010_ep_desagregada"]["001_rubro_fun.RUBRO"] = array();
		}
		$lookupTableLinks["010_ep_desagregada"]["001_rubro_fun.RUBRO"]["edit"] = array("table" => "001_rubro_fun", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["001_rubro_fun.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["001_rubro_fun.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["001_rubro_fun.REC"]["edit"] = array("table" => "001_rubro_fun", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente_siif"] ) ) {
			$lookupTableLinks["tparam_fuente_siif"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente_siif"]["001_rubro_fun.FUENTE"] )) {
			$lookupTableLinks["tparam_fuente_siif"]["001_rubro_fun.FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente_siif"]["001_rubro_fun.FUENTE"]["edit"] = array("table" => "001_rubro_fun", "field" => "FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["001_rubro_fun.TIPO_FUENTE"] )) {
			$lookupTableLinks["tparam_fuente"]["001_rubro_fun.TIPO_FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["001_rubro_fun.TIPO_FUENTE"]["edit"] = array("table" => "001_rubro_fun", "field" => "TIPO_FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["001_rubro_fun.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["001_rubro_fun.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["001_rubro_fun.Dependencia"]["edit"] = array("table" => "001_rubro_fun", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["001_rubro_fun.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["001_rubro_fun.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["001_rubro_fun.UsuarioResp"]["edit"] = array("table" => "001_rubro_fun", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro_fun"] ) ) {
			$lookupTableLinks["001_rubro_fun"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro_fun"]["002_producto_fun.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro_fun"]["002_producto_fun.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro_fun"]["002_producto_fun.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto_fun", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["010_ep_desagregada"] ) ) {
			$lookupTableLinks["010_ep_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["010_ep_desagregada"]["002_producto_fun.PRODUCTO"] )) {
			$lookupTableLinks["010_ep_desagregada"]["002_producto_fun.PRODUCTO"] = array();
		}
		$lookupTableLinks["010_ep_desagregada"]["002_producto_fun.PRODUCTO"]["edit"] = array("table" => "002_producto_fun", "field" => "PRODUCTO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto_fun.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto_fun.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto_fun.REC"]["edit"] = array("table" => "002_producto_fun", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto_fun.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto_fun.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto_fun.Dependencia"]["edit"] = array("table" => "002_producto_fun", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_fun.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto_fun.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_fun.UsuarioResp"]["edit"] = array("table" => "002_producto_fun", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["002_producto_fun.sol_paa"] )) {
			$lookupTableLinks["tparam_sn"]["002_producto_fun.sol_paa"] = array();
		}
		$lookupTableLinks["tparam_sn"]["002_producto_fun.sol_paa"]["edit"] = array("table" => "002_producto_fun", "field" => "sol_paa", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_1.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_1.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_1.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_1", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_1.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_1.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_1.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_1", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_1.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_1.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_1.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_1", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_1.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_1.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_1.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_1", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_1.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_1.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_1.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_1", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_1.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_1.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_1.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_1", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_1.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_1.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_1.VF"]["edit"] = array("table" => "paa_master_stat_1", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_1.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_1.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_1.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_1", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_1.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_1.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_1.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_1", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_1.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_1.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_1.sys_status"]["edit"] = array("table" => "paa_master_stat_1", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_1.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_1.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_1.registrado_por"]["edit"] = array("table" => "paa_master_stat_1", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_1.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_1.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_1.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_1", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_1.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_1.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_1.TIPO"]["edit"] = array("table" => "paa_master_stat_1", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_001"] )) {
			$lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_001"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_001"]["edit"] = array("table" => "q_info_funcionamiento", "field" => "DEP_001", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["q_info_funcionamiento.PROD_ID"] )) {
			$lookupTableLinks["002_producto"]["q_info_funcionamiento.PROD_ID"] = array();
		}
		$lookupTableLinks["002_producto"]["q_info_funcionamiento.PROD_ID"]["edit"] = array("table" => "q_info_funcionamiento", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_002"] )) {
			$lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_002"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_funcionamiento.DEP_002"]["edit"] = array("table" => "q_info_funcionamiento", "field" => "DEP_002", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_info_funcionamiento.RESPONSABLE_002"] )) {
			$lookupTableLinks["global_users"]["q_info_funcionamiento.RESPONSABLE_002"] = array();
		}
		$lookupTableLinks["global_users"]["q_info_funcionamiento.RESPONSABLE_002"]["edit"] = array("table" => "q_info_funcionamiento", "field" => "RESPONSABLE_002", "page" => "edit");
		if( !isset( $lookupTableLinks["003_actividad"] ) ) {
			$lookupTableLinks["003_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_c.ACT_ID"] )) {
			$lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_c.ACT_ID"] = array();
		}
		$lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_c.ACT_ID"]["search"] = array("table" => "q_info_paa_secgen_report_c", "field" => "ACT_ID", "page" => "search");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_c.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_c.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_c.DURACION_ESTIMADA_DMA"]["search"] = array("table" => "q_info_paa_secgen_report_c", "field" => "DURACION_ESTIMADA_DMA", "page" => "search");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_c.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_c.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_c.FUENTE_RECURSOS"]["search"] = array("table" => "q_info_paa_secgen_report_c", "field" => "FUENTE_RECURSOS", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_paa_secgen_report_c.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["q_info_paa_secgen_report_c.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_paa_secgen_report_c.responsable_dep"]["search"] = array("table" => "q_info_paa_secgen_report_c", "field" => "responsable_dep", "page" => "search");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_c.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_c.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_c.responsable_depsup"]["search"] = array("table" => "q_info_paa_secgen_report_c", "field" => "responsable_depsup", "page" => "search");
		if( !isset( $lookupTableLinks["003_actividad"] ) ) {
			$lookupTableLinks["003_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_f.ACT_ID"] )) {
			$lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_f.ACT_ID"] = array();
		}
		$lookupTableLinks["003_actividad"]["q_info_paa_secgen_report_f.ACT_ID"]["search"] = array("table" => "q_info_paa_secgen_report_f", "field" => "ACT_ID", "page" => "search");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_f.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_f.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["q_info_paa_secgen_report_f.DURACION_ESTIMADA_DMA"]["search"] = array("table" => "q_info_paa_secgen_report_f", "field" => "DURACION_ESTIMADA_DMA", "page" => "search");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["q_info_paa_secgen_report_f.FUENTE_RECURSOS"]["search"] = array("table" => "q_info_paa_secgen_report_f", "field" => "FUENTE_RECURSOS", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_paa_secgen_report_f.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["q_info_paa_secgen_report_f.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_paa_secgen_report_f.responsable_dep"]["search"] = array("table" => "q_info_paa_secgen_report_f", "field" => "responsable_dep", "page" => "search");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_f.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_f.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["q_info_paa_secgen_report_f.responsable_depsup"]["search"] = array("table" => "q_info_paa_secgen_report_f", "field" => "responsable_depsup", "page" => "search");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_2.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_2.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_2.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_2", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_2.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_2.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_2.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_2", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_2.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_2.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_2.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_2", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_2.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_2.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_2.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_2", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_2.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_2.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_2.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_2", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_2.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_2.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_2.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_2", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_2.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_2.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_2.VF"]["edit"] = array("table" => "paa_master_stat_2", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_2.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_2.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_2.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_2", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_2.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_2.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_2.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_2", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_2.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_2.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_2.sys_status"]["edit"] = array("table" => "paa_master_stat_2", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_2.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_2.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_2.registrado_por"]["edit"] = array("table" => "paa_master_stat_2", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_2.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_2.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_2.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_2", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_2.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_2.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_2.TIPO"]["edit"] = array("table" => "paa_master_stat_2", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master_integrado.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master_integrado.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master_integrado.ACT_ID"]["edit"] = array("table" => "paa_master_integrado", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_integrado.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_integrado.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_integrado.COD_UNSPSC"]["edit"] = array("table" => "paa_master_integrado", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_integrado.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_integrado.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_integrado.MES_INICIO"]["edit"] = array("table" => "paa_master_integrado", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_integrado.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_integrado.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_integrado.MES_PRESENTA"]["edit"] = array("table" => "paa_master_integrado", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_integrado.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_integrado.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_integrado.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_integrado", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_integrado.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_integrado.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_integrado.MODALIDAD"]["edit"] = array("table" => "paa_master_integrado", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_integrado.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_integrado.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_integrado.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_integrado", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_integrado.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_integrado.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_integrado.VF"]["edit"] = array("table" => "paa_master_integrado", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_integrado.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_integrado.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_integrado.ESTADO_VF"]["edit"] = array("table" => "paa_master_integrado", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_integrado.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_integrado.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_integrado.COD_UBICACION"]["edit"] = array("table" => "paa_master_integrado", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_integrado.responsable"] )) {
			$lookupTableLinks["global_users"]["paa_master_integrado.responsable"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_integrado.responsable"]["edit"] = array("table" => "paa_master_integrado", "field" => "responsable", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["paa_master_integrado.vigencia"] )) {
			$lookupTableLinks["tparam_vigencia"]["paa_master_integrado.vigencia"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["paa_master_integrado.vigencia"]["edit"] = array("table" => "paa_master_integrado", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_integrado.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_integrado.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_integrado.sys_status"]["edit"] = array("table" => "paa_master_integrado", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_integrado.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_integrado.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_integrado.TIPOSOL"]["edit"] = array("table" => "paa_master_integrado", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"]["edit"] = array("table" => "paa_master_admin", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"]["edit"] = array("table" => "paa_master_admin", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"]["edit"] = array("table" => "paa_master_admin", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_admin", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"]["edit"] = array("table" => "paa_master_admin", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_admin", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_admin.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_admin.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_admin.VF"]["edit"] = array("table" => "paa_master_admin", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"]["edit"] = array("table" => "paa_master_admin", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"]["edit"] = array("table" => "paa_master_admin", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_admin.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_admin.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_admin.sys_status"]["edit"] = array("table" => "paa_master_admin", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_admin.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_admin.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_admin.TIPOSOL"]["edit"] = array("table" => "paa_master_admin", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["paa_master_admin.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["paa_master_admin.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["paa_master_admin.responsable_depsup"]["edit"] = array("table" => "paa_master_admin", "field" => "responsable_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_admin.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["paa_master_admin.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_admin.responsable_dep"]["edit"] = array("table" => "paa_master_admin", "field" => "responsable_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["paa_master_admin.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["paa_master_admin.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["paa_master_admin.PAAID_INTEGRADO"]["edit"] = array("table" => "paa_master_admin", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_6.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_6.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_6.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_6", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_6.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_6.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_6.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_6", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_6.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_6.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_6.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_6", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_6.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_6.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_6.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_6", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_6.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_6.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_6.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_6", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_6.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_6.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_6.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_6", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_6.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_6.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_6.VF"]["edit"] = array("table" => "paa_master_stat_6", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_6.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_6.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_6.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_6", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_6.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_6.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_6.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_6", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_6.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_6.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_6.sys_status"]["edit"] = array("table" => "paa_master_stat_6", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_6.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_6.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_6.registrado_por"]["edit"] = array("table" => "paa_master_stat_6", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_6.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_6.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_6.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_6", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_6.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_6.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_6.TIPO"]["edit"] = array("table" => "paa_master_stat_6", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001.Dependencia"]["edit"] = array("table" => "q_seg_prog_inversion_x_rubro_001", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_seg_prog_inversion_x_rubro_001.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["q_seg_prog_inversion_x_rubro_001.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["q_seg_prog_inversion_x_rubro_001.UsuarioResp"]["edit"] = array("table" => "q_seg_prog_inversion_x_rubro_001", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_info_paa.sys_user"] )) {
			$lookupTableLinks["global_users"]["q_info_paa.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["q_info_paa.sys_user"]["edit"] = array("table" => "q_info_paa", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001.Dependencia"]["edit"] = array("table" => "q_seg_prog_funcionamiento_001", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001.UsuarioResp"]["edit"] = array("table" => "q_seg_prog_funcionamiento_001", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001_chart.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001_chart.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["q_seg_prog_funcionamiento_001_chart.Dependencia"]["search"] = array("table" => "q_seg_prog_funcionamiento_001 Chart", "field" => "Dependencia", "page" => "search");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001_chart.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001_chart.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["q_seg_prog_funcionamiento_001_chart.UsuarioResp"]["search"] = array("table" => "q_seg_prog_funcionamiento_001 Chart", "field" => "UsuarioResp", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001_chart.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001_chart.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["q_seg_prog_inversion_x_rubro_001_chart.Dependencia"]["search"] = array("table" => "q_seg_prog_inversion_x_rubro_001 Chart", "field" => "Dependencia", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_seg_prog_inversion_001.DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["q_seg_prog_inversion_001.DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["q_seg_prog_inversion_001.DEPENDENCIA"]["edit"] = array("table" => "q_seg_prog_inversion_001", "field" => "DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_seg_prog_inversion_001.RESPONSABLE"] )) {
			$lookupTableLinks["global_users"]["q_seg_prog_inversion_001.RESPONSABLE"] = array();
		}
		$lookupTableLinks["global_users"]["q_seg_prog_inversion_001.RESPONSABLE"]["edit"] = array("table" => "q_seg_prog_inversion_001", "field" => "RESPONSABLE", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_3.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_3.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_3.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_3", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_3.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_3.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_3.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_3", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_3.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_3.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_3.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_3", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_3.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_3.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_3.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_3", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_3.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_3.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_3.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_3", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_3.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_3.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_3.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_3", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_3.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_3.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_3.VF"]["edit"] = array("table" => "paa_master_stat_3", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_3.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_3.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_3.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_3", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_3.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_3.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_3.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_3", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_3.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_3.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_3.sys_status"]["edit"] = array("table" => "paa_master_stat_3", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_3.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_3.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_3.registrado_por"]["edit"] = array("table" => "paa_master_stat_3", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_3.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_3.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_3.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_3", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_3.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_3.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_3.TIPO"]["edit"] = array("table" => "paa_master_stat_3", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_4_c.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_4_c.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_4_c.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_c.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_4_c.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_4_c.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_4_c.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_4_c.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_4_c.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_4_c.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_4_c.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_4_c.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_4_c.VF"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_4_c.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_4_c.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_4_c.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_4_c.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_4_c.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_4_c.sys_status"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_4_c.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_4_c.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_4_c.registrado_por"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c.TIPO"]["edit"] = array("table" => "paa_master_stat_4_c", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_paa"] ) ) {
			$lookupTableLinks["q_info_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_paa"]["paa_master_pscdp_c.PAA_ID_FK"] )) {
			$lookupTableLinks["q_info_paa"]["paa_master_pscdp_c.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["q_info_paa"]["paa_master_pscdp_c.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_c", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_c.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_c.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_c.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_c", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_c", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_paa_nopaa"] ) ) {
			$lookupTableLinks["global_paa_nopaa"] = array();
		}
		if( !isset( $lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_c", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"]["edit"] = array("table" => "paa_master_modifica", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_mod"] ) ) {
			$lookupTableLinks["global_estado_mod"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"] )) {
			$lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"] = array();
		}
		$lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"]["edit"] = array("table" => "paa_master_modifica", "field" => "PAAM_ST", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_4_f.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_4_f.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_4_f.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_f.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_4_f.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_4_f.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_4_f.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_4_f.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_4_f.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_4_f.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_4_f.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_4_f.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_4_f.VF"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_4_f.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_4_f.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_4_f.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_4_f.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_4_f.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_4_f.sys_status"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_4_f.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_4_f.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_4_f.registrado_por"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f.TIPO"]["edit"] = array("table" => "paa_master_stat_4_f", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_paa"] ) ) {
			$lookupTableLinks["q_info_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_paa"]["paa_master_pscdp_f.PAA_ID_FK"] )) {
			$lookupTableLinks["q_info_paa"]["paa_master_pscdp_f.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["q_info_paa"]["paa_master_pscdp_f.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_f", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_f.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_f.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_f.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_f", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_pscdp_f.USER_REG"] )) {
			$lookupTableLinks["global_users"]["paa_master_pscdp_f.USER_REG"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_pscdp_f.USER_REG"]["edit"] = array("table" => "paa_master_pscdp_f", "field" => "USER_REG", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_f", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_paa_nopaa"] ) ) {
			$lookupTableLinks["global_paa_nopaa"] = array();
		}
		if( !isset( $lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_f", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_0.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_0.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_0.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_0", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_pscdp_0.USER_REG"] )) {
			$lookupTableLinks["global_users"]["paa_master_pscdp_0.USER_REG"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_pscdp_0.USER_REG"]["edit"] = array("table" => "paa_master_pscdp_0", "field" => "USER_REG", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_0.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_0.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_0.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_0", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"] ) ) {
			$lookupTableLinks["scdp_event_type_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_0.sys_user"] )) {
			$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_0.sys_user"] = array();
		}
		$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_0.sys_user"]["edit"] = array("table" => "paa_master_pscdp_0", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_uc"] ) ) {
			$lookupTableLinks["global_uc"] = array();
		}
		if( !isset( $lookupTableLinks["global_uc"]["paa_master_pscdp_0.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_uc"]["paa_master_pscdp_0.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_uc"]["paa_master_pscdp_0.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_0", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_1.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_1.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_1.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_1", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_1.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_1.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_1.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_1", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"] ) ) {
			$lookupTableLinks["scdp_event_type_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_1.sys_user"] )) {
			$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_1.sys_user"] = array();
		}
		$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_1.sys_user"]["edit"] = array("table" => "paa_master_pscdp_1", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_uc"] ) ) {
			$lookupTableLinks["global_uc"] = array();
		}
		if( !isset( $lookupTableLinks["global_uc"]["paa_master_pscdp_1.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_uc"]["paa_master_pscdp_1.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_uc"]["paa_master_pscdp_1.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_1", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_modifica_0.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_modifica_0.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_modifica_0.PAA_ID_FK"]["edit"] = array("table" => "paa_master_modifica_0", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_mod"] ) ) {
			$lookupTableLinks["global_estado_mod"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_mod"]["paa_master_modifica_0.PAAM_ST"] )) {
			$lookupTableLinks["global_estado_mod"]["paa_master_modifica_0.PAAM_ST"] = array();
		}
		$lookupTableLinks["global_estado_mod"]["paa_master_modifica_0.PAAM_ST"]["edit"] = array("table" => "paa_master_modifica_0", "field" => "PAAM_ST", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_modifica_0.SYS_USER"] )) {
			$lookupTableLinks["global_users"]["paa_master_modifica_0.SYS_USER"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_modifica_0.SYS_USER"]["edit"] = array("table" => "paa_master_modifica_0", "field" => "SYS_USER", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_info.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_info.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_info.ACT_ID"]["edit"] = array("table" => "paa_master_info", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_info.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_info.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_info.COD_UNSPSC"]["edit"] = array("table" => "paa_master_info", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_info.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_info.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_info.MES_INICIO"]["edit"] = array("table" => "paa_master_info", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_info.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_info.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_info.MES_PRESENTA"]["edit"] = array("table" => "paa_master_info", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_info.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_info.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_info.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_info", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_info.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_info.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_info.MODALIDAD"]["edit"] = array("table" => "paa_master_info", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_info.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_info.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_info.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_info", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_info.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_info.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_info.VF"]["edit"] = array("table" => "paa_master_info", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_info.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_info.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_info.ESTADO_VF"]["edit"] = array("table" => "paa_master_info", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_info.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_info.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_info.COD_UBICACION"]["edit"] = array("table" => "paa_master_info", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_4_c_integrado.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_4_c_integrado.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_4_c_integrado.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_c_integrado.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_4_c_integrado.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_4_c_integrado.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_4_c_integrado.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_4_c_integrado.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_4_c_integrado.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_4_c_integrado.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c_integrado.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c_integrado.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_c_integrado.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_4_c_integrado.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_4_c_integrado.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_4_c_integrado.VF"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_4_c_integrado.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_4_c_integrado.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_4_c_integrado.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c_integrado.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c_integrado.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_c_integrado.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_4_c_integrado.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_4_c_integrado.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_4_c_integrado.sys_status"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_4_c_integrado.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_4_c_integrado.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_4_c_integrado.registrado_por"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c_integrado.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c_integrado.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_c_integrado.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c_integrado.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c_integrado.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_c_integrado.TIPO"]["edit"] = array("table" => "paa_master_stat_4_c_integrado", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_4_f_integrado.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_4_f_integrado.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_4_f_integrado.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_4_f_integrado.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_4_f_integrado.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_4_f_integrado.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_4_f_integrado.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_4_f_integrado.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_4_f_integrado.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_4_f_integrado.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f_integrado.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f_integrado.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_4_f_integrado.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_4_f_integrado.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_4_f_integrado.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_4_f_integrado.VF"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_4_f_integrado.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_4_f_integrado.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_4_f_integrado.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f_integrado.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f_integrado.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_4_f_integrado.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_4_f_integrado.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_4_f_integrado.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_4_f_integrado.sys_status"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_4_f_integrado.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_4_f_integrado.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_4_f_integrado.registrado_por"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f_integrado.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f_integrado.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_4_f_integrado.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f_integrado.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f_integrado.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_stat_4_f_integrado.TIPO"]["edit"] = array("table" => "paa_master_stat_4_f_integrado", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["002_producto_mod.prod_id_fk"] )) {
			$lookupTableLinks["002_producto"]["002_producto_mod.prod_id_fk"] = array();
		}
		$lookupTableLinks["002_producto"]["002_producto_mod.prod_id_fk"]["edit"] = array("table" => "002_producto_mod", "field" => "prod_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipomod"] ) ) {
			$lookupTableLinks["tparam_tipomod"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipomod"]["002_producto_mod.tipo_mod"] )) {
			$lookupTableLinks["tparam_tipomod"]["002_producto_mod.tipo_mod"] = array();
		}
		$lookupTableLinks["tparam_tipomod"]["002_producto_mod.tipo_mod"]["edit"] = array("table" => "002_producto_mod", "field" => "tipo_mod", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_mod_estado"] ) ) {
			$lookupTableLinks["tparam_mod_estado"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_mod_estado"]["002_producto_mod.mod_estado"] )) {
			$lookupTableLinks["tparam_mod_estado"]["002_producto_mod.mod_estado"] = array();
		}
		$lookupTableLinks["tparam_mod_estado"]["002_producto_mod.mod_estado"]["edit"] = array("table" => "002_producto_mod", "field" => "mod_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_mod.sys_user"] )) {
			$lookupTableLinks["global_users"]["002_producto_mod.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_mod.sys_user"]["edit"] = array("table" => "002_producto_mod", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto_m.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto_m.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto_m.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto_m", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto_m.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto_m.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto_m.REC"]["edit"] = array("table" => "002_producto_m", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto_m.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto_m.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto_m.Dependencia"]["edit"] = array("table" => "002_producto_m", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_m.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto_m.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_m.UsuarioResp"]["edit"] = array("table" => "002_producto_m", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["002_producto_mod_oap.prod_id_fk"] )) {
			$lookupTableLinks["002_producto"]["002_producto_mod_oap.prod_id_fk"] = array();
		}
		$lookupTableLinks["002_producto"]["002_producto_mod_oap.prod_id_fk"]["edit"] = array("table" => "002_producto_mod_oap", "field" => "prod_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipomod"] ) ) {
			$lookupTableLinks["tparam_tipomod"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipomod"]["002_producto_mod_oap.tipo_mod"] )) {
			$lookupTableLinks["tparam_tipomod"]["002_producto_mod_oap.tipo_mod"] = array();
		}
		$lookupTableLinks["tparam_tipomod"]["002_producto_mod_oap.tipo_mod"]["edit"] = array("table" => "002_producto_mod_oap", "field" => "tipo_mod", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_mod_estado"] ) ) {
			$lookupTableLinks["tparam_mod_estado"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_mod_estado"]["002_producto_mod_oap.mod_estado"] )) {
			$lookupTableLinks["tparam_mod_estado"]["002_producto_mod_oap.mod_estado"] = array();
		}
		$lookupTableLinks["tparam_mod_estado"]["002_producto_mod_oap.mod_estado"]["edit"] = array("table" => "002_producto_mod_oap", "field" => "mod_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_mod_oap.sys_user"] )) {
			$lookupTableLinks["global_users"]["002_producto_mod_oap.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_mod_oap.sys_user"]["edit"] = array("table" => "002_producto_mod_oap", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto_m_oap.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto_m_oap.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto_m_oap.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto_m_oap", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto_m_oap.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto_m_oap.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto_m_oap.REC"]["edit"] = array("table" => "002_producto_m_oap", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto_m_oap.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto_m_oap.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto_m_oap.Dependencia"]["edit"] = array("table" => "002_producto_m_oap", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_m_oap.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto_m_oap.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_m_oap.UsuarioResp"]["edit"] = array("table" => "002_producto_m_oap", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp_00.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp_00.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp_00.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_00.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_00.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_00.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_pscdp_00.USER_REG"] )) {
			$lookupTableLinks["global_users"]["paa_master_pscdp_00.USER_REG"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_pscdp_00.USER_REG"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "USER_REG", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type"] ) ) {
			$lookupTableLinks["scdp_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type"]["paa_master_pscdp_00.SYS_STATUS"] )) {
			$lookupTableLinks["scdp_event_type"]["paa_master_pscdp_00.SYS_STATUS"] = array();
		}
		$lookupTableLinks["scdp_event_type"]["paa_master_pscdp_00.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"] ) ) {
			$lookupTableLinks["scdp_event_type_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_00.sys_user"] )) {
			$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_00.sys_user"] = array();
		}
		$lookupTableLinks["scdp_event_type_actividad"]["paa_master_pscdp_00.sys_user"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_uc"] ) ) {
			$lookupTableLinks["global_uc"] = array();
		}
		if( !isset( $lookupTableLinks["global_uc"]["paa_master_pscdp_00.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_uc"]["paa_master_pscdp_00.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_uc"]["paa_master_pscdp_00.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_00", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type"] ) ) {
			$lookupTableLinks["scdp_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type"]["scdp_event_type_actividad.evento_type_id_fk"] )) {
			$lookupTableLinks["scdp_event_type"]["scdp_event_type_actividad.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["scdp_event_type"]["scdp_event_type_actividad.evento_type_id_fk"]["edit"] = array("table" => "scdp_event_type_actividad", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["scdp_event_type_actividad.idusrglobal_fk"] )) {
			$lookupTableLinks["global_users"]["scdp_event_type_actividad.idusrglobal_fk"] = array();
		}
		$lookupTableLinks["global_users"]["scdp_event_type_actividad.idusrglobal_fk"]["edit"] = array("table" => "scdp_event_type_actividad", "field" => "idusrglobal_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["scdp_event_type"] ) ) {
			$lookupTableLinks["scdp_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["scdp_event_type"]["scdp_tracking.sys_status"] )) {
			$lookupTableLinks["scdp_event_type"]["scdp_tracking.sys_status"] = array();
		}
		$lookupTableLinks["scdp_event_type"]["scdp_tracking.sys_status"]["edit"] = array("table" => "scdp_tracking", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["scdp_tracking.user_from"] )) {
			$lookupTableLinks["global_users"]["scdp_tracking.user_from"] = array();
		}
		$lookupTableLinks["global_users"]["scdp_tracking.user_from"]["edit"] = array("table" => "scdp_tracking", "field" => "user_from", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["scdp_tracking.user_to"] )) {
			$lookupTableLinks["global_users"]["scdp_tracking.user_to"] = array();
		}
		$lookupTableLinks["global_users"]["scdp_tracking.user_to"]["edit"] = array("table" => "scdp_tracking", "field" => "user_to", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0f.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0f.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_stat_0f.ACT_ID"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_stat_0f.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_stat_0f.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_stat_0f.COD_UNSPSC"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_INICIO"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_stat_0f.MES_PRESENTA"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_stat_0f.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_stat_0f.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_stat_0f.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_stat_0f.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_stat_0f.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_stat_0f.MODALIDAD"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_stat_0f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_stat_0f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_stat_0f.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_stat_0f.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_stat_0f.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_stat_0f.VF"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_stat_0f.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_stat_0f.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_stat_0f.ESTADO_VF"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_stat_0f.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_stat_0f.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_stat_0f.COD_UBICACION"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_stat_0f.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_stat_0f.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_stat_0f.sys_status"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_stat_0f.registrado_por"] )) {
			$lookupTableLinks["global_users"]["paa_master_stat_0f.registrado_por"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_stat_0f.registrado_por"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "registrado_por", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0f.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0f.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_stat_0f.TIPOSOL"]["edit"] = array("table" => "paa_master_stat_0f", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_f.DEP_001"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_f.DEP_001"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_f.DEP_001"]["edit"] = array("table" => "q_recursos_gestor_f", "field" => "DEP_001", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_f.RESPONSABLE_002"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_f.RESPONSABLE_002"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_f.RESPONSABLE_002"]["edit"] = array("table" => "q_recursos_gestor_f", "field" => "RESPONSABLE_002", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_002", "field" => "cta_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_001", "field" => "ct_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_ci.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_ci.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["paa_master_ci.ACT_ID"]["edit"] = array("table" => "paa_master_ci", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_ci.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_ci.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_ci.COD_UNSPSC"]["edit"] = array("table" => "paa_master_ci", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_ci.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_ci.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_ci.MES_INICIO"]["edit"] = array("table" => "paa_master_ci", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_ci.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_ci.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_ci.MES_PRESENTA"]["edit"] = array("table" => "paa_master_ci", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_ci.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_ci.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_ci.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_ci", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_ci.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_ci.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_ci.MODALIDAD"]["edit"] = array("table" => "paa_master_ci", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_ci.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_ci.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_ci.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_ci", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_ci.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_ci.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_ci.VF"]["edit"] = array("table" => "paa_master_ci", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_ci.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_ci.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_ci.ESTADO_VF"]["edit"] = array("table" => "paa_master_ci", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_ci.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_ci.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_ci.COD_UBICACION"]["edit"] = array("table" => "paa_master_ci", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_ci.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_ci.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_ci.sys_status"]["edit"] = array("table" => "paa_master_ci", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_publicarsecop"] ) ) {
			$lookupTableLinks["tparam_publicarsecop"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_publicarsecop"]["paa_master_ci.TIPOSOL"] )) {
			$lookupTableLinks["tparam_publicarsecop"]["paa_master_ci.TIPOSOL"] = array();
		}
		$lookupTableLinks["tparam_publicarsecop"]["paa_master_ci.TIPOSOL"]["edit"] = array("table" => "paa_master_ci", "field" => "TIPOSOL", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["paa_master_ci.responsable_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["paa_master_ci.responsable_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["paa_master_ci.responsable_depsup"]["edit"] = array("table" => "paa_master_ci", "field" => "responsable_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_ci.responsable_dep"] )) {
			$lookupTableLinks["dependencia"]["paa_master_ci.responsable_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_ci.responsable_dep"]["edit"] = array("table" => "paa_master_ci", "field" => "responsable_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["paa_master_ci.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["paa_master_ci.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["paa_master_ci.PAAID_INTEGRADO"]["edit"] = array("table" => "paa_master_ci", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_ci.nbc"] )) {
			$lookupTableLinks[""]["paa_master_ci.nbc"] = array();
		}
		$lookupTableLinks[""]["paa_master_ci.nbc"]["edit"] = array("table" => "paa_master_ci", "field" => "nbc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["paa_master_ci.cont_tipoca"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["paa_master_ci.cont_tipoca"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["paa_master_ci.cont_tipoca"]["edit"] = array("table" => "paa_master_ci", "field" => "cont_tipoca", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["paa_master_ci.cont_tipocb"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["paa_master_ci.cont_tipocb"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["paa_master_ci.cont_tipocb"]["edit"] = array("table" => "paa_master_ci", "field" => "cont_tipocb", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["paa_master_ci.cont_tipocc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["paa_master_ci.cont_tipocc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["paa_master_ci.cont_tipocc"]["edit"] = array("table" => "paa_master_ci", "field" => "cont_tipocc", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_c2.DEP_003"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_c2.DEP_003"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_c2.DEP_003"]["edit"] = array("table" => "q_recursos_gestor_c2", "field" => "DEP_003", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_c2.RESPONSABLE_003"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_c2.RESPONSABLE_003"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_c2.RESPONSABLE_003"]["edit"] = array("table" => "q_recursos_gestor_c2", "field" => "RESPONSABLE_003", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_f2.DEP_001"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_f2.DEP_001"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_f2.DEP_001"]["edit"] = array("table" => "q_recursos_gestor_f2", "field" => "DEP_001", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_f2.RESPONSABLE_002"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_f2.RESPONSABLE_002"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_f2.RESPONSABLE_002"]["edit"] = array("table" => "q_recursos_gestor_f2", "field" => "RESPONSABLE_002", "page" => "edit");
		if( !isset( $lookupTableLinks["003_actividad"] ) ) {
			$lookupTableLinks["003_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["003_actividad"]["nopaa_master_c.ACT_ID"] )) {
			$lookupTableLinks["003_actividad"]["nopaa_master_c.ACT_ID"] = array();
		}
		$lookupTableLinks["003_actividad"]["nopaa_master_c.ACT_ID"]["edit"] = array("table" => "nopaa_master_c", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_c.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_c.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_c.sys_status"]["edit"] = array("table" => "nopaa_master_c", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_c.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_c.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_c.MES_INICIO"]["edit"] = array("table" => "nopaa_master_c", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_c.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_c.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_c.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_c", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_c.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c.transferir_a"]["edit"] = array("table" => "nopaa_master_c", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f.ACT_ID"]["edit"] = array("table" => "nopaa_master_f", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["nopaa_master_f.PROD_ID"] )) {
			$lookupTableLinks["002_producto"]["nopaa_master_f.PROD_ID"] = array();
		}
		$lookupTableLinks["002_producto"]["nopaa_master_f.PROD_ID"]["edit"] = array("table" => "nopaa_master_f", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_f.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_f.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_f.MES_INICIO"]["edit"] = array("table" => "nopaa_master_f", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_f.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_f", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_f.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_f.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_f.sys_status"]["edit"] = array("table" => "nopaa_master_f", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_f.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f.transferir_a"]["edit"] = array("table" => "nopaa_master_f", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_ci.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_ci.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_ci.ACT_ID"]["edit"] = array("table" => "nopaa_master_ci", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["nopaa_master_ci.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["nopaa_master_ci.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["nopaa_master_ci.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_ci", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_ci.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_ci.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_ci.sys_status"]["edit"] = array("table" => "nopaa_master_ci", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_ci.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_ci.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_ci.MES_INICIO"]["edit"] = array("table" => "nopaa_master_ci", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_ci.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_ci.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_ci.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_ci", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_ci.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_ci.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_ci.transferir_a"]["edit"] = array("table" => "nopaa_master_ci", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_fi.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_fi.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_fi.ACT_ID"]["edit"] = array("table" => "nopaa_master_fi", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_fi.PROD_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_fi.PROD_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_fi.PROD_ID"]["edit"] = array("table" => "nopaa_master_fi", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["nopaa_master_fi.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["nopaa_master_fi.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["nopaa_master_fi.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_fi", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_fi.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_fi.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_fi.MES_INICIO"]["edit"] = array("table" => "nopaa_master_fi", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_fi.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_fi.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_fi.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_fi", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_fi.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_fi.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_fi.sys_status"]["edit"] = array("table" => "nopaa_master_fi", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_fi.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_fi.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_fi.transferir_a"]["edit"] = array("table" => "nopaa_master_fi", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_paa"] ) ) {
			$lookupTableLinks["q_info_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_paa"]["paa_master_pscdp_integrado.PAA_ID_FK"] )) {
			$lookupTableLinks["q_info_paa"]["paa_master_pscdp_integrado.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["q_info_paa"]["paa_master_pscdp_integrado.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_pscdp_integrado.VIGENCIA"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_pscdp_integrado.VIGENCIA"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_pscdp_integrado.VIGENCIA"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_integrado.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_integrado.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_integrado.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_integrado.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_integrado.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_integrado.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_paa_nopaa"] ) ) {
			$lookupTableLinks["global_paa_nopaa"] = array();
		}
		if( !isset( $lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_integrado.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_integrado.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_integrado.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_tipo_cdp"] ) ) {
			$lookupTableLinks["global_tipo_cdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_tipo_cdp"]["paa_master_pscdp_integrado.TIPO_CDP"] )) {
			$lookupTableLinks["global_tipo_cdp"]["paa_master_pscdp_integrado.TIPO_CDP"] = array();
		}
		$lookupTableLinks["global_tipo_cdp"]["paa_master_pscdp_integrado.TIPO_CDP"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "TIPO_CDP", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_pscdp_integrado.MES_CDP"] )) {
			$lookupTableLinks["global_meses"]["paa_master_pscdp_integrado.MES_CDP"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_pscdp_integrado.MES_CDP"]["edit"] = array("table" => "paa_master_pscdp_integrado", "field" => "MES_CDP", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5.ACT_ID"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5.PROD_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5.PROD_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5.PROD_ID"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_f_s5.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_f_s5.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_f_s5.MES_INICIO"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_f_s5.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_f_s5.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_f_s5.sys_user"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_f_s5.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_f_s5.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_f_s5.sys_status"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5.transferir_a"]["edit"] = array("table" => "nopaa_master_f_s5", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5.ACT_ID"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_c_s5.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_c_s5.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_c_s5.MES_INICIO"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_c_s5.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_c_s5.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_c_s5.sys_user"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_c_s5.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_c_s5.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_c_s5.sys_status"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5.transferir_a"]["edit"] = array("table" => "nopaa_master_c_s5", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["nopaa_master"] ) ) {
			$lookupTableLinks["nopaa_master"] = array();
		}
		if( !isset( $lookupTableLinks["nopaa_master"]["paa_master_pscdp_c_nopaa.PAA_ID_FK"] )) {
			$lookupTableLinks["nopaa_master"]["paa_master_pscdp_c_nopaa.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["nopaa_master"]["paa_master_pscdp_c_nopaa.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_c_nopaa", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_c_nopaa.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_c_nopaa.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_c_nopaa.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_c_nopaa", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c_nopaa.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c_nopaa.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_c_nopaa.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_c_nopaa", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_paa_nopaa"] ) ) {
			$lookupTableLinks["global_paa_nopaa"] = array();
		}
		if( !isset( $lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c_nopaa.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c_nopaa.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_c_nopaa.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_c_nopaa", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["nopaa_master"] ) ) {
			$lookupTableLinks["nopaa_master"] = array();
		}
		if( !isset( $lookupTableLinks["nopaa_master"]["paa_master_pscdp_f_nopaa.PAA_ID_FK"] )) {
			$lookupTableLinks["nopaa_master"]["paa_master_pscdp_f_nopaa.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["nopaa_master"]["paa_master_pscdp_f_nopaa.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_f_nopaa", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_f_nopaa.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_f_nopaa.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_f_nopaa.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_f_nopaa", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["paa_master_pscdp_f_nopaa.USER_REG"] )) {
			$lookupTableLinks["global_users"]["paa_master_pscdp_f_nopaa.USER_REG"] = array();
		}
		$lookupTableLinks["global_users"]["paa_master_pscdp_f_nopaa.USER_REG"]["edit"] = array("table" => "paa_master_pscdp_f_nopaa", "field" => "USER_REG", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f_nopaa.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f_nopaa.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_f_nopaa.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_f_nopaa", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_paa_nopaa"] ) ) {
			$lookupTableLinks["global_paa_nopaa"] = array();
		}
		if( !isset( $lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f_nopaa.UNIDAD_CONTRATACION"] )) {
			$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f_nopaa.UNIDAD_CONTRATACION"] = array();
		}
		$lookupTableLinks["global_paa_nopaa"]["paa_master_pscdp_f_nopaa.UNIDAD_CONTRATACION"]["edit"] = array("table" => "paa_master_pscdp_f_nopaa", "field" => "UNIDAD_CONTRATACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_info_paa_cdp_int.sys_user"] )) {
			$lookupTableLinks["global_users"]["q_info_paa_cdp_int.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["q_info_paa_cdp_int.sys_user"]["edit"] = array("table" => "q_info_paa_cdp_int", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_cdp_int.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_cdp_int.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_cdp_int.ACT_ID"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["nopaa_master_c_cdp_int.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["nopaa_master_c_cdp_int.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["nopaa_master_c_cdp_int.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master_pscdp_integrado"] ) ) {
			$lookupTableLinks["paa_master_pscdp_integrado"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_c_cdp_int.CDP_INTEGRADO"] )) {
			$lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_c_cdp_int.CDP_INTEGRADO"] = array();
		}
		$lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_c_cdp_int.CDP_INTEGRADO"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "CDP_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_c_cdp_int.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_c_cdp_int.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_c_cdp_int.MES_INICIO"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_c_cdp_int.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_c_cdp_int.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_c_cdp_int.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_c_cdp_int.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_c_cdp_int.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_c_cdp_int.sys_status"]["edit"] = array("table" => "nopaa_master_c_cdp_int", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_cdp_int.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_cdp_int.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_cdp_int.ACT_ID"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_cdp_int.PROD_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_cdp_int.PROD_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_cdp_int.PROD_ID"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_paa_integrados"] ) ) {
			$lookupTableLinks["q_paa_integrados"] = array();
		}
		if( !isset( $lookupTableLinks["q_paa_integrados"]["nopaa_master_f_cdp_int.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["q_paa_integrados"]["nopaa_master_f_cdp_int.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["q_paa_integrados"]["nopaa_master_f_cdp_int.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_f_cdp_int.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_f_cdp_int.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_f_cdp_int.MES_INICIO"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_f_cdp_int.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_f_cdp_int.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_f_cdp_int.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_f_cdp_int.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_f_cdp_int.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_f_cdp_int.sys_status"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master_pscdp_integrado"] ) ) {
			$lookupTableLinks["paa_master_pscdp_integrado"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_f_cdp_int.CDP_INTEGRADO"] )) {
			$lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_f_cdp_int.CDP_INTEGRADO"] = array();
		}
		$lookupTableLinks["paa_master_pscdp_integrado"]["nopaa_master_f_cdp_int.CDP_INTEGRADO"]["edit"] = array("table" => "nopaa_master_f_cdp_int", "field" => "CDP_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_actividad"] ) ) {
			$lookupTableLinks["q_info_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_actividad"]["nopaa_master_admin.ACT_ID"] )) {
			$lookupTableLinks["q_info_actividad"]["nopaa_master_admin.ACT_ID"] = array();
		}
		$lookupTableLinks["q_info_actividad"]["nopaa_master_admin.ACT_ID"]["edit"] = array("table" => "nopaa_master_admin", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_producto"] ) ) {
			$lookupTableLinks["q_info_producto"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_producto"]["nopaa_master_admin.PROD_ID"] )) {
			$lookupTableLinks["q_info_producto"]["nopaa_master_admin.PROD_ID"] = array();
		}
		$lookupTableLinks["q_info_producto"]["nopaa_master_admin.PROD_ID"]["edit"] = array("table" => "nopaa_master_admin", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["nopaa_master_admin.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["paa_master"]["nopaa_master_admin.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["paa_master"]["nopaa_master_admin.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_admin", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_admin.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_admin.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_admin.MES_INICIO"]["edit"] = array("table" => "nopaa_master_admin", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_admin.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_admin.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_admin.sys_user"]["edit"] = array("table" => "nopaa_master_admin", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_admin.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_admin.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_admin.transferir_a"]["edit"] = array("table" => "nopaa_master_admin", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_actividad"] ) ) {
			$lookupTableLinks["q_info_actividad"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_actividad"]["nopaa_master_stat_0.ACT_ID"] )) {
			$lookupTableLinks["q_info_actividad"]["nopaa_master_stat_0.ACT_ID"] = array();
		}
		$lookupTableLinks["q_info_actividad"]["nopaa_master_stat_0.ACT_ID"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_producto"] ) ) {
			$lookupTableLinks["q_info_producto"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_producto"]["nopaa_master_stat_0.PROD_ID"] )) {
			$lookupTableLinks["q_info_producto"]["nopaa_master_stat_0.PROD_ID"] = array();
		}
		$lookupTableLinks["q_info_producto"]["nopaa_master_stat_0.PROD_ID"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["nopaa_master_stat_0.PAAID_INTEGRADO"] )) {
			$lookupTableLinks["paa_master"]["nopaa_master_stat_0.PAAID_INTEGRADO"] = array();
		}
		$lookupTableLinks["paa_master"]["nopaa_master_stat_0.PAAID_INTEGRADO"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "PAAID_INTEGRADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_stat_0.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_stat_0.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_stat_0.MES_INICIO"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_stat_0.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_stat_0.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_stat_0.sys_user"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_stat_0.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_stat_0.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_stat_0.sys_status"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_stat_0.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_stat_0.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_stat_0.transferir_a"]["edit"] = array("table" => "nopaa_master_stat_0", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5i.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5i.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_c_s5i.ACT_ID"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_c_s5i.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_c_s5i.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_c_s5i.MES_INICIO"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5i.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5i.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_c_s5i.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_c_s5i.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_c_s5i.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_c_s5i.sys_user"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_c_s5i.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_c_s5i.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_c_s5i.sys_status"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5i.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5i.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_c_s5i.transferir_a"]["edit"] = array("table" => "nopaa_master_c_s5i", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5i.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5i.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa_1"]["nopaa_master_f_s5i.ACT_ID"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5i.PROD_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5i.PROD_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_prod_paa_1"]["nopaa_master_f_s5i.PROD_ID"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["nopaa_master_f_s5i.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["nopaa_master_f_s5i.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["nopaa_master_f_s5i.MES_INICIO"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5i.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5i.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["nopaa_master_f_s5i.FUENTE_RECURSOS"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["nopaa_master_f_s5i.sys_user"] )) {
			$lookupTableLinks["global_users"]["nopaa_master_f_s5i.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["nopaa_master_f_s5i.sys_user"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["nopaa_master_f_s5i.sys_status"] )) {
			$lookupTableLinks["global_estado"]["nopaa_master_f_s5i.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["nopaa_master_f_s5i.sys_status"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_patrimonios"] ) ) {
			$lookupTableLinks["tparam_patrimonios"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5i.transferir_a"] )) {
			$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5i.transferir_a"] = array();
		}
		$lookupTableLinks["tparam_patrimonios"]["nopaa_master_f_s5i.transferir_a"]["edit"] = array("table" => "nopaa_master_f_s5i", "field" => "transferir_a", "page" => "edit");
		if( !isset( $lookupTableLinks["q_001_dashboard"] ) ) {
			$lookupTableLinks["q_001_dashboard"] = array();
		}
		if( !isset( $lookupTableLinks["q_001_dashboard"]["q_contrato_paa.id_cont_fk"] )) {
			$lookupTableLinks["q_001_dashboard"]["q_contrato_paa.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_001_dashboard"]["q_contrato_paa.id_cont_fk"]["edit"] = array("table" => "q_contrato_paa", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["010_ep_desagregada.UEJ"] )) {
			$lookupTableLinks["tparam_uej"]["010_ep_desagregada.UEJ"] = array();
		}
		$lookupTableLinks["tparam_uej"]["010_ep_desagregada.UEJ"]["edit"] = array("table" => "010_ep_desagregada", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tiporubro"] ) ) {
			$lookupTableLinks["tparam_tiporubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tiporubro"]["010_ep_desagregada.TIPO"] )) {
			$lookupTableLinks["tparam_tiporubro"]["010_ep_desagregada.TIPO"] = array();
		}
		$lookupTableLinks["tparam_tiporubro"]["010_ep_desagregada.TIPO"]["edit"] = array("table" => "010_ep_desagregada", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["012_odp.Identificacion"] )) {
			$lookupTableLinks["contractor_master"]["012_odp.Identificacion"] = array();
		}
		$lookupTableLinks["contractor_master"]["012_odp.Identificacion"]["edit"] = array("table" => "012_odp", "field" => "Identificacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["000_global_sad.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["000_global_sad.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["000_global_sad.VIGENCIA"]["edit"] = array("table" => "000_global_sad", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["000_global_sad.UEJ"] )) {
			$lookupTableLinks["tparam_uej"]["000_global_sad.UEJ"] = array();
		}
		$lookupTableLinks["tparam_uej"]["000_global_sad.UEJ"]["edit"] = array("table" => "000_global_sad", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["000_global_sad.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["000_global_sad.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["000_global_sad.TIPO"]["edit"] = array("table" => "000_global_sad", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estado"] ) ) {
			$lookupTableLinks["tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estado"]["000_global_sad.ESTADO"] )) {
			$lookupTableLinks["tparam_estado"]["000_global_sad.ESTADO"] = array();
		}
		$lookupTableLinks["tparam_estado"]["000_global_sad.ESTADO"]["edit"] = array("table" => "000_global_sad", "field" => "ESTADO", "page" => "edit");
		if( !isset( $lookupTableLinks["000_global_fun"] ) ) {
			$lookupTableLinks["000_global_fun"] = array();
		}
		if( !isset( $lookupTableLinks["000_global_fun"]["001_rubro_sad.RUBRO_ID_FK"] )) {
			$lookupTableLinks["000_global_fun"]["001_rubro_sad.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["000_global_fun"]["001_rubro_sad.RUBRO_ID_FK"]["edit"] = array("table" => "001_rubro_sad", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["001_rubro_sad.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["001_rubro_sad.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["001_rubro_sad.VIGENCIA"]["edit"] = array("table" => "001_rubro_sad", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["009_ep_agregada"] ) ) {
			$lookupTableLinks["009_ep_agregada"] = array();
		}
		if( !isset( $lookupTableLinks["009_ep_agregada"]["001_rubro_sad.RUBRO"] )) {
			$lookupTableLinks["009_ep_agregada"]["001_rubro_sad.RUBRO"] = array();
		}
		$lookupTableLinks["009_ep_agregada"]["001_rubro_sad.RUBRO"]["edit"] = array("table" => "001_rubro_sad", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["001_rubro_sad.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["001_rubro_sad.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["001_rubro_sad.REC"]["edit"] = array("table" => "001_rubro_sad", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente_siif"] ) ) {
			$lookupTableLinks["tparam_fuente_siif"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente_siif"]["001_rubro_sad.FUENTE"] )) {
			$lookupTableLinks["tparam_fuente_siif"]["001_rubro_sad.FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente_siif"]["001_rubro_sad.FUENTE"]["edit"] = array("table" => "001_rubro_sad", "field" => "FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["001_rubro_sad.TIPO_FUENTE"] )) {
			$lookupTableLinks["tparam_fuente"]["001_rubro_sad.TIPO_FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["001_rubro_sad.TIPO_FUENTE"]["edit"] = array("table" => "001_rubro_sad", "field" => "TIPO_FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["001_rubro_sad.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["001_rubro_sad.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["001_rubro_sad.Dependencia"]["edit"] = array("table" => "001_rubro_sad", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["001_rubro_sad.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["001_rubro_sad.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["001_rubro_sad.UsuarioResp"]["edit"] = array("table" => "001_rubro_sad", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto_sad.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto_sad.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto_sad.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto_sad", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto_sad.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto_sad.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto_sad.REC"]["edit"] = array("table" => "002_producto_sad", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto_sad.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto_sad.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto_sad.Dependencia"]["edit"] = array("table" => "002_producto_sad", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_sad.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto_sad.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_sad.UsuarioResp"]["edit"] = array("table" => "002_producto_sad", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["002_producto_sad.sol_paa"] )) {
			$lookupTableLinks["tparam_sn"]["002_producto_sad.sol_paa"] = array();
		}
		$lookupTableLinks["tparam_sn"]["002_producto_sad.sol_paa"]["edit"] = array("table" => "002_producto_sad", "field" => "sol_paa", "page" => "edit");
}

?>