<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "dbusers_at_127_0_0_1";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "dbusers_at_127_0_0_1" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "dbusers_at_127_0_0_1";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "dbusers_at_127_0_0_1";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "dbusers_at_127_0_0_1";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["funcionario"] = "edl_at_127_0_0_1";
		$connectionsIds["divipola"] = "dbusers_at_127_0_0_1";
		$connectionsIds["global_users"] = "dbusers_at_127_0_0_1";
		$connectionsIds["001_rubro"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto"] = "sep2_at_127_0_0_1";
		$connectionsIds["dependencias_001"] = "edl_at_127_0_0_1";
		$connectionsIds["tparam_fuente"] = "sep2_at_127_0_0_1";
		$connectionsIds["003_actividad"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_uej"] = "sep2_at_127_0_0_1";
		$connectionsIds["000_global"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_c"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_c1"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_unspsc"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_meses"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_duracion"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_fuenterec"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_vf"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_estvf"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_ubicacion"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_estado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldos_act_paa_1"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master_stat_0"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_inversion"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master_msj"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_vigencia"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_estado_mod"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["tparam_estado"] = "sep2_at_127_0_0_1";
		$connectionsIds["000_global_fun"] = "sep2_at_127_0_0_1";
		$connectionsIds["001_rubro_fun"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto_fun"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_f_all"] = "sep2_at_127_0_0_1";
		$connectionsIds["dependencia"] = "edl_at_127_0_0_1";
		$connectionsIds["paa_master_stat_1"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_funcionamiento"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_info_paa_secgen_report_c"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_paa_secgen_report_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_2"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_integrado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["tparam_publicarsecop"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_paa_integrados"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_informe_export_secop"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_informe_export_secop_no_aprobadas"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_admin"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_6"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldo_0000c Chart"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldo_0000f Chart"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldo_0001c"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldo_0001f"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_seg_prog_inversion_x_rubro_001"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_info_paa"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_seg_prog_funcionamiento_001"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_info_paa_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_seg_prog_funcionamiento_001 Chart"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_seg_prog_inversion_x_rubro_001 Chart"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldo_00021c"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_patrimonios"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_reporte_oaps_000 Report"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_seg_prog_inversion_001"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master_stat_3"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_4_c"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_c"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_estado_scdp"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_operacion"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_modifica"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_4_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_0"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_1"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_modifica_0"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_info"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_4_c_integrado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_4_f_integrado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["002_producto_mod"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_tipomod"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto_m"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_mod_estado"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto_mod_oap"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto_m_oap"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_00"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["scdp_event_type"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["scdp_event_type_actividad"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["scdp_tracking"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_stat_0f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_uc"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_paa_nopaa"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_f"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_tipo_ct_000"] = "dbct_at_127_0_0_1";
		$connectionsIds["tparam_tipo_ct_002"] = "dbct_at_127_0_0_1";
		$connectionsIds["tparam_tipo_ct_001"] = "dbct_at_127_0_0_1";
		$connectionsIds["tparam_vigencia"] = "sep2_at_127_0_0_1";
		$connectionsIds["paa_master_ci"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_modalidad"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_c2"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_recursos_gestor_f2"] = "sep2_at_127_0_0_1";
		$connectionsIds["nopaa_master_c"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_f"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_ctrl_saldos_prod_paa_1"] = "sep2_at_127_0_0_1";
		$connectionsIds["nopaa_master_ci"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_fi"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_nopaa_integrado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_integrado"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["global_tipo_cdp"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_f_s5"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_c_s5"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_c_nopaa"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["paa_master_pscdp_f_nopaa"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_paa_cdp_int"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_c_cdp_int"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_f_cdp_int"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_admin"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_info_actividad"] = "sep2_at_127_0_0_1";
		$connectionsIds["q_info_producto"] = "sep2_at_127_0_0_1";
		$connectionsIds["nopaa_master_stat_0"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_c_s5i"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["nopaa_master_f_s5i"] = "mincit_global_20x_at_127_0_0_1";
		$connectionsIds["q_contrato_paa"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_001_dashboard"] = "dbct_at_127_0_0_1";
		$connectionsIds["global_fecha_actualiza_siif"] = "sep2_at_127_0_0_1";
		$connectionsIds["009_ep_agregada"] = "sep2_at_127_0_0_1";
		$connectionsIds["010_ep_desagregada"] = "sep2_at_127_0_0_1";
		$connectionsIds["007_cdp"] = "sep2_at_127_0_0_1";
		$connectionsIds["006_compromisos"] = "sep2_at_127_0_0_1";
		$connectionsIds["011_obligaciones"] = "sep2_at_127_0_0_1";
		$connectionsIds["012_odp"] = "sep2_at_127_0_0_1";
		$connectionsIds["contractor_master"] = "dbct_at_127_0_0_1";
		$connectionsIds["q_ep_000 Chart"] = "sep2_at_127_0_0_1";
		$connectionsIds["000_global_sad"] = "sep2_at_127_0_0_1";
		$connectionsIds["001_rubro_sad"] = "sep2_at_127_0_0_1";
		$connectionsIds["002_producto_sad"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_fuente_siif"] = "sep2_at_127_0_0_1";
		$connectionsIds["tparam_tiporubro"] = "sep2_at_127_0_0_1";
		$connectionsIds["admin_rights"] = "dbusers_at_127_0_0_1";
		$connectionsIds["admin_members"] = "dbusers_at_127_0_0_1";
		$connectionsIds["admin_users"] = "dbusers_at_127_0_0_1";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>