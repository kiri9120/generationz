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

<div class="wrapper" id="index-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <main class="site-main" id="main">
            <section id="mission" class="py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="slashed-wrapper text-center mb-5">
                            <h2 class="slashed">
                                <div class="top" title="MISSION"></div>
                                <div class="bot" title="MISSION"></div>
                            </h2>
                        </div>
                        <p class="display-4 lh-xl font-weight-bold">
                            テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        </p>
                    </div>
                </div>
            </section>
            <section id="founder" class="py-5">
                <!-- <h2 class="h2 text-center mb-5">Partner</h2> -->
                <div class="slashed-wrapper text-center mb-5">
                    <h2 class="slashed">
                        <div class="top" title="FOUNDER"></div>
                        <div class="bot" title="FOUNDER"></div>
                    </h2>
                </div>
                <div class="founder-list row justify-content-between text-center">
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">僕と私と株式会社 CEO</p>
                            <p class="text-md">今瀧健登</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">イチミ株式会社 CEO</p>
                            <p class="text-md">杉浦日向子</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社ANCR CEO</p>
                            <p class="text-md">福島颯人</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社ness CEO</p>
                            <p class="text-md">渋谷啓太</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社NOPAIN CEO</p>
                            <p class="text-md">久後諒平</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社YOICHO CEO</p>
                            <p class="text-md">荒木彩乃</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社Next Paradigm CEO</p>
                            <p class="text-md">大浴拓也</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社TAWO CEO</p>
                            <p class="text-md">阿部洋子</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">Being BaSE株式会社 CEO</p>
                            <p class="text-md">笛田翼</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">conf合同会社</p>
                            <p class="text-md">霧生真斗</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sponsor" class="py-5">
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
            </section>
            <section id="contact" class="pt-5">
                <div class="slashed-wrapper text-center mb-5">
                    <h2 class="slashed">
                        <div class="top" title="CONTACT"></div>
                        <div class="bot" title="CONTACT"></div>
                    </h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form"]'); ?>
            </section>

        </main><!-- #main -->

        <!-- The pagination component -->
        <?php understrap_pagination(); ?>

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();