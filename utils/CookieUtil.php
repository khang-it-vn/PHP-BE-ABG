<?php
    class CookieUtil {
        public static function setCookie($name_cookie, $value)
        {
            setcookie($name_cookie, $value, time() + 3600);
        }
    }
?>