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
			$array = $model->getProductById();

			if(isset($_POST['number']))
			{
				SessionUtil::AddOrder($array,$_POST['number'] );
			}

			print_r(SessionUtil::GetOrders());
			header("Location: ".ROOT_URL."store/details?id=".$_POST["id"]);
		}

		public function DeleteOrder()
		{
			$model =  new StoreModel();
			$array = $model->getProductByIdGet();
			if($array)
			{
				SessionUtil::DeleteOrder($array );
			}
			header("Location: ".ROOT_URL."store/index");
		}

		public function searchProduct()
		{
			$storeModel = new StoreModel();
			$data = $storeModel -> getProductByKeyWord();
			$category = $storeModel ->getCategory();

			$dataArray = array("productsFind" => $data, "category" => $category);
			return $this ->returnViewWithLayout($dataArray,'store.php'); 
		}
	}
?>