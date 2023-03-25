<?php 
class ParamUtil {


	public function __construct()
	{
		// code...
	}

	// detech param from uri
	public function GetParamFromUri()
	{
		$first_char_pos = strpos($_SERVER['REQUEST_URI'],'?');
        $uri = substr($_SERVER['REQUEST_URI'],++$first_char_pos);
        parse_str($uri, $params);
        return $params;
	}


	// detech controller and action from uri
	public function GetControllerAction()
	{
		$first_char_pos = strpos($_SERVER['REQUEST_URI'],'?');
        $controller_action = substr($_SERVER['REQUEST_URI'],0,$first_char_pos);
        
        return $controller_action;
	}
}
?>