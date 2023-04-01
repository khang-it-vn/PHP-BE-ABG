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
                header("Location: ". ROOT_URL .'User/index');
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

        public static function getInfoToken()
        {
            return $_SESSION['info'];
        }
        public function AddOrder($product, $total)
        {
          if(isset($_SESSION['oders']))
          {
            $_SESSION['oders'] = array(array ($product,$total));
          }
          else{
            for($i = 0; $i<count($_SESSION['oders']); $i++)
            {
                    if($_SESSION['oders'][$i][0]['id_product'] === $product['id_product'])
                    {
                        $_SESSION['oders'][$i][1] += $total;
                       return;
                    }
                
            }
            $array = array($product, $total);
            array_push($_SESSION['oders'],$array);
          }
        }
    }
