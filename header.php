<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block' ); ?>>

    <header class="h-6 lg:h-[90px] flex items-center">
        <div class="container flex justify-between items-center">
            <div>
                <a href="/" class="hover:opacity-100">
                    <img class="w-full max-w-[134px] lg:max-w-[216px] opacity-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/img/local/logo.png" alt="logo">
                </a>
            </div>
            <nav class="space-x-5  items-center hidden lg:flex">
                <a class="uppercase text-16 font-medium leading-20 text-blue" href="/">Home</a>
                <a class="uppercase text-16 font-medium leading-20 text-blue" href="/over-ons">Over ons</a>
                <div class="relative hover-dropdown">
                    <button class="uppercase text-16 font-medium leading-20 text-blue flex space-x-[15px] items-center">
                        <span>BEHANDELINGEN </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10">
                            <path id="Fill_1" data-name="Fill 1" d="M.9,0,0,1.07,7.8,7.5,0,13.93.9,15,10,7.5Z" transform="translate(15) rotate(90)" fill="#34848f"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden bg-white pt-5 px-2 pb-[20px]">
                        <?php
                            $loop = new WP_Query( array(
                                'post_type' => 'behandeling',
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order' => 'ASC'
                            )
                            );
                            ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                        <li><a class=" block whitespace-no-wrap text-16 leading-30 text-blue" href="<?php the_permalink();?>"><?php the_title();?></a></li>
                        <?php endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
                <a class="uppercase text-16 font-medium leading-20 text-blue" href="/nota">NOTA</a>
                <a class="uppercase text-16 font-medium leading-20 text-white h-4 w-[123px] bg-lightBlue rounded-3xl flex justify-center items-center" href="/contact">CONTACT</a>

            </nav>
            <button class="lg:hidden button-hamburger">
                <svg id="Group_2" data-name="Group 2" xmlns="http://www.w3.org/2000/svg" width="29" height="14" viewBox="0 0 29 14">
                    <rect id="Rectangle" width="29" height="2" fill="#021959"/>
                    <rect id="Rectangle_Copy" data-name="Rectangle Copy" width="29" height="2" transform="translate(0 6)" fill="#021959"/>
                    <rect id="Rectangle_Copy_2" data-name="Rectangle Copy 2" width="29" height="2" transform="translate(0 12)" fill="#021959"/>
                </svg>
                <svg id="Group" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <rect id="Rectangle" width="29.168" height="1.945" transform="translate(1.375 0) rotate(45)" fill="#021959"/>
                    <rect id="Rectangle_Copy_3" data-name="Rectangle Copy 3" width="29.168" height="1.945" transform="translate(0 20.625) rotate(-45)" fill="#021959"/>
                </svg>
            </button>
        </div>
    </header>

    <div class="menu w-sreen h-[100dvh] bg-white pt-7 px-2 flex flex-col w-full z-50">
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/">HOME</a>
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/over-ons">OVER ONS</a>
        <div class="accordion-item"> 
            <button class="text-30 leading-60 font-medium text-blue uppercase flex text-start accordion">BEHANDELINGEN</button>
            <div class="panel overflow-hidden h-0 ">
                <div class="pb-3 pl-2 flex flex-col">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'behandeling',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        )
                        );
                        ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <a class="text-blue text-22 leading-36" href="<?php the_permalink();?>"><?php the_title();?></a>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <a  class="text-30 leading-60 font-medium text-blue uppercase"href="/nota">NOTA</a>
        <a class="text-30 leading-60 font-medium text-blue uppercase" href="/contact">CONTACT</a>
    </div>

