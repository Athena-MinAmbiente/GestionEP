<?php
$dalTablegestionep_ugmembers = array();
$dalTablegestionep_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablegestionep_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestionep_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablegestionep_ugmembers["UserName"]["key"]=true;
$dalTablegestionep_ugmembers["GroupID"]["key"]=true;
$dalTablegestionep_ugmembers["Provider"]["key"]=true;

$dal_info["dbusers_at_127_0_0_1__gestionep_ugmembers"] = &$dalTablegestionep_ugmembers;
?>