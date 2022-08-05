<?php

/**
Template Name: Khách hàng
 */

get_header();
?>
<div id="main">
    <div class="inner-wrap">
    </div>
    <div class="inner-wrap-title text-center">
        <div class="container">
            <div class="inner-wrap_content">
                <h1>9 năm - 1500 Khách hàng</h1>
                <div class="desc">Chúng tôi yêu thích và hiểu rõ cách làm thế nào để giúp website hỗ trợ tốt nhất cho chuyện kinh doanh của bạn.</div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-4.png" alt="logo">
    </div>
    <div class="container">
        <div class="customer-header">
            <div class="row">
                <div class="col-md-6 col-xl-4 customer-header__left">
                    <h1>Our Ambassadors: Masters of their Craft.</h1>
                    <p>Booksy Ambassadors come from all walks of life and from around the world. But one thing
                        they share is that they are always at the top of their game. These Booksy providers are
                        shining examples of #SelfMade success who are making a difference in their industry and
                        their communities.</p>
                    <a href="#">Become an Ambassador</a>
                </div>
                <div class="col-md-6 col-xl-8 customer-header__right">
                    <img class="d-none d-xl-block" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/2717-3.jpg" alt="#" title="#">
                    <img class="d-xl-none" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/2709-3-mobile.png" alt="#" title="#">
                </div>
            </div>
        </div>
    </div>
    <div class="customer-main">
        <div class="container">
            <div class="customer-charactor">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query();
                $getposts->query('post_status=publish&showposts=10&post_type=post&cat=13'); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
                <?php $i = 0 ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="customer-charactor__box <?php if ($i % 2 == 0) echo 'flex-md-row-reverse' ?>">
                        <figure class="customer-charactor__box-detail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
                        </figure>
                        <div class="customer-charactor__content">
                            <p class="upper-title"><?php the_field('website') ?></p>
                            <h3><?php the_title(); ?></h3>
                            <div class="customer-charactor__content-desc"><?php the_excerpt(); ?></div>
                            <ul class="sociallist">
                                <li class="sociallist-item">
                                    <a href="<?php the_field('facebook') ?>" target="_blank" rel="noopener">
                                        <span class="sociallist-icon facebook"></span>
                                    </a>
                                </li>
                                <li class="sociallist-item">
                                    <a href="<?php the_field('url_website') ?>" target="_blank" rel="noopener">
                                        <span class="sociallist-icon instagram"></span>
                                    </a>
                                </li>
                                <li class="sociallist-item">
                                    <a href="#" target="_blank" rel="noopener nofollow">
                                        <span class="sociallist-icon booksy"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <!-- Get post News Query -->
                <!-- <div class="customer-charactor__box">
                    <figure class="customer-charactor__box-detail" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/customer/390-Ambassadors_Kim.jpg)">
                        <div class="customer-charactor__box-logo">
                        </div>
                        <a class="customer-charactor__box-mobile d-md-none">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/chat.svg" alt="" title="">

                        </a>
                        <a href="#" class="d-md-none customer-charactor__box-link hide"> </a>
                        <figcaption class="customer-charactor__box-text">“I’m putting my trust in Booksy to keep our
                            business organized”
                        </figcaption>
                    </figure>
                    <div class="customer-charactor__content">
                        <p class="upper-title">California</p>
                        <h3>Kim Kimble</h3>
                        <p class="customer-charactor__content-desc">Kim Kimble is an acclaimed hairstylist whose
                            clients include Beyonce, Britney Spears, Oprah, Shakira, and Nicki Minaj. She opened her
                            first salon in 1995 and quickly became one of the most respected names in hair care and
                            styling. Kim has starred on WE TV’s LA Hair, and has worked on multiple SuperBowl
                            halftime shows. Because of her busy travel schedule, Kim counts on Booksy to manage the
                            day-to-day operations of her LA salon, Kimble Hair Studio.</p>
                        <ul class="sociallist">
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon facebook"></span>
                                </a>
                            </li>
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon instagram"></span>
                                </a>
                            </li>
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon booksy"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer-join">
                    <div class="customer-join__box">
                        <div class="customer-join__bg">
                        </div>
                        <div class="customer-join__inner">
                            <h3>Do you want to join our Ambassadors?</h3>
                            <a href="mailto:info.us@booksy.com?subject=I would like to become Booksy Ambassador!" class="customer-join__inner-btn">
                                Become an Ambassador
                            </a>
                        </div>
                        <div class="customer-join__img">
                            <img class="d-none d-lg-block -first" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/2708-1.png" alt="1" title="">
                            <img class="d-none d-lg-block -second" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/160-cta2.png" alt="cta2" title="">
                            <img class="d-none d-lg-block -third" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/159-cta3.png" alt="cta3" title="">
                            <img class="d-lg-none -mobile" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/161-cta@mobile.jpg" alt="cta@mobile" title="">
                        </div>
                    </div>
                </div>
                <div class="customer-charactor__box flex-md-row-reverse">
                    <figure class="customer-charactor__box-detail" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/customer/390-Ambassadors_Kim.jpg)">
                        <div class="customer-charactor__box-logo">
                        </div>
                        <a class="customer-charactor__box-mobile d-md-none">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/customer/chat.svg" alt="" title="">

                        </a>
                        <a href="#" class="d-md-none customer-charactor__box-link hide"> </a>
                        <figcaption class="customer-charactor__box-text">“I’m putting my trust in Booksy to keep our
                            business organized”
                        </figcaption>
                    </figure>
                    <div class="customer-charactor__content">
                        <p class="upper-title">California</p>
                        <h3>Kim Kimble</h3>
                        <p class="customer-charactor__content-desc">Kim Kimble is an acclaimed hairstylist whose
                            clients include Beyonce, Britney Spears, Oprah, Shakira, and Nicki Minaj. She opened her
                            first salon in 1995 and quickly became one of the most respected names in hair care and
                            styling. Kim has starred on WE TV’s LA Hair, and has worked on multiple SuperBowl
                            halftime shows. Because of her busy travel schedule, Kim counts on Booksy to manage the
                            day-to-day operations of her LA salon, Kimble Hair Studio.</p>
                        <ul class="sociallist">
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon facebook"></span>
                                </a>
                            </li>
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon instagram"></span>
                                </a>
                            </li>
                            <li class="sociallist-item">
                                <a href="#" target="_blank" rel="noopener nofollow">
                                    <span class="sociallist-icon booksy"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="footer-pattern-hidden bg-main">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pattern-5.png" alt="logo">
</div>
<?php get_footer();
