<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'global-templates/hero' ); ?>

<div class="wrapper pb-0" id="index-wrapper">
    <main class="site-main" id="main">
        <section id="about" class="py-5">
            <div class="<?php echo esc_attr( $container ); ?>">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="slashed-wrapper text-center mb-5">
                            <h2 class="slashed">
                                <div class="top" title="MISSION"></div>
                                <div class="bot" title="MISSION"></div>
                            </h2>
                        </div>
                        <p class="display-4 lh-xl font-weight-bold">
                            自分らしく生きたことはあるか。僕たちが創るのはコミュニティじゃない、次世代だ。<br>「Z世代」と呼ばれる、1990年代中盤から2000年代終盤までに生まれた僕たち世代に向けて、革命の鐘を。<br>個々の鐘が集まり、音楽となり、人の心を動かしていく。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="members" class="py-5">
            <div class="<?php echo esc_attr( $container ); ?>">
                <h2 class="h2 mb-5 font-weight-bold">Members</h2>
                <div class="member-list row justify-content-between">
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kent1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kent2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">今瀧健登</p>
                                <p class="text-sm">僕と私と株式会社 CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hinako1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hinako2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">杉浦日向子</p>
                                <p class="text-sm">イチミ株式会社 CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hayato1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hayato2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">福島颯人</p>
                                <p class="text-sm">僕と私と株式会社 CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keita1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keita2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">渋谷啓太</p>
                                <p class="text-sm">株式会社ness CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryohei1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryohei2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">久後諒平</p>
                                <p class="text-sm">株式会社NOPAIN CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayano1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayano2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">荒木彩乃</p>
                                <p class="text-sm">株式会社YOICHO CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/takuya1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/takuya2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">大浴拓也</p>
                                <p class="text-sm">株式会社Next Paradigm CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubasa1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubasa2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">笛田翼</p>
                                <p class="text-sm">Being BaSE株式会社 CEO</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 px-md-4 mb-4">
                        <div class="flipped-profile border border-primary rounded">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/masato1.jpg" class="front"
                                alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/masato2.jpg" class="flipped"
                                alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-8">
                                <p class="text-md mb-2">霧生真斗</p>
                                <p class="text-sm">conf株式会社 代表</p>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bokuwata.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="sponsor" class="py-5">
                <div class="slashed-wrapper text-center mb-5">
                    <h2 class="slashed">
                        <div class="top" title="SPONSOR"></div>
                        <div class="bot" title="SPONSOR"></div>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 mb-4">
                        <img src="https://placehold.jp/200x100.png" alt="">
                    </div>
                </div>
            </section> -->
        <section id="contact" class="pt-7 pb-5 bg-dark">
            <div class="<?php echo esc_attr( $container ); ?>">
                <h2 class="h2 mb-5 text-white text-center">We <span class="addfont1">Create</span> the Next Generation,
                    with you</h2>
                <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form"]'); ?>
            </div>
        </section>

    </main><!-- #main -->

    <!-- The pagination component -->
    <?php understrap_pagination(); ?>

</div><!-- #index-wrapper -->

<?php
get_footer();