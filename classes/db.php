<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}
			else
				$orderClause = array( "column" => $userOrder );

			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( isset($dalTables[ $conn->connId ]) )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "edl_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "cargo", "varname" => "edl_at_127_0_0_1__cargo", "altvarname" => "cargo", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato", "varname" => "edl_at_127_0_0_1__contrato", "altvarname" => "contrato", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "funcionario", "varname" => "edl_at_127_0_0_1__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "nombramiento", "varname" => "edl_at_127_0_0_1__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_estados", "varname" => "edl_at_127_0_0_1__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_sn", "varname" => "edl_at_127_0_0_1__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		}
		if( "dbct_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "contractor_master", "varname" => "dbct_at_127_0_0_1__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_001_dashboard", "varname" => "dbct_at_127_0_0_1__q_001_dashboard", "altvarname" => "q_001_dashboard", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_contrato_paa", "varname" => "dbct_at_127_0_0_1__q_contrato_paa", "altvarname" => "q_contrato_paa", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_001", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_001", "altvarname" => "tparam_tipo_ct_001", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_127_0_0_1__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_127_0_0_1", "schema" => "", "connName" => "dbct at 127.0.0.1");
		}
		if( "dbusers_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "divipola", "varname" => "dbusers_at_127_0_0_1__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionep_uggroups", "varname" => "dbusers_at_127_0_0_1__gestionep_uggroups", "altvarname" => "gestionep_uggroups", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionep_ugmembers", "varname" => "dbusers_at_127_0_0_1__gestionep_ugmembers", "altvarname" => "gestionep_ugmembers", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionep_ugrights", "varname" => "dbusers_at_127_0_0_1__gestionep_ugrights", "altvarname" => "gestionep_ugrights", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_users", "varname" => "dbusers_at_127_0_0_1__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		}
		if( "sep2_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "000_global", "varname" => "sep2_at_127_0_0_1__tbl000_global", "altvarname" => "tbl000_global", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "001_rubro", "varname" => "sep2_at_127_0_0_1__tbl001_rubro", "altvarname" => "tbl001_rubro", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "002_producto", "varname" => "sep2_at_127_0_0_1__tbl002_producto", "altvarname" => "tbl002_producto", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "002_producto_mod", "varname" => "sep2_at_127_0_0_1__tbl002_producto_mod", "altvarname" => "tbl002_producto_mod", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "003_actividad", "varname" => "sep2_at_127_0_0_1__tbl003_actividad", "altvarname" => "tbl003_actividad", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "006_compromisos", "varname" => "sep2_at_127_0_0_1__tbl006_compromisos", "altvarname" => "tbl006_compromisos", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "007_cdp", "varname" => "sep2_at_127_0_0_1__tbl007_cdp", "altvarname" => "tbl007_cdp", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "009_ep_agregada", "varname" => "sep2_at_127_0_0_1__tbl009_ep_agregada", "altvarname" => "tbl009_ep_agregada", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "010_ep_desagregada", "varname" => "sep2_at_127_0_0_1__tbl010_ep_desagregada", "altvarname" => "tbl010_ep_desagregada", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "011_obligaciones", "varname" => "sep2_at_127_0_0_1__tbl011_obligaciones", "altvarname" => "tbl011_obligaciones", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "012_odp", "varname" => "sep2_at_127_0_0_1__tbl012_odp", "altvarname" => "tbl012_odp", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_fecha_actualiza_siif", "varname" => "sep2_at_127_0_0_1__global_fecha_actualiza_siif", "altvarname" => "global_fecha_actualiza_siif", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldo_0000c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0000c", "altvarname" => "q_ctrl_saldo_0000c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldo_0000f", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0000f", "altvarname" => "q_ctrl_saldo_0000f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldo_0001c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0001c", "altvarname" => "q_ctrl_saldo_0001c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldo_0001f", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_0001f", "altvarname" => "q_ctrl_saldo_0001f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldo_00021c", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldo_00021c", "altvarname" => "q_ctrl_saldo_00021c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldos_act_paa_1", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_act_paa_1", "altvarname" => "q_ctrl_saldos_act_paa_1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldos_prod_paa_1", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_prod_paa_1", "altvarname" => "q_ctrl_saldos_prod_paa_1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ep_000", "varname" => "sep2_at_127_0_0_1__q_ep_000", "altvarname" => "q_ep_000", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_info_actividad", "varname" => "sep2_at_127_0_0_1__q_info_actividad", "altvarname" => "q_info_actividad", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_info_producto", "varname" => "sep2_at_127_0_0_1__q_info_producto", "altvarname" => "q_info_producto", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_c", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c", "altvarname" => "q_recursos_gestor_c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_c1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c1", "altvarname" => "q_recursos_gestor_c1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_f", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_f", "altvarname" => "q_recursos_gestor_f", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_f1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_f1", "altvarname" => "q_recursos_gestor_f1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_reporte_oaps_000", "varname" => "sep2_at_127_0_0_1__q_reporte_oaps_000", "altvarname" => "q_reporte_oaps_000", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_seg_prog_funcionamiento_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_funcionamiento_001", "altvarname" => "q_seg_prog_funcionamiento_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_seg_prog_inversion_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_inversion_001", "altvarname" => "q_seg_prog_inversion_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_seg_prog_inversion_x_rubro_001", "varname" => "sep2_at_127_0_0_1__q_seg_prog_inversion_x_rubro_001", "altvarname" => "q_seg_prog_inversion_x_rubro_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_estado", "varname" => "sep2_at_127_0_0_1__tparam_estado", "altvarname" => "tparam_estado", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fuente", "varname" => "sep2_at_127_0_0_1__tparam_fuente", "altvarname" => "tparam_fuente", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fuente_siif", "varname" => "sep2_at_127_0_0_1__tparam_fuente_siif", "altvarname" => "tparam_fuente_siif", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fuenterec", "varname" => "sep2_at_127_0_0_1__tparam_fuenterec", "altvarname" => "tparam_fuenterec", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_mod_estado", "varname" => "sep2_at_127_0_0_1__tparam_mod_estado", "altvarname" => "tparam_mod_estado", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipomod", "varname" => "sep2_at_127_0_0_1__tparam_tipomod", "altvarname" => "tparam_tipomod", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tiporubro", "varname" => "sep2_at_127_0_0_1__tparam_tiporubro", "altvarname" => "tparam_tiporubro", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_uej", "varname" => "sep2_at_127_0_0_1__tparam_uej", "altvarname" => "tparam_uej", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_vigencia", "varname" => "sep2_at_127_0_0_1__tparam_vigencia", "altvarname" => "tparam_vigencia", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		}
		if( "mincit_global_20x_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "global_duracion", "varname" => "mincit_global_20x_at_127_0_0_1__global_duracion", "altvarname" => "global_duracion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estado", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado", "altvarname" => "global_estado", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estado_mod", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado_mod", "altvarname" => "global_estado_mod", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estado_scdp", "varname" => "mincit_global_20x_at_127_0_0_1__global_estado_scdp", "altvarname" => "global_estado_scdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estvf", "varname" => "mincit_global_20x_at_127_0_0_1__global_estvf", "altvarname" => "global_estvf", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_fuenterec", "varname" => "mincit_global_20x_at_127_0_0_1__global_fuenterec", "altvarname" => "global_fuenterec", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_meses", "varname" => "mincit_global_20x_at_127_0_0_1__global_meses", "altvarname" => "global_meses", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_modalidad", "varname" => "mincit_global_20x_at_127_0_0_1__global_modalidad", "altvarname" => "global_modalidad", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_operacion", "varname" => "mincit_global_20x_at_127_0_0_1__global_operacion", "altvarname" => "global_operacion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_paa_nopaa", "varname" => "mincit_global_20x_at_127_0_0_1__global_paa_nopaa", "altvarname" => "global_paa_nopaa", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_tipo_cdp", "varname" => "mincit_global_20x_at_127_0_0_1__global_tipo_cdp", "altvarname" => "global_tipo_cdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_ubicacion", "varname" => "mincit_global_20x_at_127_0_0_1__global_ubicacion", "altvarname" => "global_ubicacion", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_uc", "varname" => "mincit_global_20x_at_127_0_0_1__global_uc", "altvarname" => "global_uc", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_unspsc", "varname" => "mincit_global_20x_at_127_0_0_1__global_unspsc", "altvarname" => "global_unspsc", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_vf", "varname" => "mincit_global_20x_at_127_0_0_1__global_vf", "altvarname" => "global_vf", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_vigencia", "varname" => "mincit_global_20x_at_127_0_0_1__global_vigencia", "altvarname" => "global_vigencia", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "nopaa_master", "varname" => "mincit_global_20x_at_127_0_0_1__nopaa_master", "altvarname" => "nopaa_master", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "paa_master", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master", "altvarname" => "paa_master", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "paa_master_modifica", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_modifica", "altvarname" => "paa_master_modifica", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "paa_master_msj", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_msj", "altvarname" => "paa_master_msj", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "paa_master_pscdp", "varname" => "mincit_global_20x_at_127_0_0_1__paa_master_pscdp", "altvarname" => "paa_master_pscdp", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_info_nopaa_integrado", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_nopaa_integrado", "altvarname" => "q_info_nopaa_integrado", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_info_paa", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_paa", "altvarname" => "q_info_paa", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_info_paa_secgen", "varname" => "mincit_global_20x_at_127_0_0_1__q_info_paa_secgen", "altvarname" => "q_info_paa_secgen", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_informe_export_secop", "varname" => "mincit_global_20x_at_127_0_0_1__q_informe_export_secop", "altvarname" => "q_informe_export_secop", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_informe_export_secop_no_aprobadas", "varname" => "mincit_global_20x_at_127_0_0_1__q_informe_export_secop_no_aprobadas", "altvarname" => "q_informe_export_secop_no_aprobadas", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_paa_integrados", "varname" => "mincit_global_20x_at_127_0_0_1__q_paa_integrados", "altvarname" => "q_paa_integrados", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_sumatotal_nopaa_integrados", "varname" => "mincit_global_20x_at_127_0_0_1__q_sumatotal_nopaa_integrados", "altvarname" => "q_sumatotal_nopaa_integrados", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "scdp_event_type", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_event_type", "altvarname" => "scdp_event_type", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "scdp_event_type_actividad", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_event_type_actividad", "altvarname" => "scdp_event_type_actividad", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "scdp_tracking", "varname" => "mincit_global_20x_at_127_0_0_1__scdp_tracking", "altvarname" => "scdp_tracking", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_patrimonios", "varname" => "mincit_global_20x_at_127_0_0_1__tparam_patrimonios", "altvarname" => "tparam_patrimonios", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_publicarsecop", "varname" => "mincit_global_20x_at_127_0_0_1__tparam_publicarsecop", "altvarname" => "tparam_publicarsecop", "connId" => "mincit_global_20x_at_127_0_0_1", "schema" => "", "connName" => "dbgpaa at 127.0.0.1");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql,
		$arg1 = null,
		$arg2 = null,
		$arg3 = null,
		$arg4 = null,
		$arg5 = null,
		$arg6 = null,
		$arg7 = null,
		$arg8 = null,
		$arg9 = null,
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}


			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>