<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="mbr-row mbr-jc-center">
<?php foreach ($posts as $p):?>
<?php $img = get_image($p->body);?>
<?php if (!empty($p->image) || !empty($img)  || empty($vidTmb)) :?>
<div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3">
    <div class="card-header">
        <div class="card-img">
            <?php if (!empty($p->image)) {?><amp-img src="<?= $p->image;?>" class="radius shadow" layout="responsive" width="333" height="222" alt="<?= $p->title;?>">
            <?php } elseif (!empty($p->video)) {?><amp-img src="//img.youtube.com/vi/<?= get_video_id($p->video);?>/sddefault.jpg" class="radius" layout="responsive" width="333" height="222" alt="<?= $p->title;?>"></amp-img>
            <?php } elseif (!empty($p->audio)) {?><amp-img src="<?= site_url();?>themes/amp-project/assets/img/soundcloud.jpg" class="radius" layout="responsive" width="333" height="222" alt="<?= $p->title;?>"></amp-img>
            <?php } elseif (!empty($img)) {?><amp-img src="<?= $img;?>" class="radius" layout="responsive" width="333" height="222" alt="<?= $p->title;?>"></amp-img>
            <?php } ?>
        </div>
        <div class="card-box">
            <a class="text-black" href="<?= $p->url;?>">
                <h4 class="card-title mbr-fonts-style align-left mbr-light display-5"><?= $p->title;?></h4>
            </a>
            <p class="mbr-text mbr-fonts-style align-left display-4"><?= $p->description;?></p>
            <div class="mbr-light text-sm text-muted mt-2 l90">
                <amp-img src="<?= site_url();?>themes/amp-project/assets/images/afandev.webp" class="atr_img" width="30" height="30" alt="<?= $p->authorName;?>" title="<?= $p->authorName;?>"></amp-img>
                <small><svg xmlns="http://www.w3.org/2000/svg" class="f_d mr-2" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M440.667 182.109l7.143-40c1.313-7.355-4.342-14.109-11.813-14.109h-74.81l14.623-81.891C377.123 38.754 371.468 32 363.997 32h-40.632a12 12 0 0 0-11.813 9.891L296.175 128H197.54l14.623-81.891C213.477 38.754 207.822 32 200.35 32h-40.632a12 12 0 0 0-11.813 9.891L132.528 128H53.432a12 12 0 0 0-11.813 9.891l-7.143 40C33.163 185.246 38.818 192 46.289 192h74.81L98.242 320H19.146a12 12 0 0 0-11.813 9.891l-7.143 40C-1.123 377.246 4.532 384 12.003 384h74.81L72.19 465.891C70.877 473.246 76.532 480 84.003 480h40.632a12 12 0 0 0 11.813-9.891L151.826 384h98.634l-14.623 81.891C234.523 473.246 240.178 480 247.65 480h40.632a12 12 0 0 0 11.813-9.891L315.472 384h79.096a12 12 0 0 0 11.813-9.891l7.143-40c1.313-7.355-4.342-14.109-11.813-14.109h-74.81l22.857-128h79.096a12 12 0 0 0 11.813-9.891zM261.889 320h-98.634l22.857-128h98.634l-22.857 128z"/></svg><?= $p->categorySlug. ',';?><br><span><svg class="f_d mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"/></svg></span>by <?= $p->authorName;?></small>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<?php endforeach;?></div>