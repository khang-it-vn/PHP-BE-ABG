<?php

    define("E_BASE", "http://localhost:3000/");
    // method post
    // body: { credential : string}
    define("E_LOGIN", E_BASE."login");

    // using for upload image to server
    // method post
    // body: file{image}
    // res: filename
    define("E_UPLOAD_IMAGE", E_BASE."util/upload")

?>