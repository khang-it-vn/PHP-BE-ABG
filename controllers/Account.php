<?php

	class Account extends Controller{

		// url là /account/index sẽ vào function này
		public function Index()
		{
			return $this -> ReturnView(null,true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}
	}
?>