<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CONTACT -->
 <section class="relative aspect-video w-full h-10 lg:h-[210px] bg-white">
    <img class="w-full h-full object-cover absolute" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
    <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
    <div class="container flex-col h-full  justify-center relative z-20 flex">
        <h1 class="text-white text-34 leading-34 lg:text-60 lg:leading-66 font-medium"><?php the_title();?></h1>
    </div>
</section>
<section class="hidden lg:block bg-white">
    <div class="text-14 leadimg-26 text-blue container pt-1 pb-5"><a href="/">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="#"><?php the_title();?></a></div>
</section>
<section class="bg-white">
    <div class="container grid grid-cols-1 lg:grid-cols-2 mt-4 lg:mt-0">
        <div class="col-span-1">
            <div class="bg-grey px-2 py-3 lg:px-5 lg:py-4">
                <h3 class="text-34 leading-40 font-medium text-blue mb-2"><?php the_field('contact_titel');?></h3>
                <p class="text-16 leading-26 text-blue font-medium">Tandartspraktijk Peter van Houten</p>
                <p class="text-16 leading-26 text-blue font-medium">Eger 36</p>
                <p class="text-16 leading-26 text-blue font-medium">1423 GE Uithoorn</p>
                <div class="mb-[25px] mt-1 gap-1 flex flex-wrap">
                    <a class="" href="tel:0297561953">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl w-fit">0297-561953</span>
                    </a>
                    <a class="" href="mailto:tandartspetervanhouten@prodsl.nl">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl w-fit">tandartspetervanhouten@prodsl.nl</span>
                    </a>
                </div>
                <p class="text-16 leading-26 text-blue"><?php the_field('contact_tekst');?></p>
            </div>
        </div>
        <div class="col-span-1">
            <div class="bg-blue px-2 py-3 lg:px-5 lg:py-4 h-full">
            <h3 class="text-34 leading-40 font-medium text-white mb-2"><?php the_field('openingstijden_titel');?></h3>
            <div class="grid grid-cols-2 lg:grid-cols-3 lg:gap-y-[15px]">
                <div class="col-span-1">
                    <p class="text-white font-medium leading-30">Maandag</p>
                </div>
                <div class="col-span-2 grid grid-cols-3 gap-1">
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">08:00-12:30</span>
                    </div>
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">13:30-17:10</span>
                    </div>
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">18:00-21:00</span>
                    </div>
                </div>  
                <div class="col-span-1 mt-[15px] lg:mt-0">
                    <p class="text-white font-medium leading-30">Dinsdag t/m do.</p>
                </div>
                <div class="col-span-2 grid grid-cols-3 gap-1">
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">08:00-12:30</span>
                    </div>
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">13:30-17:10</span>
                    </div>
                </div>  
                <div class="col-span-1 mt-[15px] lg:mt-0">
                    <p class="text-white font-medium leading-30">Vrijdag</p>
                </div>
                <div class="col-span-2 grid grid-cols-3 gap-1">
                    <div class="col-span-1">
                        <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">08:00-14:00</span>
                    </div>
                </div>  
            </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container grid grid-cols-1 lg:grid-cols-2 pt-5 pb-4">
        <div class="col-span-1">
            <div class="pb-5">
                <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2 max-w-[300px]"><?php the_field('titel_alinea_1');?></h3>
                <div class="max-w-[503px] text-16 leading-26 text-blue text-editor"><?php the_field('tekst_alinea_1');?></div>
            </div>
            <div class="mb-5 lg:mb-0">
                <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2 max-w-[300px]"><?php the_field('titel_alinea_2');?></h3>
                <div class="max-w-[503px] text-16 leading-26 text-blue text-editor"><?php the_field('tekst_alinea_2');?></div>
            </div>
        </div>
        <div class="col-span-1">
                <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2 max-w-[300px]"><?php the_field('titel_alinea_3');?></h3>
                <div class="max-w-[503px] text-16 leading-26 text-blue text-editor"><?php the_field('tekst_alinea_3');?></div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container mb-10">
        <div class="bg-lightBlue grid grid-cols-1 lg:grid-cols-2 lg:pt-[45px] lg:pb-[35px] p-3 lg:px-5">
            <h3 class="text-34 leading-40 font-medium text-white col-span-1 mb-1 lg:mb-0"><?php the_field('speod_titel');?></h3>
            <p class="col-span-1 text-16 leading-26 text-white max-w-[503px]"><?php the_field('spoed_tekst');?></p>
        </div>
    </div>
</section>
<?php endif; ?>
