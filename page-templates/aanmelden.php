<?php
/**
 * Template name: Aanmelden
 */


 get_header(); ?>

    <main>
        <section class="relative aspect-video w-full h-10 lg:h-[210px]">
            <img class="w-full h-full object-cover absolute" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
            <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
            <div class="container flex-col h-full  justify-center relative z-20 flex">
                <h1 class="text-white text-34 leading-34 lg:text-60 lg:leading-66 font-medium">Aanmelden</h1>
            </div>
        </section>
        <section class="hidden lg:block">
            <div class="text-14 leadimg-26 text-blue container mt-1 mb-5"><a href="/">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="#">Contact</a></div>
        </section>
        <section class="mb-4 lg:pb-10"> 
            <div class="container grid grid-cols-1 lg:grid-cols-3 lg:gap-5">
                <div class="col-span-1 lg:hidden">
                    <h2 class="text-28 leading-32 text-blue max-w-[530px] mb-1 mt-4 font-medium">Hier komt een sprekende koptekst te staan over rekeningen</h2>
                </div>
                <div class="col-span-1">
                    <img class="w-full aspect-[131/100] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
                </div>
                <div class="col-span-1 lg:col-span-2 space-y-2">
                    <h2 class="text-34 leading-40 text-blue max-w-[530px] hidden lg:block font-medium ">Hier komt een sprekende koptekst te staan over rekeningen</h2>
                    <p class="text-16 leading-26 text-blue">Wij nemen nieuwe patienten aan voor zowel tandheelkundige behandelingen, orthodontie, mondhygiëne en het bleken van tanden.</p>
                    <p class="text-16 leading-26 text-blue">U kunt zich aanmelden door een inschrijfformulier op te halen (en in te vullen) bij onze praktijk, of u kunt uw gegevens doorgeven middels onderstaande formulier. Het verwerken van uw gegevens duurt +/- 5 werkdagen. Na deze termijn dient u ZELF contact met ons op te nemen voor het maken van uw eerste afspraak.</p>
                    <p class="text-16 leading-26 text-blue">Wij gebruiken onderstaande gegevens alleen om u aan te melden als patiënt in onze praktijk & het versturen van eventuele herinneringen bij gemaakte afspraken.</p>
                    <p class="text-16 leading-26 text-blue">U dient per persoon 1 formulier in te vullen.</p>
                    <div class="">
                        <h3 class="text-24 leading-36 text-blue font-medium mt-3 lg:mt-0">Persoonlijke gegevens</h3>
                        <div class="h-[1px] bg-blue w-full mb-[35px]"></div>
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>