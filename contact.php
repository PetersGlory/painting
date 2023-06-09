<?php
include './inc/header.php'
?>


    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include './inc/topBar.php';?>

        <!-- <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div> -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="contact-page-shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact us</span>
                                <h2 class="section-title__title">Feel Free to Write</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <div class="contact-page__form">
                                <form action="https://ambed-html.vercel.app/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                <ul class="list-unstyled contact-page__details-list">
                                    <li>
                                        <span>Call anytime</span>
                                        <p><a href="tel:980009630">+ 98 (000) - 9630</a></p>
                                    </li>
                                    <li>
                                        <span>Send email</span>
                                        <p><a href="mailto:ambed@company.com">ambed@company.com</a></p>
                                    </li>
                                    <li>
                                        <span>Visit Office</span>
                                        <p>380 St Kilda Golden Road Melbourne, Australia</p>
                                    </li>
                                </ul>
                                <div class="contact-page__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-two">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__two-box" allowfullscreen></iframe> -->

        </section>
        <!--Google Map End-->

        <!--Newsletter Start-->
        <section class="newsletter newsletter-two">
            <div class="container">
                <div class="newsletter__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="newsletter-shape-1"
                        style="background-image: url(assets/images/shapes/newsletter-shape-1.png);"></div>
                    <div class="newsletter__left">
                        <h3 class="newsletter__title">Join Our Newsletter</h3>
                        <p class="newsletter__text">Lorem ipsum dolor amet, elit do eiusmod sed</p>
                    </div>
                    <div class="newsletter__right">
                        <form class="newsletter__form">
                            <div class="newsletter__input-box">
                                <input type="email" placeholder="Enter your email" name="email">
                                <button type="submit" class="thm-btn newsletter__btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter End-->

        <?php include './inc/footer-bottom.php';?>


    </div><!-- /.page-wrapper -->

<?php include './inc/footer.php';?>