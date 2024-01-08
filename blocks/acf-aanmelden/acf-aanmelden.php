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
<!-- AANMELDEN -->
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
        <div class="col-span-1 lg:col-span-2 space-y-2">
            <h2 class="text-34 leading-40 text-blue max-w-[530px] font-medium mb-2 hidden lg:block"><?php the_field('content_titel');?></h2>
            <div class="text-16 leading-26 text-blue text-editor"><?php the_field('content_tekst');?></div>
            <div class="pt-0">
                <h3 class="text-24 leading-36 text-blue font-medium mt-3 lg:mt-4">Persoonlijke gegevens</h3>
                <div class="h-[1px] bg-blue w-full mb-[35px]"></div>
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
