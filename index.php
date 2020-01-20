<?php
if(isset($_POST['email']) && preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email'] )){
    $email = $_POST['email'];
    $headers = "Content-Type: text/html";
    mail('dev.ivanwork@gmail.com', 'user email to feedback', $email);
    header('Location: http://designstudio.zzz.com.ua');
    exit;
}
elseif( isset($_POST['email']) && preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email'] ) == 0 ){
    echo 'not valid email';
    header('Location: http://designstudio.zzz.com.ua');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1880c2ad27.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/slick-theme.css">
    <link rel="stylesheet" href="style/my-serialize.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Design Studio</title>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v5.0"></script>
    <header>
            <div class="navigation container">
            <a class="logo" href="#">
                <img src="img/logo.svg" alt="logo">
            </a>
            <ul class="navigation__menu">
                <li><a href="#">HOME</li></a>
                <li><a href="#">FEATURES</li></a>
                <li><a href="#">SHOP</li></a>
                <li><a href="#">BLOG</li></a>
                <li><a href="#">ACCESSORIES</li></a>
                <li><a href="#">CONTACT</li></a>
            </ul>
            <ul class="navigation-items">
                <li><a href="#"><img class="navigation-items__item" src="img/search-icon.svg" alt=""></a></li>
                <li><a href="#"><img class="navigation-items__item" src="img/hearth_nav.svg" alt=""></a>
                </li>
                <li><a href="#"><img class="navigation-items__item" src="img/basket_nav.svg" alt=""></a>
                </li>
                <li class="burger">
                    <span class="burger-icon"></span>
                </li>
            </ul>
        </div>
        <div class="mob-menu container">

            <ul class="mob-menu-list">
                <li><a href="#">HOME</li></a>
                <li><a href="#">FEATURES</li></a>
                <li><a href="#">SHOP</li></a>
                <li><a href="#">BLOG</li></a>
                <li><a href="#">ACCESSORIES</li></a>
                <li><a href="#">CONTACT</li></a>
            </ul>
        </div>
    </header>
    <div class="banner-slider">
        <div class="banner-slider__item banner-slider__item__first">
            <div class="banner-slider__item__content container">
                <p>Welcome To<span>Pahu Design</span></p>
                <h1>YOU ARE IN GOOD HAND WITH US</h1>
            </div>
        </div>
        <div class="banner-slider__item banner-slider__item__second">
            <div class="banner-slider__item__content container">
                <p>Welcome To<span>Pahu Design</span></p>
                <h1>YOU ARE IN GOOD HAND WITH US</h1>
            </div>
        </div>
        <div class="banner-slider__item banner-slider__item__third">
            <div class="banner-slider__item__content container">
                <p>Welcome To<span>Pahu Design</span></p>
                <h1>YOU ARE IN GOOD HAND WITH US</h1>
            </div>
        </div>
        <div class="banner-slider__item banner-slider__item__four">
            <div class="banner-slider__item__content container">
                <p>Welcome To<span>Pahu Design</span></p>
                <h1>YOU ARE IN GOOD HAND WITH US</h1>
            </div>
        </div>
    </div>
    <div class="choose-us">
        <h2>why choose us</h2>
        <div class="dot"></div>
        <div class="container">
            <!-- left column  -->
            <div class="choose-us-column --left">
                <div class="choose-us-column-item">
                    <img src="img/item1.svg" alt="skill" class="choose-us-column-item__img">
                    <div class="item__content">
                        <span class="choose-us-column-item__title">MORDERN DESIGN</span>
                        <p class="choose-us-column-item__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="choose-us-column-item">
                    <img src="img/item2.svg" alt="skill" class="choose-us-column-item__img">
                    <div class="item__content">
                        <span class="choose-us-column-item__title">UNIQUE QUALITY</span>
                        <p class="choose-us-column-item__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end left column -->
            <img class="choose-us-picture" src="img/chair-bg-choose.png"></img>
            <!-- right coulumn -->
            <div class="choose-us-column --right">
                <div class="choose-us-column-item">
                    <img src="img/item3.svg" alt="skill" class="choose-us-column-item__img">
                    <div class="item__content">
                        <span class="choose-us-column-item__title">HONEST PRICES</span>
                        <p class="choose-us-column-item__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="choose-us-column-item">
                    <img src="img/item4.svg" alt="skill" class="choose-us-column-item__img">
                    <div class="item__content">
                        <span class="choose-us-column-item__title">GREAT SUPPORT</span>
                        <p class="choose-us-column-item__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end right coulumn -->
        </div>
    </div>
    <section class="grid banner">
        <div class="grid-sizer"></div>
        <div class="grid-item grid-item--autoHeigh grid-item--height6 banner-item-1">
            <p class="banner-item-content">
                <span class="grid-title">PATIO FURNITURE VIETNAM</span>
                <a href="#" class="grid-link">VIEW DEATAIL<i class="fas fa-arrow-right"></i></a>
            </p>
        </div>
        <div class="grid-item grid-item--height2 banner-item-2"></div>
        <div class="grid-item grid-item--width2 grid-item--height2 banner-item-3">
            <p class="banner-item-content">
                <span class="grid-title">DESIGN BY JARNET PARK TREND 2017</span>

                <a href="#" class="grid-link">VIEW DEATAIL<i class="fas fa-arrow-right"></i></a>
            </p>
        </div>
        <div class="grid-item grid-item--width2 grid-item--height329 banner-item-4">
            <p class="banner-item-content">
                <span class="grid-title">CERAMICS WM MUNOZ</span>
                <a href="#" class="grid-link">VIEW DEATAIL<i class="fas fa-arrow-right"></i></a>
            </p>
        </div>
        <div class="grid-item grid-item--height329 banner-item-5">
        </div>
    </section>

    <section class="collection">

        <div class="container">
            <h2>OUR COLLECTION</h2>
            <div class="dot"></div>
            <div class="collection-products">
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/Layer_5.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/Layer2.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/red-chair.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/chair-green.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/brown.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/black-chair.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>
                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/Layer2.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>

                <div class="collection-products-item">
                    <div class="wrapper">
                        <div class="prod-info">
                            <a href="#"><img src="img/search.svg" alt="search"></a>
                            <a href="#"><img src="img/shopping-cart.svg" alt="cart"></a>
                            <a href="#"><img src="img/like.svg" alt="like"></a>
                        </div>
                    </div>
                    <img class="product-img" src="img/Layer_5.svg" alt="product">
                    <div class="collection-products-item__content">
                        <span class="item__product-name">CORONA CHAIR</span>
                        <p class="item__product-descr">Printed evening dress with straight sleeves
                            with black thin waist belt.</p>
                        <span class="item__product-price">
                            $14.86
                        </span>
                    </div>
                </div>

            </div>
    </section>
    <section class="designers-wrapper">
        <div class="designers">
            <div class="container">
                <h2>OUR DESIGNER</h2>
                <div class="dot"></div>
                <div class="designers-block">
                    <div class="designers-block-info"><img src="img/Polygon_2.svg" alt="">
                        <span class="designer-name">Bertil Stam</span>
                    </div>
                    <div class="designers-block-info"><img src="img/girl.svg" alt="">
                        <span class="designer-name">Janet Park</span>
                    </div>
                    <div class="designers-block-info"><img src="img/Polygon_3.svg" alt="">
                        <span class="designer-name">Wm Munoz</span></div>
                </div>
                <div class="wrapper-block">
                    <img src="img/wrapper.svg" alt="">
                    <img src="img/wrapper.svg" alt="">
                    <img src="img/wrapper.svg" alt="">
                </div>

            </div>
        </div>
    </section>
    <section class="project">
        <h2>our project</h2>
        <div class="dot"></div>
        <div class="project-slider">
            <div class="project-slider-item">
                <a href="#" class="project-slider-item__child --child-1">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-2">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-3">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>

                <a href="#" class="project-slider-item__child --child-4">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
            </div>
            <div class="project-slider-item">
                <a href="#" class="project-slider-item__child --child-5">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-6">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-7">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-8">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
            </div>
            <div class="project-slider-item">
                <a href="#" class="project-slider-item__child --child-9">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-10">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-11">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
                <a href="#" class="project-slider-item__child --child-12">
                    <span class="project-slider-item__descr">MODERN LIVING ROOM </span>
                    <span class="project-slider-item__interior">INTERIOR DESIGN</span>
                </a>
            </div>

        </div>
    </section>

    <section class="blog">
        <div class="container">
            <h2>FROM OUR BLOG</h2>
            <div class="dot"></div>
            <div class="blog-block">
                <div class="blog-block-item">
                    <img src="img/dan-gold-218879.svg" alt="blog-block-item-img">
                    <div class="blog-block-item__content">
                        <span class="blog-block-item__content__title">OUR NEW WORK SPACE</span>
                        <p class="blog-block-item__content__descr">Feel alive! So if you’re looking for, here is a list
                            of some of the most popular and fiestas the Mardin has to offer thisfiestas the Mardin has
                            to offer!</p>
                        <a href="#" class="blog-block-item__content__more">read more<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-block-item">
                    <img src="img/jason-briscoe-152940.svg" alt="blog-block-item-img">
                    <div class="blog-block-item__content">
                        <span class="blog-block-item__content__title">modern trend collection</span>
                        <p class="blog-block-item__content__descr">Feel alive! So if you’re looking for, here is a list
                            of some of the most popular and fiestas the Mardin has to offer thisfiestas the Mardin has
                            to offer!</p>
                        <a href="#" class="blog-block-item__content__more">read more<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-block-item">
                    <img src="img/suhyeon-choi-195419.svg" alt="blog-block-item-img">
                    <div class="blog-block-item__content">
                        <span class="blog-block-item__content__title">A WOMAN THINKING</span>
                        <p class="blog-block-item__content__descr">Feel alive! So if you’re looking for, here is a list
                            of some of the most popular and fiestas the Mardin has to offer thisfiestas the Mardin has
                            to offer!</p>
                        <a href="#" class="blog-block-item__content__more">read more<i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="container">
            <ul class="main-footer__top">
                <li class="main-footer__top__item">
                    <h3>CALL US NOW</h3>
                    <span class="main-footer__item__content">
                        <span class="tel__1">Office telephone: (251) 546-9442</span>
                        <span class="tel__2">Hotline: 906-2721</span>
                    </span>
                </li>
                <li class="main-footer__top__item">
                    <h3>COME VISIT US</h3>
                    <span class="main-footer__item__content">
                        <span class="tel">123 6th St.</span>
                        <span>Melbourne, FL 32904</span>
                    </span>
                </li>
                <li class="main-footer__top__item">
                    <h3>SEND A MESSENGE</h3>
                    <span class="main-footer__item__content">
                        <span class="tel__1">Email: pahudesign@pahu.vn</span>
                        <span>support@pahu.vn </span>
                    </span>
                </li>
            </ul>
            <div class="main-footer__bottom">
                <div class="main-footer__bottom__item">
                    <a class="logo" href="#">
                        <img src="img/logo.svg" alt="logo">
                    </a>
                    <ul class="main-footer__bottom__item__links">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="googlePlus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="utube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="main-footer__bottom__item">

                    <h3 class="schedule__title">Hours work</h3>
                    <span class="main-footer__item__content">
                        <span class="schedule__text">Monday - Friday: 08:00 am - 17:00 pm.</span>
                        <span>Saturday: 09:00 am - 12h30 pm.</span>
                    </span>
                    </span>
                </div>
                <div class="main-footer__bottom__item">
                    <h3>Newsletter</h3>
                    <form class="form" method="post" action="index.php">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email..." require>
                        <button type="submit" class="postBtn"><i class="fas fa-arrow-right"></i></button>
                        <span class="form-descr">
                            Sign up to get exclusive offers from our favorite brands and to be well up in the news.
                        </span>
                    </form>
                </div>

            </div>
        
  </div>
    </footer>
    <!-- <script src="js/masonry.pkgd.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>