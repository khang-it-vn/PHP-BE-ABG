<?php

	class Store extends Controller{

		// url là /account/index sẽ vào function này
		public function Index()
		{
			$model = new StoreModel();
			$array = array("category" => $model ->getCategory(), "product"=>$model->getProduct());
			return $this -> returnViewWithLayout($array,'store.php'); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}

		public function Details()
		{
			$model =  new StoreModel();
			$array = array("category" => $model ->getCategory(), "product"=>$model->getDetailProduct());
			return $this -> returnViewWithLayout($array,'store.php'); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}
		
		public function Order()
		{
			$model =  new StoreModel();
			$array = $model->getDetailProduct();

			$this->Details();
		}
	}
?>