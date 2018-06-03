<?php
	session_start();
    include_once("Smarty.class.php");
	include_once("service_mappings.php");
	
	$service=getregister("service","LOGIN");
	$params=getparameter();
	$tpl=new Smarty();
	$smarty=new Smarty;
	//print_r($tpl);
	
	//print_r($params);
	if(array_key_exists($service,$service_mappings))
	{
	  include_once($service_mappings[$service].".php");
	  $obj=new $service_mappings[$service]($params,$tpl);
	  
	}
	  
	function getregister($seridentifier,$def)
	{
		$param=getparameter();
		if(isset($param[$seridentifier]))
			return $param[$seridentifier];
		else
			return $def; 
	 }
	 
	 function getparameter()
	 {
	 	global $_REQUEST;
		$params=array();
		foreach($_REQUEST as $key=>$value)
		{
			$params[$key]=$value;                                                                                                                 
		}
		//print_r($params);
		return $params;
	 }
?>
