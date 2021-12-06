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


<div class="wrapper py-0" id="index-wrapper">
    <main class="site-main" id="main">
        <div class="kv pb-md-10">
            <div class="px-md-5 pt-8 py-md-7 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kv-pc.png"
                    class="w-100 d-none d-md-inline" style="max-width: 1200px;" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kv-sp.png" class="w-100 d-md-none"
                    alt="">
            </div>
            <section id="about" class="pt-7 pb-10 text-white text-center text-md-left">
                <div class="<?php echo esc_attr( $container ); ?>">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 col-lg-4">
                            <p class="display-3 font-weight-bold mb-5 icon-star">次世代の<br
                                    class="d-none d-md-block">熱狂を<br class="d-none d-md-block">動かす</p>
                        </div>
                        <div class="col-12 col-md-7 text-md-lg lh-xl">
                            <p class="mb-4 mb-md-0">
                                自分らしく生きたことはあるか。<br>僕たちが創るのはコミュニティじゃない、<br class="d-md-none">次世代だ。
                            </p>
                            <p class="mb-4 mb-md-0">
                                「Z世代」と呼ばれる、<br class="d-md-none">1990年代中盤から2000年代終盤までに<br>生まれた僕たち世代に向けて、<br
                                    class="d-md-none">革命の鐘を。
                            </p>
                            <p class="mb-md-0">
                                個々の鐘が集まり、音楽となり、<br class="d-md-none">人の心を動かしていく。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section id="services" class="py-7 bg-dark">
            <div class="<?php echo esc_attr( $container ); ?>">
                <h2 class="h2 text-white text-center text-md-left mb-5">What We Do</h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card w-100 mb-4 mb-md-0">
                            <div class="card-body bg-white text-primary">
                                <h3 class="card-title text-underline">Community</h3>
                                <p class="card-text">Z世代に関するコミュニティ運営</p>
                                <ul class="font-weight-bold">
                                    <li>97会の運営</li>
                                    <li>Z世代に関する情報発信</li>
                                    <li>イベント</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card w-100 mb-4 mb-md-0">
                            <div class="card-body bg-white text-primary">
                                <h3 class="card-title">Coming Soon...</h3>
                                <p class="card-text">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 py-4 bg-white rounded">
                    <h3 class="h3 text-center text-lg mt-3 mb-5">関連会社一覧</h3>
                    <div class="row justify-content-center px-5">
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_bokuwata.png"
                                class="w-100" style="max-width: 150px;" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_ichimi.png"
                                class="w-100" style="max-width: 100px;" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_ancr.png" class="w-100"
                                alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_yoicho.png"
                                class="w-100" style="max-width: 60px;" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_nextparadigm.png"
                                class="w-100" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_beingbase.png"
                                class="w-100" style="max-width: 60px;" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_conf.png" class="w-100"
                                style="max-width: 150px;" alt="">
                        </div>
                        <div class="col-6 col-md-3 mb-5 text-center"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="members" class="py-5">
            <div class="<?php echo esc_attr( $container ); ?>">
                <h2 class="h2 mb-5 font-weight-bold text-center text-md-left icon-star">Members</h2>
                <div class="member-list row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kent.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">今瀧健登</p>
                                <p class="text-sm">僕と私と株式会社 CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_bokuwata.png"
                                    class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hinako.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">杉浦日向子</p>
                                <p class="text-sm">イチミ株式会社 CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_ichimi.png"
                                    class="w-100" style="max-width: 60px;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hayato.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">福島颯人</p>
                                <p class="text-sm">株式会社ANCR CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_ancr.png"
                                    class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keita.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">渋谷啓太</p>
                                <p class="text-sm">株式会社ness CEO</p>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryohei.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">久後諒平</p>
                                <p class="text-sm">株式会社NOPAIN CEO</p>
                            </div>
                            <div class="col-4 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayano.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">荒木彩乃</p>
                                <p class="text-sm">株式会社YOICHO CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_yoicho.png"
                                    class="w-100" style="max-width: 50px;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/takuya.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">大浴拓也</p>
                                <p class="text-sm">株式会社Next Paradigm CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_nextparadigm.png"
                                    class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubasa.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">笛田翼</p>
                                <p class="text-sm">Being BaSE株式会社 CEO</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_beingbase.png"
                                    class="w-100" style="max-width: 50px;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 px-5 mb-4">
                        <div class="border border-primary rounded overflow-hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/masato.jpg" alt="">
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <p class="text-md mb-2">霧生真斗</p>
                                <p class="text-sm">conf株式会社 代表</p>
                            </div>
                            <div class="col-4 text-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_conf.png"
                                    class="w-100" alt="">
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
                <h2 class="h2 mb-5 text-white text-center">We <span class="font-additional2">Create</span> the Next
                    Generation, with you</h2>
                <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form"]'); ?>
            </div>
        </section>

    </main><!-- #main -->

    <!-- The pagination component -->
    <?php understrap_pagination(); ?>

</div><!-- #index-wrapper -->

<?php
get_footer();