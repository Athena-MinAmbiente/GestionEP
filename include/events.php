<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["CSMailServer"] = true;

		$this->events["GetTablePermissions"]["003_actividad"] = true;


		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["UID"]=$data["idusrglobal"]; // ID de usuario unico registrado en DB
$_SESSION["UEmail"]=$data["usr_email"]; // Session de correo electrónico
$_SESSION["UNombres"]=$data["usr_nombresfull"]; // Sesión de nombres y apellidos
$_SESSION["UDocumento"]=$data["usr_personalid"]; // Sesión de documento de identificación
$_SESSION["UDep"]=$data["usr_dep"]; // Sesión Dependencia FK dbedl (dependnecias)
$_SESSION["UCargo"]=$data["usr_cargo"]; // Sesión de cargo (Códido) FK dbedl (Cargos)

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_CSMailServer(&$params)
	{
	// Put your code here.
echo $_SESSION['mailserver'];
	;
}




	function GetTablePermissions($permissions, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "003_actividad")
		{
			if ($_SESSION['actividad_add'] == TRUE ) {
		$permissions = str_replace("A", "", $permissions); // Quita  "A"
		//$permissions = str_replace("D", "", $permissions); // Quita  "D"
		//$permissions = str_replace("E", "", $permissions); // Quita  "E"
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return $permissions;;
		}
		return $permissions;
	}
}
?>
