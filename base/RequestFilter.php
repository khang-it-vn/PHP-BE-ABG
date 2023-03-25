<?php
	class RequestFilter {
		private $controller;
		private $action;
		private $request;


		public function __construct($request){

			$this->request = $request;

			$paramUtil = new ParamUtil();
			$controller_action = $paramUtil ->GetControllerAction();
			if ($_SERVER['REQUEST_URI'] === '/PHP-BE-ABG/' || strlen($controller_action) == 1) 
            {
                header('Location: '.ROOT_URL.'user/index');
                exit;
            }

			if($this -> request['controller'] == "")
			{
				$this->request['controller'] = 'user';
			}

			$this -> controller = strtolower($this -> request ['controller']);

			if($this -> request['action'] == "")
			{
				$this->request['action'] = 'index';
			}

			$this -> action = strtolower($this -> request['action']);

		}

		public function createController()
		{
			// check exists
			if(class_exists($this->controller))
			{
				$parent = class_parents($this->controller);
				
				// check extend

				if(in_array("Controller", $parent))
				{
					// check method exists
					if(method_exists($this ->controller, $this -> action))
					{
						return new $this ->controller($this -> action, $this -> request);
					}
					else
					{
						// method dose not exists

						echo "<h1> Method does not exists</h1>";
						return;
					}
				}
				else
				{
					// Base controller does not exists
					echo "<h1> Base controller not found</h1>";
							return; 
				}

			}
			else
			{
				// Controller Class does not exists
				echo "<h1> Controller class does not exists</h1>";
							return; 
			}
			
		}
	}

?>