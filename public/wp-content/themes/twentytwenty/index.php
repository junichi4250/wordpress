<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>トップページ</title>
        <meta name="description" content="" />
        <!-- ogp start -->
        <meta property="og:url" content="" />
        <meta property="og:type" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:image" content="" />
        <!-- //ogp end -->
		<link rel="stylesheet" href="dist/style.css">
        <?php wp_head(); ?>

    </head>
    <body>
        <!-- nav-header -->
        <nav id="nav-header" class="nav-header">
            <div class="nav-header__container">
                <a href="./index.html" class="nav-header__logo">CORPORATE</a>
                <ul class="nav-header__menu">
                    <li class="nav-header__menu-item">
                        <a href="#top-message" class="nav-header__link">MESSAGE</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="#top-service" class="nav-header__link">SRVICE</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="#top-works" class="nav-header__link">WORKS</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="#top-company" class="nav-header__link">COMPANY</a>
                    </li>
                    <li class="nav-header__menu-item">
                        <a href="#contact-guide" class="nav-header__contact">CONTACT</a>
                    </li>
                </ul>
                <div class="nav-header__toggle js-nav-drawer-open">
                    <div class="nav-header__toggle-line"></div>
                    <div class="nav-header__toggle-line"></div>
                    <div class="nav-header__toggle-line"></div>
                </div>
            </div>
        </nav><!-- /nav-header -->
        <nav id="nav-drawer" class="nav-drawer" data-open="false">
            <div class="nav-drawer__container">
                <div class="nav-drawer__menu-button">
                    <button id="nav-drawer-close" class="nav-drawer__button-close">
                        <div class="nav-drawer__button-close-line"></div>
                        <div class="nav-drawer__button-close-line"></div>
                    </button>
                </div>
                <ul class="nav-drawer__menu">
                    <li class="nav-drawer__menu-item">
                        <a href="#top-message" class="nav-drawer__link js-nav-drawer-link">
                            <span class="nav-drawer__link-main">MESSAGE</span>
                            <span class="nav-drawer__link-sub">メッセージ</span>
                        </a>
                    </li>
                    <li class="nav-drawer__menu-item">
                        <a href="#top-service" class="nav-drawer__link js-nav-drawer-link">
                            <span class="nav-drawer__link-main">SERVICE</span>
                            <span class="nav-drawer__link-sub">サービス</span>
                        </a>
                    </li>
                    <li class="nav-drawer__menu-item">
                        <a href="#top-works" class="nav-drawer__link js-nav-drawer-link">
                            <span class="nav-drawer__link-main">WORKS</span>
                            <span class="nav-drawer__link-sub">制作実績</span>
                        </a>
                    </li>
                    <li class="nav-drawer__menu-item">
                        <a href="#top-company" class="nav-drawer__link js-nav-drawer-link">
                            <span class="nav-drawer__link-main">COMPANY</span>
                            <span class="nav-drawer__link-sub">会社情報</span>
                        </a>
                    </li>
                    <li class="nav-drawer__menu-item">
                        <a href="#contact" class="nav-drawer__link js-nav-drawer-link">
                            <span class="nav-drawer__link-main">CONTACT</span>
                            <span class="nav-drawer__link-sub">お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="nav-drawer-overlay" class="nav-drawer__overlay"></div>
        </nav>
        <!-- nav-pagetop -->
        <nav class="nav-pagetop js-nav-pagetop"></nav><!-- /nav-pagetop -->
        <main id="wrapper" class="wrapper">
            <!-- mainvisual -->
            <section id="mainvisual" class="mainvisual">
                <div class="mainvisual__container">
                    <div class="mainvisual__text-main">CORPORATE</div>
                    <div class="mainvisual__text-sub">テキストテキストテキストテキストテキスト</div>
                </div>
            </section><!-- /mainvisual -->
            <!-- top-message -->
            <section id="top-message" class="top-message">
                <div class="top-message__container">
                    <div class="top-message__heading">
                        <!-- page-heading -->
                        <h2 class="page-heading">
                            <div class="page-heading__content--center">
                                <div class="page-heading__text-main">Message</div>
                                <div class="page-heading__text-sub">メッセージ</div>
                            </div>
                        </h2><!-- /page-heading -->
                    </div>
                    <div class="top-message__content">
                        <div class="top-message__text"> テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト </div>
                    </div>
                </div>
            </section><!-- /top-message -->
            <!-- top-service -->
            <section id="top-service" class="top-service">
                <div class="top-service__container">
                    <div class="top-service__heading">
                        <!-- page-heading -->
                        <h2 class="page-heading">
                            <div class="page-heading__content--center">
                                <div class="page-heading__text-main">Service</div>
                                <div class="page-heading__text-sub">サービス</div>
                            </div>
                        </h2><!-- /page-heading -->
                    </div>
                    <div class="top-service__list">
                        <div class="top-service__list-item">
                            <!-- service-feature-item -->
                            <div class="service-feature-item">
                                <figure class="service-feature-item__thumbnail">
                                    <img src="screenshot.jpg" class="service-feature-item__thumbnail-image">
                                </figure>
                                <div class="service-feature-item__content">
                                    <h4 class="service-feature-item__content-title">テキストテキスト</h4>
                                    <div class="service-feature-item__content-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                                </div>
                            </div><!-- service-feature-item -->
                        </div>
                        <div class="top-service__list-item">
                            <!-- service-feature-item -->
                            <div class="service-feature-item">
                                <figure class="service-feature-item__thumbnail">
                                    <img src="./img/sample_image_1_1.jpg" class="service-feature-item__thumbnail-image">
                                </figure>
                                <div class="service-feature-item__content">
                                    <h4 class="service-feature-item__content-title">テキストテキスト</h4>
                                    <div class="service-feature-item__content-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                                </div>
                            </div><!-- service-feature-item -->
                        </div>
                        <div class="top-service__list-item">
                            <!-- service-feature-item -->
                            <div class="service-feature-item">
                                <figure class="service-feature-item__thumbnail">
                                    <img src="./img/sample_image_1_1.jpg" class="service-feature-item__thumbnail-image">
                                </figure>
                                <div class="service-feature-item__content">
                                    <h4 class="service-feature-item__content-title">テキストテキスト</h4>
                                    <div class="service-feature-item__content-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                                </div>
                            </div><!-- service-feature-item -->
                        </div>
                    </div>
                </div>
            </section><!-- /top-service -->
            <!-- top-works -->
            <section id="top-works" class="top-works">
                <div class="top-works__container">
                    <div class="top-works__heading">
                        <!-- page-heading -->
                        <h2 class="page-heading">
                            <div class="page-heading__content--center">
                                <div class="page-heading__text-main">Works</div>
                                <div class="page-heading__text-sub">制作実績</div>
                            </div>
                        </h2><!-- /page-heading -->
                    </div>
                    <div class="top-works__list">
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                        <article class="top-works__list-item">
                            <!-- works-item -->
                            <div data-photo="./img/sample_image_4_3.jpg" class="works-item js-modal-photo">
                                <figure class="works-item__thumbnail">
                                    <img class="works-item__thumbnail-image" src="./img/sample_image_4_3.jpg">
                                </figure>
                                <div class="works-item__content">
                                    <h3 class="works-item__content-title">タイトルタイトルタイトルタイトル</h3>
                                </div>
                            </div><!-- /works-item -->
                        </article>
                    </div>
                </div>
            </section><!-- /top-works -->
            <!-- top-company -->
            <section id="top-company" class="top-company">
                <div class="top-company__container">
                    <div class="top-company__heading">
                        <!-- page-heading -->
                        <h2 class="page-heading">
                            <div class="page-heading__content--center">
                                <div class="page-heading__text-main">Company</div>
                                <div class="page-heading__text-sub">会社情報</div>
                                <div class="page-heading__message">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト</div>
                            </div>
                        </h2><!-- /page-heading -->
                    </div>
                    <div class="top-company__content">
                        <figure class="top-company__content-image">
                            <img src="./img/sample_image_16_9.jpg" alt="">
                        </figure>
                        <div class="top-company__content-table">
                            <!-- table-overview -->
                            <table class="table-overview">
                                <tbody>
                                    <tr>
                                        <th>住所</th>
                                        <td>〒000-0000<br>〇〇〇〇〇〇〇〇〇〇〇〇</td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>0120-000-000</td>
                                    </tr>
                                    <tr>
                                        <th>営業時間</th>
                                        <td>10:00-20:00<br>（定休日：水曜日）</td>
                                    </tr>
                                    <tr>
                                        <th>アクセス</th>
                                        <td>〇〇〇〇駅から徒歩5分</td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>info@example.com</td>
                                    </tr>
                                </tbody>
                            </table><!-- /table-overview -->
                        </div>
                    </div>
                </div>
            </section><!-- /top-company -->
            <!-- contact-guide -->
            <section id="contact-guide" class="contact-guide">
                <div class="contact-guide__container">
                    <h2 class="contact-guide__heading">
                        <div class="contact-guide__heading-main">Contact</div>
                        <div class="contact-guide__heading-sub">お問い合わせ</div>
                    </h2>
                    <div class="contact-guide__message">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキスト</div>
                    <div class="contact-guide__list">
                        <div class="contact-guide__list-item">
                            <a class="contact-guide__button">メールでお問い合わせ</a>
                        </div>
                        <div class="contact-guide__list-item">
                            <a class="contact-guide__button">Twitterでお問い合わせ</a>
                        </div>
                    </div>
                </div>
            </section><!-- /contact-guide -->
        </main>
        <!-- footer -->
        <footer id="footer" class="footer">
            <div class="footer__container">
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <a href="#top-message" class="footer__menu-item-link">MESSAGE</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#top-service" class="footer__menu-item-link">SERVICE</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#top-works" class="footer__menu-item-link">WORKS</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#top-company" class="footer__menu-item-link">COMPANY</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#contact-guide" class="footer__menu-item-link">CONTACT</a>
                    </li>
                </ul>
                <div class="footer__copy">Copyright©CORPORATE. All Rights Reserved.</div>
            </div>
        </footer><!-- /footer -->
        <!-- photo-modal -->
        <div id="modal-photo" class="photo-modal">
            <button id="modal-photo-close" class="photo-modal__button--close"></button>
            <button id="modal-photo-prev" class="photo-modal__button--prev"></button>
            <button id="modal-photo-next" class="photo-modal__button--next"></button>
            <div class="photo-modal__container">
                <figure class="photo-modal__image">
                    <img src="" id="modal-photo-image">
                </figure>
            </div>
            <div id="modal-photo-overlay" class="photo-modal__overlay"></div>
        </div><!-- /photo-modal -->
        <script src="./js/script.js"></script>
    </body>
</html>