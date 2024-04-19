<?php
class ViewUserControl extends ViewControl
{
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	public $userControl;
	
	public function initUserControl()
	{		
	}
	

	public function addViewPluginJSControl($name)
	{
		if($this->viewFormat == $name)
		{
			$this->AddJSFile("include/runnerJS/controls/".$name.".js", 'include/runnerJS/viewControls/ViewControl.js');
			$this->getJSControl();
			foreach ($this->settings as $settingName => $settingValue)
				$this->addJSControlSetting($settingName, $settingValue);
		}
	}
	/**
	 * Control settings filling
	 */
	public function init()
	{
		$this->userControl = true;
		
		// We need to add this dependencies ViewControl.js - for debug.
		// For build we need to add RunnerAll.js
		//$this->AddJSFile("include/runnerJS/controls/".$this->viewFormat.".js", 'include/runnerJS/viewControls/ViewControl.js');
		
					if($this->container->tName=="paa_master_pscdp_f" && $this->field=="ATTACH_A")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_f" && $this->field=="DOCUMENTO_CDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_0" && $this->field=="DOCUMENTO_SCDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_0" && $this->field=="ATTACH_A")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_1" && $this->field=="DOCUMENTO_SCDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_1" && $this->field=="DOCUMENTO_CDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_1" && $this->field=="ATTACH_A")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_00" && $this->field=="DOCUMENTO_SCDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_00" && $this->field=="ATTACH_A")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_f_nopaa" && $this->field=="ATTACH_A")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="paa_master_pscdp_f_nopaa" && $this->field=="DOCUMENTO_CDP_SIIF")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Check for need to load the javascript files.
	 * Javascript files for user controls are always loaded.
	 * @return boolean
	 */
	public function neededLoadJSFiles() 
	{
		return true;
	}
	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

}
?>