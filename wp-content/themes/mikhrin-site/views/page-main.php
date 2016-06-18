<?php
/**
 * Template Name: Main_Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mikhrin_and_Co_Site
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/1.jpg">
            </div>
            <div class="wrap__label">
                <img class="carousel__label" src="/wp-content/themes/mikhrin-site/images/carousel/label_1.png">
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/2.jpg">
            </div>
            <div class="wrap__label">
                <img class="carousel__label" src="/wp-content/themes/mikhrin-site/images/carousel/label_2.png">
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/3.jpg" alt="Flower">
            </div>
            <div class="wrap__label">
                <img class="carousel__label" src="/wp-content/themes/mikhrin-site/images/carousel/label_3.png">
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/4.jpg" alt="Flower">
            </div>
            <div class="wrap__label">
                <img class="carousel__label" src="/wp-content/themes/mikhrin-site/images/carousel/label_4.png">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row header">
        <div class="col-md-4 header__text"><strong>Event-агенство Mdr&Co</strong> Послуги вищого рівня! Організація усіх видів святкувань! Надійно!
            <div class="social">
                <div class="social__border-top social__border-top--right"></div>
                <div class="social__border-top social__border-top--left"></div>
                <span class="social__title">Ми в соцмережах:</span>
                <a class="social__icon social__icon--vk"><img src="/wp-content/themes/mikhrin-site/images/icons/vk.png"></a>
                <a class="social__icon social__icon--facebook"><img src="/wp-content/themes/mikhrin-site/images/icons/facebook.png"></a>
                <a class="social__icon social__icon--twitter"><img src="/wp-content/themes/mikhrin-site/images/icons/twitter.png"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-md-4 header__logo"><img src="/wp-content/themes/mikhrin-site/images/logo.jpg"></div>
        <div class="col-md-4 header__contact">+38(095)82-03-168<br/> +38(095)82-03-168<br/> +38(095)82-03-168
				<span class="icon__telephon">
					<img src="/wp-content/themes/mikhrin-site/images/icons/telephon.png">
				</span>
        </div>
    </div>
    <div class="menu">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Меню</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Про Kam&Co</a>
                        </li>
                        <li>
                            <a href="#">Новини</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                                Послуги
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Комплексний супровід Horeca</a>
                                </li>
                                <li>
                                    <a href="#">Комплексний супровід Horeca</a>
                                </li>
                                <li>
                                    <a href="#">Комплексний супровід Horeca</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Фото</a>
                        </li>
                        <li>
                            <a href="#">Клієнти</a>
                        </li>
                        <li>
                            <a href="#">Партнери</a>
                        </li>
                        <li>
                            <a href="#">Контакти</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row service_block">
        <div class="col-md-3 service ">
            <img src="/wp-content/themes/mikhrin-site/images/service/1.jpg" class="service__image">
            <span class="service__label">Комплексний супровід Horeca</span>
        </div>
        <div class="col-md-3 service">
            <img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
            <span class="service__label">Комплексний супровід Horeca</span>
        </div>
        <div class="col-md-3 service">
            <img src="/wp-content/themes/mikhrin-site/images/service/3.jpg" class="service__image">
            <span class="service__label">Комплексний супровід Horeca</span>
        </div>
        <div class="col-md-3 service">
            <img src="/wp-content/themes/mikhrin-site/images/service/4.jpg" class="service__image">
            <span class="service__label">Комплексний супровід Horeca</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="trust">
        Нам довіряють:
    </div>
    <div class="brand">
        <img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/cocacola.png" alt="coca-cola">
        <img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/uni.png" alt="unilever">
        <img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/moz.png" alt="mondelez">
        <img class="brand__item" src="/wp-content/themes/mikhrin-site/images/brand/nest.png" alt="nestle">
    </div>
</div>
<?php get_footer(); ?>