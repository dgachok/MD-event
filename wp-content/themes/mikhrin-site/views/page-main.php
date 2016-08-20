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
                <img class="label_img" src="/wp-content/themes/mikhrin-site/images/icons/label_slider_img.png">
                <span class="label__title">
                    Твій персональний
                    <p class="label__title--strong margin_top_10">event-менеджер</p>

                </span>
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/2.jpg">
            </div>
            <div class="wrap__label">
                <img class="label_img" src="/wp-content/themes/mikhrin-site/images/icons/label_slider_img.png">
                <span class="label__title">
                    <p class="label__title--strong margin_bottom_10">Event-послуги</p>
                європейського рівня
                </span>
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/3.jpg" alt="Flower">
            </div>
            <div class="wrap__label">
                <img class="label_img" src="/wp-content/themes/mikhrin-site/images/icons/label_slider_img.png">
                <span class="label__title">
                    Професійний
                    <p class="label__title--strong margin_top_10">event-outsourcing</p>
                </span>
            </div>
        </div>

        <div class="item">
            <div class="width__full">
                <img src="/wp-content/themes/mikhrin-site/images/carousel/4.jpg" alt="Flower">
            </div>
            <div class="wrap__label">
                <img class="label_img" src="/wp-content/themes/mikhrin-site/images/icons/label_slider_img.png">
                <span class="label__title">
                    Заходи ділового формату
                    <p class="label__title--strong margin_top_15">від KAM&Co.</p>
                </span>
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
                        <span class="sr-only"></span>
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
        <div class="col-md-3 service js-service" data-json='{"title": "Це саме те що вам потрібно!1", "description": "Вам временно предоставляется скачаный нами исходный мультимедиа материал исключительно в целях.1"}'>
            <img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
            <span class="service__label js-service-t">Комплексний супровід Horeca</span>
        </div>

        <div class="col-md-3 service js-service" data-json='{"title": "Це саме те що вам потрібно!2", "description": "Вам временно предоставляется скачаный нами исходный мультимедиа материал исключительно в целях.2"}'>
            <img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
            <span class="service__label js-service-t">Комплексний супровід Horeca</span>
        </div>
        <div class="col-md-3 service js-service" data-json='{"title": "Це саме те що вам потрібно!3", "description": "Вам временно предоставляется скачаный нами исходный мультимедиа материал исключительно в целях.3"}'>
            <img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
            <span class="service__label js-service-t">Комплексний супровід Horeca</span>
        </div>
        <div class="col-md-3 service js-service" data-json='{"title": "Це саме те що вам потрібно!4", "description": "Вам временно предоставляется скачаный нами исходный мультимедиа материал исключительно в целях.4"}'>
            <img src="/wp-content/themes/mikhrin-site/images/service/2.jpg" class="service__image">
            <span class="service__label js-service-t">Комплексний супровід Horeca</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="trust">
        Нам довіряють:
    </div>
    <div class="brand">
        <div class="brand__item brand__item--cola">
            <img src="/wp-content/themes/mikhrin-site/images/brand/cocacola.png" alt="coca-cola">
        </div>
        <div class="brand__item brand__item--uni">
            <img src="/wp-content/themes/mikhrin-site/images/brand/uni.png" alt="unilever">
        </div>
        <div class="brand__item brand__item--moz">
            <img src="/wp-content/themes/mikhrin-site/images/brand/moz.png" alt="mondelez">
        </div>
        <div class="brand__item brand__item--nes">
            <img src="/wp-content/themes/mikhrin-site/images/brand/nest.png" alt="nestle">
        </div>
    </div>
</div>
<script id="serviceTemplateBlock" type="text/html">
    <div class="service_additional js-service-h">
        <div class="service_additional__border">
            <div class="service_additional__title">{title}</div>
            <span class="service_additional__text">{description}</span>
        </div>
    </div>
</script>
<script>
    $( document ).ready(function() {
        services();
    });    
</script>
<?php get_footer(); ?>

