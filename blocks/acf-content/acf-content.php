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
        <div class="col-span-1 lg:col-span-2 mt-3 lg:mt-0">
            <div class="mb-3">
                <h2 class="text-34 leading-40 text-blue max-w-[530px] font-medium mb-2 hidden lg:block"><?php the_field('content_titel');?></h2>
                <div class="text-16 leading-26 text-blue text-editor"><?php the_field('content_tekst');?></div>
               
            </div>
            
           
        </div>
    </div>
</section>
<?php endif; ?>
