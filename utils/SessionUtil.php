<?php
    class SessionUtil{
        public static function createSessionWithTokenRole($token, $role)
        {
            $data = array(
                "token" => $token,
                "role" => $role
            );

            $_SESSION['s_token'] = $data;
        }

        public static function getInfo()
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
        // Hàm keierm tra quyền của user
        public static function getRoleRedirect()
        {
            if($_SESSION['s_token']['role'] == ADMIN_DOC)
            {
			    header("Location: ". ROOT_URL .'AdminDoc/index');
            }
            else if($_SESSION['s_token']['role'] == ADMIN_STORE)
            {
                header("Location: ". ROOT_URL .'AdminStore/index');
            }
            else
            {
                // checkmpass
	        	$status = SessionUtil::getInfo();
                if($status === false)
                {
                    header("Location: ".ROOT_URL."user/updatempass");
                    return;
                }
                header("Location: ". ROOT_URL .'User/index');
            }
        }

        public static function checkRoleAccessDoc($role)
        {
            if(SessionUtil::getRole() !== $role)
            {
                header('Location: '. ROOT_URL .'user/index');
            }

        }

        public static function checkRoleAccessStore($role)
        {
            if(SessionUtil::getRole() !== $role)
            {
                header('Location: '. ROOT_URL .'user/index');
            }

        }

        public static function getRole()
        {
           return $_SESSION['s_token']['role'];
        }

        // param is role is param your want compare with role current in session
        public static function checkRole($roleVerify)
        {
            return $_SESSION['s_token']['role'] == $roleVerify;
        }

        // get token current 
        public static function getToken()
        {
            return $_SESSION['s_token']['token'];
        }


        public static function setInfoToken($info)
        {
            $_SESSION['info'] = $info;
        }
// Lấy info account
        public static function getInfoToken()
        {
            return $_SESSION['info'];
        }

        public static function AddOrder($product, $quantity) {
            // kiểm tra xem session giỏ hàng đã tồn tại hay chưa
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
            
            // Lặp qua từng sản phẩm trong giỏ hàng và tăng số lượng nếu sản phẩm đã có
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id_product'] === $product['id_product']) {
                    $item['quantity'] += $quantity;
                    return;
                }
            }
            
            // Nếu sản phẩm không có trong giỏ hàng, thì thêm mới sản phẩm vào giỏ hàng
            $_SESSION['cart'][] = array(
                'id_product' => $product['id_product'],
                "image" => $product['image'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity,
            );
        }
        
        public static function getTotal() {
            $total = 0;
            if(isset($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            }
            return $total;
        }

        public static function getTotalQuantity() {
            $totalQuantity = 0;
            if(isset($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $item) {
                    $totalQuantity += $item['quantity'];
                }
            }
            return $totalQuantity;
        }

        public  static function GetOrders()
        {
           return $_SESSION['cart'];
        }
    }
