<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tiah
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/blog.css?3">

<div id="main">
    <div class="inner-wrap">
    </div>
    <main class="l-main -blog">
        <article class="c-blogArticle">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <header class="c-blogArticle_header -mb68 -mb40sm">
                            <p class="c-blogArticle_metadata -mt60 -mb48 -mt40sm -mb32sm">
                                <span class="t-text -f12sb"><?php echo get_the_date() ?></span>
                                <span class="t-text -f12sb c-blogArticle_readTime">
                                    Đăng lúc <span><?php echo get_the_time() ?></span>
                                </span>
                            </p>


                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="t-title -f40_56">
                                        <?php the_title() ?>
                                    </h1>
                                </div>
                            </div>

                        </header>
                    </div>
                </div>
            </div>
            <div class="container -xsFullWidth">
                <div class="row no-gutters">
                    <div class="col-md-12 c-blogArticle_col -body">
                        <div class="c-blogArticle_richText">
                            <div class="container">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                    the_content();
                                endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <section class="c-postSliderSec -pt100 -bgGreyLight">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="c-postSliderSec_title t-title -mb60 -f32 -f28sm">Cùng chuyên mục</h4>
                        <div class="swiper-container c-postSliderSec_swiper">
                            <div class="swiper-wrapper">
                                <?php
                                $categories = get_the_category($post->ID);
                                if ($categories) {
                                    $category_ids = array();
                                    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                    $args = array(
                                        'category__in'   => $category_ids,
                                        'post__not_in'   => array($post->ID), //Bỏ qua bài viết hiện tại
                                        'posts_per_page' => 8, // Số bài viết bạn muốn hiển thị.
                                        'caller_get_posts' => 1,
                                        'no_found_rows'   => true //Bỏ qua load phân trang tăng hiệu suât query
                                    );
                                    $my_query = new wp_query($args);
                                    if ($my_query->have_posts()) {
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                ?>
                                            <div class="swiper-slide col-md-6 col-xl-4">
                                                <a href="#" class="c-teaserBlog">
                                                    <figure class="c-teaserBlog_image">
                                                        <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" />
                                                    </figure>

                                                    <div class="c-teaserBlog_content">
                                                        <div class="c-teaserBlog_content_inner">
                                                            <h3 class="t-title -f16 -mb12"><?php the_title(); ?></h3>
                                                            <div class="t-text -f14_28 -cGreyDark -mb24"><?php the_excerpt(); ?></div>
                                                        </div>
                                                        <div class="c-teaserBlog_cta">
                                                            <time class="t-text -f12sb -wSemiBold -cDark"><?php the_date(); ?></time>
                                                            <span class="c-linkMore">Xem chi tiết</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <button type="button" class="c-btnSliderNav -prev -light -maxLeft"></button>
                            <button type="button" class="c-btnSliderNav -next -light -maxRight"></button>
                            <div class="swiper-pagination -darkTeal"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php
get_footer();
