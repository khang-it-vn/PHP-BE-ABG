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
        public function FunctionName()
        {
            return $_SESSION['s_token']['token'];
        }
    }
