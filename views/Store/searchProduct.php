        <!-- Hero Section Begin -->
        <section class="hero">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-3" style="pointer-events: none;"></div>
                <div class="col-lg-9">
                    <div class="banner__slider owl-carousel">
                        <div class="hero__item set-bg" data-setbg="https://public.bnbstatic.com/static/images/common/ogImage.jpg">
                        </div>
                        <div class="hero__item set-bg" data-setbg="https://finbold.com/app/uploads/2023/03/Crypto-community-with-88-historical-accuracy-sets-Ethereum-price-for-March-31-2023.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner2__slider owl-carousel">
                                <img class="hero2__item" src="https://finbold.com/app/uploads/2023/03/Crypto-community-with-88-historical-accuracy-sets-Ethereum-price-for-March-31-2023.jpg" alt="">
                                <img class="hero2__item" src="https://public.bnbstatic.com/static/images/common/ogImage.jpg"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner3__slider owl-carousel">
                                <img class="hero3__item" src="https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/q7gjr3giktjvxpoc_1638601732.jpeg" alt="">
                                <img class="hero3__item" src="https://images2.thanhnien.vn/Uploaded/mynny/2021_12_02/nft-supply-chain-1-3-6251.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Categories Section Begin -->
    <div class="container hero mb--50">
        
            <?php
        $total = count($viewModel['category']);
        $line = $total / 10;
        $j = 0;
        for ($l = 1; $l < $line + 1; $l++) {
            ?>
            <div class="box-category">
                <?php
                while ($j < $l * 10  && $j<$total) {
                    ?>
                    <a href="?id=<?php echo $viewModel['category'][$j]['id'] ?>" class="category__menu">
                        <img src="http://localhost:3000/img/<?php echo $viewModel['category'][$j]['image'] ?>" alt="">
                        <h4><?php echo $viewModel['category'][$j]['name'] ?></h4>
                    </a>
                    <?php
                    $j++;
                }
                ?>
            </div>
            <?php
}
?>



        
    </div>
    <!-- Categories Section End -->
   
    <!-- Featured Section Begin -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__controls">
                        <div class="top__categories__title">
                            <h2>DANH SÁCH SẢN PHẨM</h2>
                        </div>
                        <ul>
                            <li class="active" data-mixitup-control data-filter="*">All</li>
                            <li data-mixitup-control data-filter=".smartPhone">Price descending</li>
                            <li data-mixitup-control data-filter=".Apple-watch">Price ascending</li>
                        </ul>
                    </div>
                    <!--  -->
                            <?php
                                $total = count($viewModel['productsFind']);
                                $line = $total / 4;
                                $i = 0;
                                for ($l = 1; $l < $line + 1; $l++) {
                            ?>
                                <div class="row featured__filter best-selling">
                                <?php
                                    while ($i < $l * 4  && $i < $total) {
                                ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mix smartPhone fresh-meat">
                                        <div class="featured__item">
                                            <a href="<?php echo ROOT_URL.'store/Details?id='.$viewModel['productsFind'][$i]['id_product']?>">
                                                <div class="featured__item__pic set-bg">
                                                    <img src="http://localhost:3000/img/<?php echo $viewModel['productsFind'][$i]['image'] ?>" alt="">
                                                    
                                                </div>
                                                <style>
                                                    .featured__item__pic {
                                                        background-size: cover;
                                                        background-position: center center;
                                                        width: 100%;
                                                        height: 0;
                                                        padding-bottom: 110%; /* tạo tỉ lệ khung hình vuông */
                                                    }
                                                </style>
                                                <div class="featured__item__text">
                                                    <h6><?php echo $viewModel['productsFind'][$i]['name'] ?></h6>
                                                    <div class="featured__item__price">
                                                        <h4>Price: <?php echo $viewModel['productsFind'][$i]['price'] ?></h4>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                        ++$i;
                                    }
                                ?>
                                </div>
                            <?php
                                }
                            ?>

                    
                        
                    
                    <!--  -->
                </div>
            </div>

        </div>
    </section>
    <!-- Featured Section End -->




    <!-- =============================best saleling======================================== -->
    <!-- =============================best saleling======================================== -->
    <!-- partner -->
    <section class="partner">
        <div class="container">
            <div class="row">
                <div class="partner__slider owl-carousel">
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/1-150x150.png" alt="" styte="weight:70px; height:70px">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/2-150x150.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/3-150x150.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/4-150x150.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/5-150x150.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="partner__item">
                            <div class="partner__item__pic">
                                <img src="../assets/assets_Store/img/partner/6-150x150.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- partner end-->

    