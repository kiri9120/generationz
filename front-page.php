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
            <section class="text-center py-5">
                <h2 class="h2 mb-4">メッセージが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section>
            <section class="py-5">
                <h2 class="h2 text-center mb-5">Partner</h2>
                <div class="row justify-content-between text-center">
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 pb-4">
                        <img src="https://placehold.jp/200x200.png" alt="">
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">〇〇株式会社 CEO</p>
                            <p class="text-md">名前</p>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- #main -->

        <!-- The pagination component -->
        <?php understrap_pagination(); ?>

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();