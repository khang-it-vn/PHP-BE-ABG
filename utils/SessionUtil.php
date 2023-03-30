<?php
    class SessionUtil{
        public static function createSessionWithTokenRole($token, $role)
        {
            $data = array(
                array("token" => $token),
                array("role" => $role)
            );

            $_SESSION['s_token'] = $data;
        }

        
    }
