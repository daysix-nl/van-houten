<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HOME -->
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$link1 = get_field('calltoaction_link');
$link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
$link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
$link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
?>
<?php
$link2 = get_field('overons_link');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$image1 = get_field('overons_afbeelding');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>

<section class="relative h-auto aspect-video w-full lg:h-[670px] bg-white">
    <img class="w-full h-full object-cover absolute " src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        <div class="w-1/2 h-full absolute top-0 left-0  z-10 bg-gradient-to-r from-black/60 to-transparent"></div>
        <div class="container flex-col hidden lg:flex h-full  justify-center relative z-20">
            <h1 class="text-white text-60 leading-66 font-medium"><?php the_field('titel');?></h1>
            <a class="text-black text-16 leading-20 font-medium h-5 px-3 bg-white  uppercase mt-3 w-fit flex justify-center items-center rounded-3xl" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                <span class="mr-2 uppercase"><?php echo $link_text; ?></span>
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
    </section>
    <section class="bg-grey pb-5 lg:pb-10">
        <section class="lg:hidden">
            <div class="container pt-4 pb-5">
                        <h1 class="text-blue text-40 leading-46 font-medium"><?php the_field('titel');?></h1>
                        <a class="text-black text-16 leading-20 font-medium h-5 px-3 bg-white  uppercase mt-2 w-fit flex justify-center items-center rounded-3xl" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                            <span class="mr-2"><?php echo $link_text; ?></span>
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
        </section>
        <div class="container grid grid-cols-1 lg:grid-cols-2 mb-5 lg:mb-6">
            <div class="col-span-1 bg-blue px-2 py-3 lg:px-5 lg:py-4 lg:mt-[-68px] z-20 relative">
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
            <div class="col-span-1 bg-white px-2 py-3 lg:px-5 lg:py-4">
                <h3 class="text-28 leading-32 lg:text-34 lg:leading-40 font-medium text-blue"><?php the_field('calltoaction_titel');?></h3>
                <a class="mt-3  lg:mt-2 flex w-fit bg-lightBlue rounded-3xl px-2 h-5 text-white items-center justify-center text-16 leading-20 font-medium" href="<?php echo $link1_url; ?>" target="<?php echo $link_target; ?>">
                    <span class="mr-2 uppercase"><?php echo $link1_text; ?></span>
                    <svg id="Inschrijven" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                    <defs>
                        <clipPath id="clip-path">
                        <path id="Clip_2" data-name="Clip 2" d="M0,0H21.794V21.794H0Z" fill="none"/>
                        </clipPath>
                        <clipPath id="clip-path-2">
                        <path id="Clip_5" data-name="Clip 5" d="M0,0H7.317V7.317H0Z" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Group_3" data-name="Group 3" transform="translate(2.206)">
                        <path id="Clip_2-2" data-name="Clip 2" d="M0,0H21.794V21.794H0Z" fill="none"/>
                        <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                        <path id="Fill_1" data-name="Fill 1" d="M4.11,21.794A.994.994,0,0,1,3.4,21.5L.293,18.39a1,1,0,0,1,0-1.414L16.975.293A1,1,0,0,1,17.683,0a1.011,1.011,0,0,1,.707.293L21.5,3.406a1,1,0,0,1,0,1.415L4.817,21.5A1,1,0,0,1,4.11,21.794ZM17.683,2.415h0L2.414,17.683l1.7,1.7L19.381,4.113l-1.7-1.7Z" transform="translate(0 0)" fill="#01adff"/>
                        </g>
                    </g>
                    <g id="Group_6" data-name="Group 6" transform="translate(0 16.683)">
                        <path id="Clip_5-2" data-name="Clip 5" d="M0,0H7.317V7.317H0Z" fill="none"/>
                        <g id="Group_6-2" data-name="Group 6" clip-path="url(#clip-path-2)">
                        <path id="Fill_4" data-name="Fill 4" d="M1,7.317A1,1,0,0,1,.076,5.934L2.282.616a1,1,0,0,1,1.848.767L2.851,4.466,5.933,3.187A1,1,0,0,1,6.7,5.035L1.383,7.241A1.006,1.006,0,0,1,1,7.317" transform="translate(0)" fill="#01adff"/>
                        </g>
                    </g>
                    <path id="Fill_7" data-name="Fill 7" d="M4.056,5.056a1,1,0,0,1-.707-.293L.292,1.707A1,1,0,0,1,1.707.292L4.762,3.349a1,1,0,0,1-.707,1.707" transform="translate(15.944 2.944)" fill="#01adff"/>
                    <path id="Fill_9" data-name="Fill 9" d="M13,2H1A1,1,0,0,1,1,0H13a1,1,0,0,1,0,2" transform="translate(8 22)" fill="#01adff"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="col-span-1 flex justify-center flex-col">
                <div>
                    <h3 class="text-blue font-medium text-34 leadimg-36"><?php the_field('overons_titel');?></h3>
                    <p class="max-w-[487px] text-16 leading-26 mb-3 mt-1 text-blue"><?php the_field('overons_tekst');?></p>
                    <a class="mt-[34px] flex w-fit bg-lightBlue rounded-3xl px-2 h-5 text-white items-center justify-center text-16 leading-20 font-medium" href="<?php echo $link2_url; ?>" target="<?php echo $link2_target; ?>">
                        <span class="mr-2 uppercase"><?php echo $link2_text; ?></span>
                            <svg id="Pijl" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="14" viewBox="0 0 24 14">
                            <defs>
                                <clipPath id="clip-path">
                                <path id="Clip_2" data-name="Clip 2" d="M0,0H8V14H0Z" fill="none"/>
                                </clipPath>
                            </defs>
                            <g id="Group_3" data-name="Group 3" transform="translate(16)">
                                <path id="Clip_2-2" data-name="Clip 2" d="M0,0H8V14H0Z" fill="none"/>
                                <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                                <path id="Fill_1" data-name="Fill 1" d="M1,14a1,1,0,0,1-.707-1.707L5.586,7,.293,1.707A1,1,0,0,1,1.707.293l6,6a1,1,0,0,1,0,1.414l-6,6A1,1,0,0,1,1,14" transform="translate(0 0)" fill="#01adff"/>
                                </g>
                            </g>
                            <path id="Fill_4" data-name="Fill 4" d="M23,2H1A1,1,0,0,1,1,0H23a1,1,0,0,1,0,2" transform="translate(0 6)" fill="#01adff"/>
                            </svg>
                    </a>    
                </div>
            </div>
            <div class="col-span-1 hidden lg:block">
                <img class="w-full h-full object-cover" src="<?php echo $image1_url; ?>" alt="<?php echo $image_alt; ?>">
            </div>
        </div>
    </section>
     <img class="w-full h-full object-cover lg:hidden" src="<?php echo $image1_url; ?>" alt="<?php echo $image_alt; ?>">
    <section class="py-5 lg:pt-4 lg:pb-6 bg-white">
        <div class="container flex justify-center flex-col">
            <h3 class="text-blue font-medium text-34 leadimg-36 text-left lg:text-center mb-2 lg:mb-2 flex lg:justify-center"><?php the_field('behandelingen_titel');?></h3>
            <div class="flex space-y-2 lg:space-y-0 lg:space-x-2 flex-col lg:flex-row lg:mx-auto">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'behandeling',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <a class="flex w-fit bg-grey rounded-3xl px-2 h-5 text-blue items-center justify-center text-16 leading-20 font-medium" href="<?php the_permalink();?>">
                    <span class="mr-2 uppercase"><?php the_title();?></span>
                    <svg id="Pijl" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="14" viewBox="0 0 24 14">
                    <defs>
                        <clipPath id="clip-path">
                        <path id="Clip_2" data-name="Clip 2" d="M0,0H8V14H0Z" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Group_3" data-name="Group 3" transform="translate(16)">
                        <path id="Clip_2-2" data-name="Clip 2" d="M0,0H8V14H0Z" fill="none"/>
                        <g id="Group_3-2" data-name="Group 3" clip-path="url(#clip-path)">
                        <path id="Fill_1" data-name="Fill 1" d="M1,14a1,1,0,0,1-.707-1.707L5.586,7,.293,1.707A1,1,0,0,1,1.707.293l6,6a1,1,0,0,1,0,1.414l-6,6A1,1,0,0,1,1,14" transform="translate(0 0)" fill="#01adff"/>
                        </g>
                    </g>
                    <path id="Fill_4" data-name="Fill 4" d="M23,2H1A1,1,0,0,1,1,0H23a1,1,0,0,1,0,2" transform="translate(0 6)" fill="#01adff"/>
                    </svg>
                </a>    
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
