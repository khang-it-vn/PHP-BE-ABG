<?php
class UserModel extends DbContext{
    public function getMarket ()
    {
        $httpUtil = new HttpUtil();
        $array = $httpUtil :: get(E_GET_MARKET);
        return $array;
    }
}
?>