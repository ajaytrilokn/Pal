<?php
/*
Template Name:Home Page
*/
get_header();

$palApp = get_field('app_store_image','option');
$palPlay = get_field('play_store_image','option');
$palfacebook = get_field('facebook','option');
$palinstagram = get_field('instagram','option');
$palyoutube = get_field('youtube','option');

?>
<div class="page-loader">
    <div class="moderspinner"></div>
</div>

<section class="banner-sec">
    <div class="banner-wrap">
        <div class="container">
            <div class="row flex-md-row-reverse align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                    <div class="banner-img-wp">
                        <div class="banner-img animated fadeInRight slow">
                            <?php $bannerImg = get_field('banner_image'); ?>
                            <img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                    <div class="banner-text animated fadeInUpShort" id="app-link-main">
                        <?php echo the_field('banner_heading'); ?>
                        <p><?php echo the_field('banner_description'); ?></p>
                        <div class="banner-btn">
                            <ul>
                                <li><a href="#" class="animated bounceIn slow"><img
                                            src="<?php echo $palApp['url'];?>"
                                            alt="<?php echo $palApp['alt'];?>"></a></li>
                                <li><a href="#" class="animated bounceIn slow"><img
                                            src="<?php echo $palPlay['url'];?>"
                                            alt="<?php echo $palPlay['alt'];?>"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-sec" id="About">
    <div class="about-wrap">
        <div class="container">
            <div class="about-main">
                <div class="row flex-md-row-reverse align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-text-wrap ">
                            <div class="section-title animatedParent animateOnce">
                                <h2 class="animated fadeInUpShort"><?php echo the_field('about_heading'); ?></h2>
                            </div>

                            <div class="about-text-inner animatedParent animateOnce " data-sequence="400">
                                <div class="about-text-box animated fadeInRightShort" data-id="1">
                                    <h5><?php echo the_field('heading_text'); ?></h5>
                                </div>

                                <div class="about-text-box animated fadeInRightShort" data-id="2">
                                    <?php echo the_field('about_description'); ?>
                                </div>


                                <div class="about-text-box animated fadeInRightShort" data-id="3">
                                    <h6><?php echo the_field('download_text'); ?></h6>
                                    <div class="download_app-link d-flex align-items-center">
                                        <?php
                                        $appIcon = get_field('app_icon');
                                        $googleIcon = get_field('google_play'); ?>
                                        <a href="<?php echo the_field('app_icon_link'); ?>"
                                            class="app-link me-4 mt-3"><img src="<?php echo $appIcon['url']; ?>"
                                                alt="<?php echo $appIcon['alt']; ?>"> </a>
                                        <a href="<?php echo the_field('google_play_link'); ?>"
                                            class="app-link me-4 mt-3"><img src="<?php echo $googleIcon['url']; ?>"
                                                alt="<?php echo $googleIcon['alt']; ?>"> </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-img-wrap animatedParent animateOnce">
                            <div class="about-img animated fadeInLeft slower">
                                <img src="<?php $aboutImage = get_field('about_image');
                                echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['url']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="app-supports-sec">
    <div class="container">
        <div class="section-title text-center animatedParent animateOnce">
            <?php echo the_field('support_heading'); ?>
        </div>

        <div class="app-supports-wrap">
            <div class="app-supports-row">
                <?php if (have_rows('support_boxes')):
                    while (have_rows('support_boxes')):
                        the_row(); ?>
                        <div class="app-supports-col animatedParent animateOnce">
                            <div class="app-supports-box animated fadeInLeft slower">
                                <div class="app-supports-img">
                                    <img class="asi_img" src="<?php $support = get_sub_field('box_image');
                                    echo $support['url']; ?>" alt="<?php echo $support['alt']; ?>">
                                </div>
                                <div class="app-supports-text">
                                    <p><?php echo get_sub_field('box_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
        </div>

    </div>
</section>

<section class="features-sec" id="Features">
    <div class="features-inner">
        <div class="container">
            <div class="features-wrap">
                <div class="section-title text-center animatedParent animateOnce">
                    <h2 class="animated fadeInUpShort"><?php echo the_field('feature_heading'); ?></h2>
                </div>
                <div class="features-tabs">
                    <?php if (have_rows('feature_tab')): ?>
                        <div class="features-tabs-main animatedParent animateOnce">
                            <div class="features-tab-link nav nav-tabs animated fadeInUpShort" id="nav-tab" role="tablist">
                                <?php $i = 0; ?>
                                <?php while (have_rows('feature_tab')):
                                    the_row(); ?>
                                    <?php
                                    // Generate unique tab ID based on tab title
                                    $tab_title = get_sub_field('tab_title');
                                    $tab_id = sanitize_title($tab_title);
                                    ?>
                                    <button class="nav-link <?php echo $i === 0 ? 'active' : ''; ?>" id="<?php echo $tab_id; ?>"
                                        data-bs-toggle="tab" data-bs-target="#<?php echo $tab_id; ?>_tb" type="button"
                                        role="tab" aria-controls="<?php echo $tab_id; ?>_tb"
                                        aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                                        <?php echo $tab_title; ?>
                                    </button>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </div>

                            <div class="features_content-main">
                                <div class="tab-content" id="nav-tabContent">
                                    <?php
                                    $i = 0;
                                    while (have_rows('feature_tab')):
                                        the_row(); ?>
                                        <?php
                                        // Generate unique tab ID based on tab title
                                        $tab_title = get_sub_field('tab_title');
                                        $tab_id = sanitize_title($tab_title);
                                        ?>
                                        <div class="tab-pane fade <?php echo $i === 0 ? 'show active' : ''; ?>"
                                            id="<?php echo $tab_id; ?>_tb" role="tabpanel"
                                            aria-labelledby="<?php echo $tab_id; ?>">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                                                    <div class="features-box-img text-center">
                                                        <?php
                                                        $featureImg = get_sub_field('feature_image');
                                                        ?>
                                                        <img src="<?php echo $featureImg['url']; ?>"
                                                            alt="<?php echo $featureImg['alt']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="features-box-wp">
                                                        <div class="features-box">
                                                            <ul>
                                                                <?php if (have_rows('feature_box_text')): ?>
                                                                    <?php while (have_rows('feature_box_text')):
                                                                        the_row(); ?>
                                                                        <li class="features-box-text">
                                                                            <p class="text"><?php echo get_sub_field('feature_box'); ?>
                                                                            </p>
                                                                        </li>
                                                                    <?php endwhile; ?>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="video-sec" id="video">
    <div class="video-inner">
        <div class="container">
            <div class="video-wrap">

                <div class="section-title text-center animatedParent animateOnce">
                    <h2 class="animated fadeInUpShort"><?php echo the_field('video_heading');?></h2>
                    <p class="animated fadeInUpShort"><?php echo the_field('video_small_text');?></p>
                </div>

                <div class="video-wrapper mb-5 mt-5">
                    <div class="video-container" id="video-container">


                    <iframe width="1196" height="673" src="<?php echo the_field('video_link');?>" title="PAL App" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>

                <div class="banner-btn animatedParent animateOnce">
                    <ul class="d-flex justify-content-center">
                       
                        <li><a href="<?php echo the_field('app_store_link','option');?>" class="animated bounceIn slow"><img
                                    src="<?php echo $palApp['url'];?>"
                                    alt="<?php echo $palApp['alt'];?>"></a></li>
                        <li><a href="<?php echo the_field('play_store_link','option');?>" class="animated bounceIn slow"><img
                                    src="<?php echo $palPlay['url'];?>"
                                    alt="<?php echo $palPlay['alt'];?>"></a></li>
                                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us-sec" id="Contact">
    <div class="contact-us-inner">
        <div class="container">
            <div class="contact-us-wrap">
                <div class="contactUs-content row align-items-center">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                        <div class="section-title animatedParent animateOnce">
                            <div class="animated fadeInUpShort">
                                <h2><?php echo the_field('contact_heading');?></h2>
                                <h5 class="font-we-rg"><?php echo the_field('contact_sub_title');?></h5>
                            </div>
                        </div>
                        <div class="card_form">
                            <?php echo do_shortcode('[contact-form-7 id="e088fb0" title="Contact form"]');?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12 col-12">
                        <div class="contact-link-main">
                            <div class="contact-wrap">
                                <div class="content-links">
                                    <h6 class="font-we-bl">Email</h6>
                                    <a href="mailto:<?php echo the_field('email','option');?>" class="contact-link">
                                        <h5 class="font-we-rg"><?php echo the_field('email','option');?></h5>
                                    </a>
                                </div>
                                <div class="content-links">
                                    <h6 class="font-we-bl">Mobile</h6>
                                    <a href="tel:<?php echo the_field('mobile_no','option');?>" class="contact-link">
                                        <h5 class="font-we-rg"><?php echo the_field('mobile_no','option');?></h5>
                                    </a>
                                </div>
                                <div class="content-links">
                                    <h6 class="font-we-bl">Find us on</h6>
                                    <div class="social-media">
                                        <ul class="social-link">
                                            <li>
                                                <a href="<?php echo the_field('facebook_link','option');?>" class="social-icon">
                                                    <img class="icon-1"
                                                        src="<?php echo $palfacebook['url'];?>"
                                                        alt="<?php echo $palfacebook['alt'];?>">
                                                    <img class="icon-2"
                                                        src="<?php echo $palfacebook['url'];?>"
                                                        alt="<?php echo $palfacebook['alt'];?>">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo the_field('instagram_link','option');?>" class="social-icon">
                                                    <img class="icon-1"
                                                        src="<?php echo $palinstagram['url'];?>"
                                                        alt="<?php echo $palinstagram['alt'];?>">
                                                    <img class="icon-2"
                                                        src="<?php echo $palinstagram['url'];?>"
                                                        alt="<?php echo $palinstagram['alt'];?>">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo the_field('youtube_link','option');?>" class="social-icon">
                                                    <img class="icon-1"
                                                        src="<?php echo $palyoutube['url'];?>"
                                                        alt="<?php echo $palyoutube['alt'];?>">
                                                    <img class="icon-2"
                                                        src="<?php echo $palyoutube['url'];?>"
                                                        alt="<?php echo $palyoutube['alt'];?>">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>