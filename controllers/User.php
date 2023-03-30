<?php

	class User extends Controller{

		// url là /User/index sẽ vào function này
		public function Wallet()
		{
			return $this -> ReturnView(null,true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}

		// url là /User/Market sẽ vào function này
		public function Market()
		{
			return $this -> ReturnView(null,true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}
		// url là /User/login
		public function Login()
		{
			return $this -> ReturnView(null,true);
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
			print_r($response);

			// detech token and role from response
			SessionUtil::createSessionWithTokenRole($response[1],$response[2][0]);
			
		}



		
	}
?>