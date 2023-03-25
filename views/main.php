<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main Layout</title>
	<!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>bitcypo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>


<body class="main-layout">
<header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.html">SoloWallet</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="social_icon text_align_right d_none" style="font-size: medium;">
                            <li> <a href="Javascript:void(0)"><i>Home</i></a></li>
                            <li> <a href="Javascript:void(0)"><i>Wallet</i></a></li>
                            <li> <a href="Javascript:void(0)"><i>Markets</i></a></li>
                            <li> <a href="Javascript:void(0)"><i>Documents</i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user"
                                        aria-hidden="true"></i></a></li>
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search"
                                        style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                            <li class="nav-mobile">
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
		<?php require($view)?>

</body>
</html>