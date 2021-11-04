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
                        私たちは、サラダを売るだけの外食企業ではありません。届けていくのは、CRISPらしいレストラン体験です。創業当時は、とにかく素敵なお客様と仲間に囲まれた良いお店をつくりたい、という想いを込めてCRISP SALAD WORKS1号店を開業しました。その想いは変わりませんが、今では私たちのやりたいことはもっともっと⼤きく、外⾷のビジネスモデルを180度ひっくり返すような「新しい外⾷」を⽬指しています。私たちは、飲食にテクノロジーの力を取り入れて、オンラインでもオフラインでも、あらゆる場所で人と人とのリアルなつながりが感じられるレストラン体験をつくっていきます。自分たちが信じるものに手を抜かずに、 仲間に、商品に、お店に、そしてお客様に愛情をもって本気で向き合いながら。日本の外食のあり方を変え、世の中を変える。私たちCRISPは、共に働くパートナーとお店を愛するファンと一緒に、飲食の未来をもっと面白くしていきます。（CRISPのこんな感じのテキスト入れたい）</p>
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
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kent1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kent2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">僕と私と株式会社 CEO</p>
                            <p class="text-md">今瀧健登</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hinako1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hinako2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">イチミ株式会社 CEO</p>
                            <p class="text-md">杉浦日向子</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hayato1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hayato2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社ANCR CEO</p>
                            <p class="text-md">福島颯人</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keita1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keita2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社ness CEO</p>
                            <p class="text-md">渋谷啓太</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryohei1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ryohei2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社NOPAIN CEO</p>
                            <p class="text-md">久後諒平</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayano1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayano2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社YOICHO CEO</p>
                            <p class="text-md">荒木彩乃</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/takuya1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/takuya2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社Next Paradigm CEO</p>
                            <p class="text-md">大浴拓也</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiroko1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiroko2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">株式会社TAWO CEO</p>
                            <p class="text-md">阿部洋子</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubasa1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubasa2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">Being BaSE株式会社 CEO</p>
                            <p class="text-md">笛田翼</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="flipped-profile">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/masato1.jpg" class="front" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/masato2.jpg" class="flipped" alt="">
                        </div>
                        <div class="text-center my-3">
                            <p class="text-sm mb-2">conf合同会社 CEO</p>
                            <p class="text-md">霧生真斗</p>
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