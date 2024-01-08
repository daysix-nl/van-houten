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
<?php
$image1 = get_field('content_afbeelding');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$link = get_field('calltoaction_link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- NOTA -->
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
<section class="mb-4 lg:pb-10 bg-white"> 
    <div class="container grid grid-cols-1 lg:grid-cols-3 lg:gap-5">
        <div class="col-span-1 lg:hidden">
            <h2 class="text-28 leading-32 text-blue max-w-[530px] mb-1 mt-4 font-medium"><?php the_field('content_titel');?></h2>
        </div>
        <div class="col-span-1">
            <img class="w-full aspect-[131/100] object-cover" src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>">
        </div>
        <div class="col-span-1 lg:col-span-2 mt-3 lg:mt-0">
            <div class="mb-3">
                <h2 class="text-34 leading-40 text-blue max-w-[530px] font-medium mb-2 hidden lg:block"><?php the_field('content_titel');?></h2>
                <div class="text-16 leading-26 text-blue text-editor"><?php the_field('content_tekst');?></div>
               
            </div>
            
            <div class="bg-grey px-2 py-3 lg:px-5 lg:py-4">
                <h4 class="text-28 leading-32 lg:text-34 lg:leading-40 text-blue  font-medium mb-1"><?php the_field('calltoaction_titel');?></h4>
                <p class="text-16 leading-26 text-blue mb-2"><?php the_field('calltoaction_tekst');?></p>
                <a class="text-white text-16 leading-20 font-medium h-5 px-3 bg-lightBlue  uppercase mt-4 w-fit flex justify-center items-center rounded-3xl" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
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
        </div>
    </div>
</section>
<?php endif; ?>
