<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer>
    <section class="bg-blue py-4">
        <div class="container grid grid-cols-2  lg:grid-cols-4 gap-3">
            <div class="col-span-1">
                <h4 class="text-lightBlue text-14 lg:text-14 leading-26 font-bold uppercase">INFORMATIE</h4>
                <nav class="mt-1 flex flex-col">
                    <?php
                    if( have_rows('footer_menu_repeater', 'option') ):
                        while( have_rows('footer_menu_repeater', 'option') ) : the_row(); ?>
                        <?php
                        $link = get_sub_field('menu_item', 'option');
                        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                        <a class="text-white text-14 lg:text-14 leading-26" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </nav>
            </div>
            <div class="col-span-1">
                <h4 class="text-lightBlue text-14 lg:text-14 leading-26 font-bold uppercase"><?php the_field('menu_item_3', 'option');?></h4>
                <nav class="mt-1 flex flex-col">
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
                    <a class="text-white text-14 lg:text-14 leading-26" href="<?php the_permalink();?>"><?php the_title();?></a>
                    <?php endwhile; wp_reset_query(); ?>
                </nav>
            </div>
            <div class="col-span-1">
                <h4 class="text-lightBlue text-14 lg:text-14 leading-26 font-bold uppercase">ADRES</h4>
                <div class="mt-1 flex flex-col">
                    <p  class="text-white text-14 lg:text-14 leading-26">Eger 36</p>
                    <p  class="text-white text-14 lg:text-14 leading-26">1423 GE Uithoorn</p>
                    <a  class="text-white text-14 lg:text-14 leading-26 mt-2" href="tel:0297561953">0297-561953</a>
                    <p  class="text-white text-14 lg:text-14 leading-26">(bereikbaar van 08:30-12:30)</p>
                </div>
            </div>
            <div class="col-span-1">
                <h4 class="text-lightBlue text-14 lg:text-14 leading-26 font-bold uppercase">SPOEDGEVALLEN?</h4>
                <div class="mt-1 flex flex-col">
                    <p class="text-white text-14 lg:text-14 leading-26">Voor spoedgevallen buiten onze openingstijden kunt u contact opnemen met het Tandarts Bemiddelingsbureau Amsterdam via <a href="tel:020 3034500">020 3034500</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lightBlue h-10 lg:h-5">
        <div class="container grid grid-cols-1 lg:grid-cols-2 h-full content-center">
            <div class="col-span-1">
                <p  class="text-white text-13  lg:text-14 leading-26">© <?= date("Y") ?>. P. van Houten Tandheelkundig Centrum Uithoorn</p>
            </div>
            <div class="col-span-1">
                <a href="/privacyverklaring" class="text-white text-13  lg:text-14 leading-26">Privacyverklaring</a>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
