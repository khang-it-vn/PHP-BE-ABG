<?php
	abstract class Controller{
		protected $request;
		protected $action;

		public function __construct($action, $request)
		{
			$this -> action = $action;
			$this -> request = $request;
		}

		public function executeAction()
		{
			return $this -> {$this -> action}();
		}



		// View model là data truyền lên view
		// Layout mặc định là main
		protected function returnView($viewModel, $fullView){
			$view = 'views/'.get_class($this).'/'.$this->action .'.php';

			if($fullView)
			{
				require('views/main.php');
			}
			else
			{
				require($view);
			}
		}

		// View model là data truyền lên view
		// Layout là tên file trong thư mục layout
		protected function returnViewWithLayout($viewModel,$layout)
		{
			$view = 'views/'.get_class($this).'/'.$this->action .'.php';
			require('views/'.$layout);
		}

		
	}

?>