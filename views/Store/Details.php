    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color:  var(--black);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $viewModel['product']['name']?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin --> 
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                             src="http://localhost:3000/img/<?php echo $viewModel['product']['image'] ?>" 
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $viewModel['product']['name']?></h3>
                        <div class="product__details__price"> <?php echo $viewModel['product']['price']?>USDT</div>
                        <form action="" method="post">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input name="id_product" type="number" value="<?php echo $viewModel['product']['id_product']?>" hidden>
                                    <input name="total" type="number" value="1">
                                </div>
                            </div>
                        </div>
                       <input type="submit" class="primary-btn" value="Add to card">
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
                    </div>
                    <div class="tab-content custom-tab">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h5>Products Infomation</h5>
                                <?php echo $viewModel['product']['description']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mix smartPhone fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="https://ict-imgs.vgcloud.vn/2022/03/29/11/phat-trien-them-10-trieu-thue-bao-su-dung-smartphone-nam-2022.JPG">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <div class="featured__sale">
                                <p>Sale<br> 50%</p>
                            </div>
                        </div>
                        <div class="featured__item__text">
                            <a href="./shop-details.html" target="_blank">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h6>Crab Pool Security</h6>
                                <div class="featured__item__price">
                                    <h6> 30.000VNĐ</h6>
                                    <h4> 30.000VNĐ</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix smartPhone">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="https://znews-photo.zingcdn.me/w660/Uploaded/yqdlcqrwq/2021_11_12/10512112021.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <div class="featured__sale">
                                <p>Sale<br> 50%</p>
                            </div>
                        </div>
                        <div class="featured__item__text">
                            <a href="#">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h6>Crab Pool Security</h6>
                                <div class="featured__item__price">
                                    <h6> 30.000VNĐ</h6>
                                    <h4> 30.000VNĐ</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix smartPhone">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="https://image.thanhnien.vn/w1024/Uploaded/2022/aybunux/2022_06_30/3641-3999.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <div class="featured__sale">
                                <p>Sale<br> 50%</p>
                            </div>
                        </div>
                        <div class="featured__item__text">
                            <a href="#">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h6>Crab Pool Security</h6>
                                <div class="featured__item__price">
                                    <h6> 30.000VNĐ</h6>
                                    <h4> 30.000VNĐ</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Apple-watch">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="https://fptshop.com.vn/Uploads/Originals/2022/4/9/637851413880273856_apple-watch-nike-series-7-gps-den-dd.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <div class="featured__sale">
                                <p>Sale<br> 50%</p>
                            </div>
                        </div>
                        <div class="featured__item__text">
                            <a href="#">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h6>Crab Pool Security</h6>
                                <div class="featured__item__price">
                                    <h6> 30.000VNĐ</h6>
                                    <h4> 30.000VNĐ</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->