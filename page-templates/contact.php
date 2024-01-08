<?php
/**
 * Template name: Contact
 */


 get_header(); ?>

 <main>
    <section class="relative aspect-video w-full h-10 lg:h-[210px]">
        <img class="w-full h-full object-cover absolute" src="<?php echo get_template_directory_uri(); ?>/img/local/hero-image.png" alt="">
        <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
        <div class="container flex-col h-full  justify-center relative z-20 flex">
            <h1 class="text-white text-34 leading-34 lg:text-60 lg:leading-66 font-medium">Contact</h1>
        </div>
    </section>
    <section class="hidden lg:block">
        <div class="text-14 leadimg-26 text-blue container mt-1 mb-5"><a href="/">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="#">Contact</a></div>
    </section>
    <section>
        <div class="container grid grid-cols-1 lg:grid-cols-2 mt-4 lg:mt-0">
            <div class="col-span-1">
                <div class="bg-grey px-2 py-3 lg:px-5 lg:py-4">
                    <h3 class="text-34 leading-40 font-medium text-blue mb-2">Adres en contact</h3>
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
                    <p class="text-16 leading-26 text-blue">Wij zijn iedere werkdag telefonisch bereikbaar van 08:30 tot 12:30. Let op u kunt GEEN afspraken maken en/of afzeggen per e-mail.</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="bg-blue px-2 py-3 lg:px-5 lg:py-4 h-full">
                <h3 class="text-34 leading-40 font-medium text-white mb-2">Openingstijden</h3>
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
                            <span class="h-3 bg-lightBlue text-white flex justify-center items-center text-12 leading-12 lg:text-14 lg:leading-14 px-1 rounded-3xl">08:00-12:30</span>
                        </div>
                    </div>  
                </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container grid grid-cols-1 lg:grid-cols-2 pt-5 pb-4">
            <div class="col-span-1">
                <div class="pb-5">
                    <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2 max-w-[300px]">Afspraak verzetten of annuleren</h3>
                    <p class="max-w-[503px] text-16 leading-26 text-blue mb-2">Onze facturering verloopt via Uwnota.nl. Het versturen en innen van rekeningen is hun vak en zij nemen dat werk voor ons uit handen. Zo hebben wij meer tijd voor onze zorgverlening, kortom, meer tijd voor u.</p>
                    <p class="max-w-[503px] text-16 leading-26 text-blue">Uwnota.nl stuurt u de nota. U betaalt de nota op rekeningnummer 43.13.36.745 tnv Derdengelden Infomedics. Als u voor tandheelkunde (en orthodontie) verzekerd bent stuurt u de nota door aan uw verzekeraar om het te vergoeden deel terug te krijgen.</p>
                </div>
                <div class="mb-5 lg:mb-0">
                    <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2">Patiëntenfolders</h3>
                    <p class="max-w-[503px] text-16 leading-26 text-blue">Wilt u meer weten over onze behandelingen? Download dan <a class="text-lightBlue" href="https://ivorenkruis.org/folders/">hier</a> gratis de patiëntenfolders van het Ivoren Kruis.</p>
                </div>
            </div>
            <div class="col-span-1">
                    <h3 class="text-34 leading-40 font-medium text-blue mb-1 lg:mb-2 max-w-[280px]">Weekenddienst/ avonddienstregeling</h3>
                    <p class="max-w-[503px] text-16 leading-26 text-blue mb-2">De weekenddienst start op vrijdagmiddag 12:30. De avonddienst op 17:30. Bij ernstige pijnklachten kunt u contact opnemen met het Tandarts Bemiddelings Bureau te Amsterdam via <a href="tel:020 3034500">020 3034500</a> of <a href="tel:0900 821 22 30">0900 821 22 30</a>.  Deze nummers zijn 24 uur per dag, 7 dagen per week bereikbaar.</p>
                    <p class="max-w-[503px] text-16 leading-26 text-blue">Het is niet de bedoeling daar gebruik van te maken voor problemen die tijdens de normale praktijkuren kunnen worden behandeld. Er is sprake van een “spoedeisende situatie” als het verlenen van hulp redelijkerwijs niet kan worden uitgesteld. Het gaat dan bijvoorbeeld om een ongeval, een nabloeding of zeer ernstige kiespijn. Het TBB neemt voor u contact op met de dienstdoende tandarts en zorgt verder voor een goede afhandeling. Orthopatiënten met ernstige problemen worden indien mogelijk naar onze eigen praktijk verwezen.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-10">
            <div class="bg-lightBlue grid grid-cols-1 lg:grid-cols-2 lg:pt-[45px] lg:pb-[35px] p-3 lg:px-5">
                <h3 class="text-34 leading-40 font-medium text-white col-span-1 mb-1 lg:mb-0">Heeft u een spoedgeval?</h3>
                <p class="col-span-1 text-16 leading-26 text-white max-w-[503px]">Bij spoedgevallen buiten onze telefonische bereikbaarheid om kunt u contact opnemen het Tandarts Bemiddelingsbureau Amsterdam via 020 3034500</p>
            </div>
        </div>
    </section>
 </main>

 <?php get_footer(); ?>