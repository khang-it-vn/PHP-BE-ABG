<?php

use Google\Service\Fitness\Session;

class User extends Controller
{


	// url là user/index 
	public function Index()
	{
		return $this->returnView(null, true);
	}


	// url là /User/wallet sẽ vào function này
	public function Wallet()
	{
		return $this->ReturnView(null, true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
	}

	// url là /User/Market sẽ vào function này
	public function Market()
	{
		return $this->ReturnView(null, true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
	}
	// url là /User/login
	public function Login()
	{
		return $this->ReturnView(null, true);
	}

	/* ==> Version mowis kho con ho tro
		

		// url là /user/google
		public function Google()
        {                   
            $client = GoogleUtil::setupEnviromentLoginGoogle();
            // redirect to uri check login google
            header('Location: '. $client ->createAuthUrl());

        }
		*/

	// url là user/checkaountfromgoogle
	public function checkAccountFromGoogle()
	{
		$body = array('credential' => $_POST['credential']);

		$options = array(
			'http' => array(
				'method' => 'POST',
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'content' => http_build_query($body)
			)
		);

		$context  = stream_context_create($options);
		$response = file_get_contents(E_LOGIN, false, $context);
		$response = json_decode($response, true);

		// print_r($response);
		// detech token and role from response
		SessionUtil::createSessionWithTokenRole($response[1]['token'], $response[2]['roles']['from']);
		
		// checkmpass
		$status = $this->getInfo();

		// mpass is null redirect view set product
		if($status === false)
		{
			header("Location: ".ROOT_URL."user/updatempass");
			return;
		}

		// check role and redirect to access page
		SessionUtil::getRoleRedirect();
	}


	public function getInfo()
	{

		$url = E_GET_INFO;
		$token = SessionUtil::getToken();


		$options = array(
			'http' => array(
				'method'  => 'GET',
				'header'  => 'Authorization: Bearer ' . $token . "\r\n" .
					'Content-Type: application/json'
			)
		);

		$context = stream_context_create($options);
		$response = file_get_contents($url, false, $context);
		$response =	json_decode($response);

		SessionUtil::setInfoToken($response[0]);
		if(strlen($response[0] -> mpass) === 0)
		{
			return false;
		}
	}


	public function updatempass()
	{
		$this ->updateMPassPost();
		return $this ->returnView(null, true);
	}

	public function updateMPassPost()
	{
		if(isset($_POST['mpass']))
		{

		}
	}

	

}
