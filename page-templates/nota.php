<?php
/**
 * Template name: Nota
 */


 get_header(); ?>

    <main>
        <section class="relative aspect-video w-full h-10 lg:h-[210px]">
            <img class="w-full h-full object-cover absolute" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
            <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
            <div class="container flex-col h-full  justify-center relative z-20 flex">
                <h1 class="text-white text-34 leading-34 lg:text-60 lg:leading-66 font-medium">Nota</h1>
            </div>
        </section>
        <section class="hidden lg:block">
            <div class="text-14 leadimg-26 text-blue container mt-1 mb-5"><a href="/">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="#">Nota</a></div>
        </section>
        <section class="mb-4 lg:pb-10"> 
            <div class="container grid grid-cols-1 lg:grid-cols-3 lg:gap-5">
                <div class="col-span-1 lg:hidden">
                    <h2 class="text-28 leading-32 text-blue max-w-[530px] mb-1 mt-4 font-medium">Hier komt een sprekende koptekst te staan over rekeningen</h2>
                </div>
                <div class="col-span-1">
                    <img class="w-full aspect-[131/100] object-cover" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
                </div>
                <div class="col-span-1 lg:col-span-2 mt-3 lg:mt-0">
                    <div class="mb-3">
                        <h2 class="text-34 leading-40 text-blue max-w-[530px]  font-medium mb-2 hidden lg:block">Hier komt een sprekende koptekst te staan over rekeningen</h2>
                        <p class="text-16 leading-26 text-blue mb-2">Onze facturering verloopt via Uwnota.nl. Het versturen en innen van rekeningen is hun vak en zij nemen dat werk voor ons uit handen. Zo hebben wij meer tijd voor onze zorgverlening, kortom, meer tijd voor u.</p>
                        <p class="text-16 leading-26 text-blue">Uwnota.nl stuurt u de nota. U betaalt de nota op rekeningnummer 43.13.36.745 tnv Derdengelden Infomedics. Als u voor tandheelkunde (en orthodontie) verzekerd bent stuurt u de nota door aan uw verzekeraar om het te vergoeden deel terug te krijgen.</p>
                    </div>
                    <div class="mb-3">
                        <h3 class="text-24 leading-36 text-blue max-w-[530px]  font-medium mb-2">Heeft u vragen over de nota?</h3>
                        <p class="text-16 leading-26 text-blue">Bel tijdens kantooruren met Infomedics, telefoon: 0900 4049404 (10ct p min) of kijk op <a class="text-lightBlue" href="www.uwnota.nl">www.uwnota.nl</a></p>
                    </div>
                    <div class="mb-4 lg:mb-5">
                        <h3 class="text-24 leading-36 text-blue max-w-[530px]  font-medium mb-2">Tarieven?</h3>
                        <p class="text-16 leading-26 text-blue">Voor een overzicht van onze tarieven kunt u <a class="text-lightBlue" href="">hier</a> terecht</p>
                    </div>
                    <div class="bg-grey px-2 py-3 lg:px-5 lg:py-4">
                        <h4 class="text-28 leading-32 lg:text-34 lg:leading-40 text-blue  font-medium mb-1">Wilt u een afspraak maken? Bel dan met onze praktijk.</h4>
                        <p class="text-16 leading-26 text-blue mb-2">Wij zijn iedere werkdag telefonisch bereikbaar van 08:30 tot 12:30. Let op u kunt GEEN afspraken maken en/of afzeggen per e-mail.</p>
                        <a class="text-white text-16 leading-20 font-medium h-5 px-3 bg-lightBlue  uppercase mt-4 w-fit flex justify-center items-center rounded-3xl" href="">
                            <span class="mr-2"n>MAAK EEN AFSPRAAK</span>
                            <svg id="Afspraak" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23.961" height="24" viewBox="0 0 23.961 24">
                            <defs>
                                <clipPath id="clip-path">
                                <path id="Clip_2" data-name="Clip 2" d="M0,0H23.961V24H0Z" fill="none"/>
                                </clipPath>
                            </defs>
                            <path id="Clip_2-2" data-name="Clip 2" d="M0,0H23.961V24H0Z" fill="none"/>
                            <g id="Afspraak-2" data-name="Afspraak" clip-path="url(#clip-path)">
                                <path id="Fill_1" data-name="Fill 1" d="M4.65,24a1,1,0,0,1-.66-.248l-3.3-2.9C-.691,19.47.261,16.908,1.3,15A36.149,36.149,0,0,1,7.362,7.29C11.788,2.861,16.328,0,18.93,0a2.469,2.469,0,0,1,1.816.675L23.709,4a1,1,0,0,1-.093,1.418l-5,4.335a1,1,0,0,1-1.1.139L14.159,8.218,8.177,14.2l1.679,3.354a1,1,0,0,1-.137,1.1l-4.311,5A1,1,0,0,1,4.72,24ZM18.93,2C17.215,2,13.176,4.3,8.776,8.7,3.12,14.354,1.468,18.8,2.039,19.376l2.514,2.208,3.216-3.73-1.7-3.4a1,1,0,0,1,.187-1.155l7-7a1,1,0,0,1,1.156-.186l3.4,1.7,3.73-3.235L19.354,2.112A.639.639,0,0,0,18.93,2Z" transform="translate(0 -0.001)" fill="#01adff"/>
                            </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>