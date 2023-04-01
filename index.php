
<?php

	session_start();
	require('config.php');
	//require('vendor/autoload.php');
	require('endpoint.php');
	//	
	require('base/RequestFilter.php');
	require('base/Controller.php');
	require('base/DbContext.php');

	// import controller
	require('controllers/Account.php');
	require('controllers/User.php');
	require('controllers/Store.php');
	require('controllers/Developer.php');
	require('controllers/AdminDoc.php');
	require('controllers/AdminStore.php');
	//import util
	require('utils/ParamUtil.php');
	require('utils/GoogleUtil.php');
	require('utils/SessionUtil.php');
	require('utils/CookieUtil.php');
	require('utils/HttpUtil.php');

	// import model
	require('models/AdminDocModel.php');
	require('models/AdminStoreModel.php');
	require('models/DocumentModel.php');
	require('models/StoreModel.php');


	$requestFilter = new RequestFilter($_REQUEST);
	$controller = $requestFilter -> createController();
	if($controller)
	{
		$controller -> executeAction();
	}	
?>
