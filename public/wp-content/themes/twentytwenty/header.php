<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>Katoポートフォリオ</title>
        <meta name="description" content="WebデザイナーのKatoのポートフォリオサイトです。デザインやコーディングなどWeb制作はおまかせください。ノーコードによるサイト制作も可能です。" />
        <!-- ogp start -->
        <meta property="og:url" content="http://localhost:8080" />
        <meta property="og:title" content="Katoポートフォリオ" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="WebデザイナーのKatoのポートフォリオサイトです。デザインやコーディングなどWeb制作はおまかせください。ノーコードによるサイト制作も可能です。" />
        <meta property="og:site_name" content="Katoポートフォリオ" />
        <meta property="og:image" content="https://jp.techcrunch.com/wp-content/uploads/2021/11/twitter-2021-10-d-2.jpg?w=738" />
		<meta property="og:locale" content="ja_JP" />
		<meta name="twitter:card" content="Summary Card" />

		<?php wp_head(); ?>

        <!-- main.jsが読み込めないので一旦こちらに記述 -->
        <script>
            jQuery(function(){
                $(window).on("load", function () {
                    const trigger = $('.c-fade-in-bottom')
                    $(trigger).each(function () {
                        $(this).addClass("is-show");
                    });
                });            
            });
        </script>

	</head>
<body>
	<header>
		<nav id="nav-header" class="nav-header">
            <div class="nav-header__container">
                <a href="/" class="nav-header__logo">Kato PORTFOLIO</a>
                <ul class="nav-header__menu">
                    <li class="nav-header__menu-item">
                        <a href="/" class="nav-header__link">HOME</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="/works" class="nav-header__link">WORKS</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="/about" class="nav-header__link">ABOUT</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="/skill" class="nav-header__link">SKILL</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="/#top-service" class="nav-header__link">SERVICE</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="/contact" class="nav-header__link">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
	</header>