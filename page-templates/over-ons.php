<?php
/**
 * Template name: Over ons
 */


 get_header(); ?>

 <main>
    <section class="relative aspect-video w-full h-10 lg:h-[210px]">
        <img class="w-full h-full object-cover absolute" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
        <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
        <div class="container flex-col hidden lg:flex h-full  justify-center relative z-20">
            <h1 class="text-white text-60 leading-66 font-medium">Over ons</h1>
        </div>
    </section>
    <section class="hidden lg:block">
        <div class="text-14 leadimg-26 text-blue container mt-1 mb-5"><a href="/">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="">Over ons</a></div>
    </section>
    <section>
        <div class="container grid grid-cols-1 lg:grid-cols-3 pt-4 lg:pt-0">
            <div class="col-span-1 bg-blue p-3 lg:p-4 z-20 relative">
                <h3 class="text-34 leading-40 font-medium text-white mb-1">De praktijk</h3>
                <p class="text-16 leading-26 text-white mb-3">Wij zijn geopend van maandag t/m vrijdag.</p>
                <div class="grid grid-cols-1">
                    <div class="col-span-1">
                        <p class="text-white font-medium leading-30">Maandag</p>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-1 mb-[15px]">
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
                    <div class="col-span-2 grid grid-cols-3 gap-1  mb-[15px]">
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
                    <div class="col-span-2 grid grid-cols-3 gap-1 ">
                        <div class="col-span-1">
                            <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">08:00-12:30</span>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-span-1 lg:col-span-2 order-first lg:order-last">
                <img src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
            </div>
        </div>
    </section>
    <section class="py-6 lg:py-6">
            <div class="container">
                <h3 class="lg:text-center text-blue text-34 leading-36 lg:leading-40 font-medium pb-1 lg:pb-3">Ons team</h3>
            </div>
            <div class="container grid grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2 lg:gap-y-5">
                <div class="col-span-1">
                    <img class="w-full pb-1 aspect-[15/14] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
                    <h4 class="text-blue font-medium text-16 leading-26 lg:text-24 lg:leading-36">Peter van Houten</h4>
                    <p class="lg:pt-[5px] text-14 tleading-16 lg:text-16 lg:leading-26 text-blue">Tandarts</p>
                </div>
                <div class="col-span-1">
                    <img class="w-full pb-1 aspect-[15/14] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
                    <h4 class="text-blue font-medium text-16 leading-26 lg:text-24 lg:leading-36">Peter van Houten</h4>
                    <p class="lg:pt-[5px] text-14 tleading-16 lg:text-16 lg:leading-26 text-blue">Tandarts</p>
                </div>
               <div class="col-span-1">
                    <img class="w-full pb-1 aspect-[15/14] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
                    <h4 class="text-blue font-medium text-16 leading-26 lg:text-24 lg:leading-36">Peter van Houten</h4>
                    <p class="lg:pt-[5px] text-14 tleading-16 lg:text-16 lg:leading-26 text-blue">Tandarts</p>
                </div>
            </div>
    </section>
 </main>

 <?php get_footer(''); ?>