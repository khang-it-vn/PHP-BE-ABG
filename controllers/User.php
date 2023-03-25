<?php

	class User extends Controller{

		// url là /User/index sẽ vào function này
		public function Index()
		{
			return $this -> ReturnView(null,true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}

		// url là /User/Market sẽ vào function này
		public function Market()
		{
			return $this -> ReturnView(null,true); // Tham số đầu tiên là giá trị truyền lên view, tham số thứ hai là có sử dụng layout, nếu true là sử dụng layout main, ngược lại là không
		}
	}
?>