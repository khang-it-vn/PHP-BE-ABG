
<?php

	session_start();
	require('config.php');
	//	
	require('base/RequestFilter.php');
	require('base/Controller.php');
	require('base/DbContext.php');

	// import controller
	require('controllers/Account.php');
	require('controllers/User.php');


	//import util
	require('utils/ParamUtil.php');

	$requestFilter = new RequestFilter($_REQUEST);
	$controller = $requestFilter -> createController();
	if($controller)
	{
		$controller -> executeAction();
	}	
?>
