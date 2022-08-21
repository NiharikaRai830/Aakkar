<?php include_once('head.php');
include_once('header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->
<style>
    .loginBox {
        position: relative;
        top: 50;
        left: 50%;
        transform: translate(-50%, 0%);
        width: 467px;
        height: 520px;
        padding: 70px 40px;
        box-sizing: border-box;
        background: rgba(0, 0, 0, 0.5);
    }

    .user {
        width: 115px;
        height: 111px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: calc(-123px/2);
        left: calc(50% - 50px);
    }


    .loginBox h2 {
        margin: 0;
        padding: 0 0 26px;
        color: #ff8c00;
        text-align: center;
    }

    .loginBox p {
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: #fff;
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px;
    }

    .loginBox input[type="text"],
    .loginBox input[type="email"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    .loginBox textarea {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    ::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .loginBox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        color: #eee;
        font-size: 16px;
        background-color: #FF8C00;
        cursor: pointer;
        border-radius: 20px;
        margin: 12px 0 18px;
    }

    .loginBox input[type="submit"]:hover {
        background-color: #ff9719;
        color: #fff;
    }

    .loginBox a {
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
    }
</style>

<!-- STAR HEADER SEARCH -->
<section id="hero-area" class="parallax-search overlay home-1" data-stellar-background-ratio="0.5" style="background-image:url('./images/banner.jpg')">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Interior Design
                                <br class="d-md-none">
                                <span class="typed border-bottom"></span>
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER SEARCH -->
<section class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-md-6 who">
                <img src="images/1.jpg" alt="">
            </div>
            <div class="col-md-6 who-1">
                <div>
                    <h2 class="text-left mt-4">About <span>Aakkar</span></h2>
                </div>
                <div class="pftext">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                </div>
                <div class="box bg-2 mt-4">
                    <img src="images/signature.jpeg" class="ml-5" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START SECTION SERVICES -->
<main class="services services-home" id="services">
    <div class="container">
        <div class="section-title">
            <h3>Our</h3>
            <h2>Services</h2>
        </div>
        <div class="row service-1">
            <article class="col-md-4 serv">
                <div class="art-1">
                    <img src="images/service/11.png" alt="">
                    <h3>Residential Interior</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a href="#BookNow" style="color:#000;">Book Now</a></button>
                </div>
            </article>
            <article class="col-md-4 serv" data-aos="zoom-in">
                <div class="art-1">
                    <img src="images/service/66.png" alt="">
                    <h3>Commercial Interior</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a style="color:#000;" href="#BookNow">Book Now</a></button>
                </div>
            </article>
            <article class="col-md-4 serv" data-aos="zoom-in">
                <div class="art-1">
                    <img src="images/service/44.png" alt="">
                    <h3>Office Interior</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a href="#BookNow" style="color:#000;">Book Now</a></button>
                </div>
            </article>
        </div>
        <div class="row service-2">
            <article class="col-md-4 serv" data-aos="zoom-in">
                <div class="art-1">
                    <img src="images/service/55.png" alt="">
                    <h3>Hospitality Design</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a href="#BookNow" style="color:#000;">Book Now</a></button>
                </div>
            </article>
            <article class="col-md-4 serv" data-aos="zoom-in">
                <div class="art-1">
                    <img src="images/service/11.png" alt="">
                    <h3>Modern Furniture</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a href="#BookNow" style="color:#000;">Book Now</a></button>
                </div>
            </article>
            <article class="col-md-4 serv" data-aos="zoom-in">
                <div class="art-1">
                    <img src="images/service/33.png" alt="">
                    <h3>Modular Kitchen</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="btn btn" style="background-color:#fff;"><a href="#BookNow" style="color:#000;">Book Now</a></button>
                </div>
            </article>
        </div>
    </div>
</main>
<!-- END SECTION SERVICES -->
<section class="info-help h17" id="BookNow">
    <div class="container" style="width: 100%;">
        <div class="row info-head">
            <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-left">
                <div class="loginBox">
                    <img class="user" src="images/bookingsss.png" style="padding:-20px;background: #fff;">
                    <h2>BOOK HERE</h2>
                    <form>
                        <p>Name</p>
                        <input type="text" name="email" placeholder="Enter your Name">
                        <p>Email</p>
                        <input type="text" name="password" placeholder="Enter Your Email">
                        <p>Mobile No</p>
                        <input type="text" name="password" id="" placeholder="Enter Your Mobile No">
                        <p>Comments</p>
                        <textarea cols="50" rows="5" id="" name=""></textarea>
                        <input type="submit" name="sign-in" value="Sign In">
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-xs-8" data-aos="fade-right">
                <div class="design">
                    <div class="help">
                        <span>We Help you</span>
                        <h2 class="text-white">design the best</h2> PLACES AND</br> OFFER NEAR YOU.<h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- START SECTION RECENTLY WORKS -->
<section class="recently portfolio bg-white-3">
    <div class="container-fluid recently-slider">
        <div class="section-title">
            <h3>Recently</h3>
            <h2>Works</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="#" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image:url(images/bed/02.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: DB 102</div>
                        </div>
                    </a>
                </div>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/otherproduct/03.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Customize Wardrobe</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/04.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 603</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/multiple/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: MU 705</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/10.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: SF Paris Cream</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/06.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 413</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/11.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DT 321</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image:url(images/wardrob/08.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 508</div>
                    </div>
                </a>
                <a href="#" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image:url(images/bed/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:DB 105</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION RECENTLY WORKS -->

<!-- START SECTION INFO-HELP -->
<section class="info-help h18" style="background-image:url(./images/why.jpeg);">
    <div class="container">
        <div class="row info-head">
            <div class="col-lg-12 col-md-8 col-xs-8">
                <div class="info-text" data-aos="fade-up">
                    <h3 class="text-center mb-0">Why Choose Us</h3>
                    <p class="text-center text-white">We offer perfect interior services</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO-HELP -->

<!-- START SECTION INFO -->
<section _ngcontent-bgi-c3="" class="featured-boxes-area">
    <div _ngcontent-bgi-c3="" class="container">
        <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
            <div _ngcontent-bgi-c3="" class="row m-0">
                <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="images/icons/i-5.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Interior for Home</h3>
                        <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="#">Read More</a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="images/icons/i-6.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Trusted by thousands</h3>
                        <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="#">Read More</a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="images/icons/i-7.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Financing made easy</h3>
                        <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="#">Read More</a>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon"><img src="images/icons/i-8.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">24/7 support</h3>
                        <p _ngcontent-bgi-c3="">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recently portfolio">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="bed.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>BED</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="bed.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/bed/10.jpg);border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: DB 110 </div>
                        </div>
                    </a>
                </div>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/02.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 102 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/03.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 103 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/04.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Luxury Condo</div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/05.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 104 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/06.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 105 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/07.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 106 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/08.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 107 </div>
                    </div>
                </a>
                <a href="bed.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/bed/09.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DB 108</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio bg-white-3">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="wardrobe.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Wardrobe</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/wardrob/01.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: WR 501 </div>
                        </div>
                    </a>
                </div>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/02.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 502</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/03.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 503 </div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/04.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 504</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 505</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/06.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 506</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/07.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 507</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/08.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 508</div>
                    </div>
                </a>
                <a href="wardrobe.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/wardrob/09.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: WR 509</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio">
    <div class="container-fluid">
        <button class="btn " style="background-color: #c18847;float:right;margin-top:-20px;"><a href="dressing.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Dressing</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="dressing.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/dressing/01.jpg);border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: DR 401 </div>
                        </div>
                    </a>
                </div>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/02.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 402</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/03.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 403</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/04.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 410</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/05.jpg);"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 411</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/06.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 413</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/07.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 414</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/08.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 415 </div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/09.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 416</div>
                    </div>
                </a>
                <a href="dressing.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/dressing/10.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: DR 431</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio bg-white-3">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="dining.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Dining</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="dining.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/Dining/01.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product code: DT 301</div>
                        </div>
                    </a>
                </div>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/02.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 302</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/03.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 303</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/04.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 304</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 306</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/06.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 307</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/07.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 308</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/08.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 309</div>
                    </div>
                </a>
                <a href="dining.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Dining/09.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product code: DT 315</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="office-table.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Office Table</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="office-table.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/office/01.jpg);border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: OT Drawer Unit</div>
                        </div>
                    </a>
                </div>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/02.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 601</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/03.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 602</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/04.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 603</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/05.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 604</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/06.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 605</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/07.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 606</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/08.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 607</div>
                    </div>
                </a>
                <a href="office-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/office/09.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: OT 608</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio bg-white-3">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="sofa.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Sofa</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="sofa.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/Sofa/01.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code:SF Parrot Queen</div>
                        </div>
                    </a>
                </div>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/02.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Barcelona Blue</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/03.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Berline</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/04.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF California</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Greece</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/06.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Lisbon Blue</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/07.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Madrid Blue</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/08.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Nevada</div>
                    </div>
                </a>
                <a href="sofa.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/Sofa/09.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code:SF Paris Cream</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="center-table.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Center Table</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="center-table.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/center/01.jpg);border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: CT 901 & 902</div>
                        </div>
                    </a>
                </div>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/02.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 903 & 904</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/03.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 905 & 906</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/04.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 907 & 908</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/05.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 909 & 910</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/06.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 911 & 912</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/07.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 913 & 921</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/08.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 922 & 923</div>
                    </div>
                </a>
                <a href="center-table.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/center/09.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: CT 924 & 925</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio bg-white-3">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="multiple-unit.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Multiple Unit</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="multiple-unit.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/multiple/01.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Product Code: MU 701</div>
                        </div>
                    </a>
                </div>
                <a href="multiple-unit.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/multiple/02.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: MU 702</div>
                    </div>
                </a>
                <a href="multiple-unit.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/multiple/03.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: MU 703</div>
                    </div>
                </a>
                <a href="multiple-unit.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/multiple/04.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: MU 704</div>
                    </div>
                </a>
                <a href="multiple-unit.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/multiple/05.jpg);border-width: 3px 3px 0px 3px;
    border-color: #efbc82;
    border-style: solid;
    border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Product Code: MU 705</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recently portfolio">
    <div class="container-fluid">
        <button class="btn btn" style="float:right;background-color:#c18847;margin-top:-20px;"><a href="other-products.php" style="color:#fff;">View All</a></button>
        <div class="section-title">
            <h3>Other Products</h3>
            <h2>Collection</h2>
        </div>
        <div class="portfolio">
            <div class="owl-carousel home5-right-slider">
                <div class="inner-box">
                    <a href="other-products.php" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url(images/otherproduct/01.jpg);border-radius: 10px;"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Modular Kitchen</div>
                        </div>
                    </a>
                </div>
                <a href="other-products.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/otherproduct/02.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">School Furniture</div>
                    </div>
                </a>
                <a href="other-products.php" class="recent-16" data-aos="fade-up">
                    <div class="recent-img16 img-center" style="background-image: url(images/otherproduct/03.jpg);border-radius: 10px;"></div>
                    <div class="recent-content"></div>
                    <div class="recent-details">
                        <div class="recent-title">Customize Wardrobe</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="portfolio bg-white-5">
    <div class="container">
        <div class="section-title">
            <h3>Our</h3>
            <h2>Portfolio</h2>
        </div>
        <div class="filters-group">
            <ul>
                <li class="active" data-filter="*">Show All</li>
                <li data-filter=".wallpaper">Wallpaper</li>
                <li data-filter=".celling">False Ceiling</li>
                <li data-filter=".book">Book Self</li>
                <li data-filter=".tv">Tv Unit</li>
                <li data-filter=".kitchen">Modular Kitchen</li>
            </ul>
        </div>
        <div class="row portfolio-items">
            <div class="item col-lg-4 col-md-6 wallpaper" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery18.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery18.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item col-lg-4 col-md-6 wallpaper" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery19.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery19.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item col-lg-4 col-md-6 people wallpaper" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery20.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery20.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 people wallpaper" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery21.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery21.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery14.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery14.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery15.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery15.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery16.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery16.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery17.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery17.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery2.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery2.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery3.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery3.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery5.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery5.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 celling" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery7.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery7.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 book" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery25.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery25.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 book" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery24.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery24.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 tv" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 tv" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery10.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery10.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 tv" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery11.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery11.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 tv" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery12.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery12.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 tv" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery13.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery13.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery27.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery27.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery28.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery28.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery29.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery29.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery30.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery30.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery31.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery31.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery32.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery32.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery33.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery33.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery34.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery34.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery35.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery35.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery36.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery36.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery37.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery37.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-md-6 col-xs-12 kitchen" data-aos="zoom-in">
                <div class="single-portfolio">
                    <div class="portfolio-img">
                        <img src="images/gallery38.png" alt="" />
                        <div class="portfolio-view">
                            <div class="item-wrap">
                                <a class="img-poppu" href="images/gallery38.png" data-rel="lightcase:myCollection:slideshow">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-lg-4 col-sm-6 col-xs-12 landscapes last-item two">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROJECTS -->




<!-- START SECTION BLOG -->

<!-- <section class="blog-section" style="background-image:url(./images/latestnews.jpg); background-size:100% 100%;">
    <div class="container">
        <div class="section-title">
            <h3>Latest</h3>
            <h2>News</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                    <div class="news-item news-item-sm">
                        <a href=#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="images/blog/b-1.jpg">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#">
                                <h3>Interior Design News</h3>
                            </a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Aakkar</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item news-item-sm mb">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="images/blog/b-2.jpg">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#">
                                <h3>Interior Design News</h3>
                            </a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Aakkar</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-left">
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="images/blog/b-3.jpg">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#">
                                <h3>Interior Design Ne
                                    ws</h3>
                            </a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Aakkar</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="images/blog/b-4.jpg">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#">
                                <h3>Interior Design News</h3>
                            </a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Aakkar</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END SECTION BLOG -->
<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <p class="counter">200</p>
                    <h3>won awards</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <p class="counter">300</p>
                    <h3>Happy clients</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p class="counter">400</p>
                    <h3>Hours Worked</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="countr lt">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <p class="counter">250</p>
                    <h3>Our Projects</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->
<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white-3 border-0">
    <div class="container">
        <div class="owl-carousel style2" data-aos="zoom-in">
            <div class="owl-item"><img src="images/partners/action.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/advancelam.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/asian.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/centuryply-logo.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/greenply-logo.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/nerolac.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/saint-gobain.png" alt=""></div>
            <div class="owl-item"><img src="images/partners/soft-touch-logo.png" alt=""></div>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->

<?php include_once('footer.php'); ?>