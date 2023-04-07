<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Shop online - UTO Startup">
    <meta name="keywords" content="Shop online - UTO Startup">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTOSTARTUP </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://uto.vn/storage/images/logo/fav.png">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../assets/assets_Store/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/assets_Store/css/style.css" type="text/css">

    <meta property="og:type" content="Shop online - UTO Startup" />
    <meta property="og:title" content="Shop online - UTO Startup" />
    <meta property="og:description" content="Shop online chuyên cung cấp các mặt hàng tiêu dùng, sản phẩm giá rẻ..." />
    <meta property="og:image" content="https://utostartup.com/wp-content/uploads/2022/10/logo.png" />
    <meta property="og:url" content="utostartup.com" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../assets/assets_Store/img/utostartup/logo.png" width="170px" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng: <span>000.000VNĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <div>Tiếng Việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Tiếng Việt</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="./login.html"><i class="fa fa-user"></i> Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Trang Chủ</a></li>
                <li><a href="./contact.html">Đào Tạo</a></li>
                <li><a href="./contact.html">Dịch Vụ - Việc Làm</a></li>
                <li><a href="./blog.html">Tin Tức</a></li>
                <li><a href="./contact.html">Sinh Viên</a></li>
                <li><a href="./contact.html">Doanh Nghiệp</a></li>
                <li><a href="./uto-review.html">UTO Review</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>Uniontek@gmail.com</li>
                <li>Hotline: 1900.88.66.33</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header header-custom">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> soloteam@gmail.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 1234565788</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">

                            <div class="header__top__right__language">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- menu pc -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo ROOT_URL."store/index"?>"><label for="">SOLO WALLET</label></a>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="hero__search__form">
                        <form action="searchProduct" method="post">
                            <input type="text" name="keyword" placeholder="Nhập sản phẩm cần tìm ....">
                            <button name='submit' type="submit" class="site-btn">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header__cart">
                        <ul>
                            <div class="header__top__right__auth">
                                <a href=""><i class="fa fa-user"></i><?php echo SessionUtil::getInfoToken()->fullname . "  "?></a>
                            </div>
                            
                            <li><a href="#"><i class="fa fa-shopping-cart" data-toggle="modal"
                                        data-target="#cartModal"></i> <span><?php echo SessionUtil::getTotalQuantity()?></span></a></li>

                        </ul>
                        <div class="header__cart__price">Tổng: <span><?php echo SessionUtil::getTotal()?>USDT</span></div>

                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <section class="bg-header">
            <div class="container">
                <div class="row bg-header">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Danh Mục Sản Phẩm</span>
                            </div>
                            <ul style="background-color: #f5f5f5">
                                <?php foreach($viewModel['category'] as $element):?>
                                <li class="active-hover">
                                    <img src="http://localhost:3000/img/<?php echo $element['image']?>" alt="">
                                    <a href="?id=<?php echo $element['id']?>"><?php echo $element['name']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Trang Chủ</a></li>
                                <li><a href="./contact.html">Đào Tạo</a></li>
                                <li><a href="./contact.html">Dịch Vụ - Việc Làm</a></li>
                                <li><a href="./blog.html">Tin Tức</a></li>
                                <li><a href="./contact.html">Sinh Viên</a></li>
                                <li><a href="./contact.html">Doanh Nghiệp</a></li>
                                <li><a href="./uto-review.html">UTO Review</a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Header Section End -->



    <?php require($view)?>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo" style=" font-size: 36px;font-weight: bold;">
                            <a style="color : #9feaff;" href="<?php echo ROOT_URL."store/index"?>"><label for="">SOLO WALLET</label></a>
                        </div>
                        <ul>
                            <li><b>Đ/C:</b> 240 Nguyễn Oanh, Phường 17, Gò Vấp, HCM</li>
                            <li><b>Phone:</b> 1900 88 66 33</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="footer__widget d-flex justify-content-around">
                        <div>
                            <h6>Về chúng tôi</h6>
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Về cừa hàng</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6>Dịch vụ</h6>
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Về cừa hàng</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6>Liên kết</h6>
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Về cừa hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p style="color:white">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                SOLO WALLET &copy;
                                <script>
                                document.write(new Date().getFullYear());
                                </script> An toàn, nhanh chóng, tiện lợi
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- show cart modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Giỏ hàng của bạn
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="shoping__cart__table border p-5">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">
                                        <img src=".../assets/assets_Store/img/nameshop.png" alt="">
                                        <p><?php echo SessionUtil::getInfoToken() ->fullname ?></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cart'] as $item):?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="http://localhost:3000/img/<?php echo $item['image']; ?>"
                                            alt="">
                                        <h5><?php echo $item['name']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <p style="text-decoration:line-through"></p>
                                        <?php echo number_format($item['price']);?>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn">-</span>
                                                <input type="text" value="<?php echo $item['quantity']; ?>">
                                                <span class="inc qtybtn">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <h5>Total: <span class="price text-success"><?php echo SessionUtil::getTotal()?> USDT</span></h5>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Checkout</button>
                </div>
            </div>
        </div>
    </div>


    <!--  -->

    <!-- show cart modal end -->

    <!-- Js Plugins -->
    <script src="../assets/assets_Store/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/assets_Store/js/bootstrap.min.js"></script>
    <script src="../assets/assets_Store/js/jquery.nice-select.min.js"></script>
    <script src="../assets/assets_Store/js/jquery-ui.min.js"></script>
    <script src="../assets/assets_Store/js/jquery.slicknav.js"></script>
    <script src="../assets/assets_Store/js/mixitup.min.js"></script>
    <script src="../assets/assets_Store/js/owl.carousel.min.js"></script>
    <script src="../assets/assets_Store/js/main.js"></script>



</body>

</html>