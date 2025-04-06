<?php
/*
Template Name: スクロールフェード(page-scroll_fade.php)
*/
get_header();
get_template_part('components/c_pageHead', null, array('title_en' => 'Scroll-Fade', 'title_ja' => 'スクロールで画像フェード')); ?>
<div class="l-pageContents p-sample">
    <section class="p-sampleSection p-sample__xxx">
    <div class="p-xxx"></div>
    <div class="p-scrollFade__grid upper">
        <div class="p-scrollFade__grid__left">
            <div class="p-scrollFade__grid__left--inner">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/300x300.png" media="(min-width: 768px)">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/300x300.png" width="300" height="300" />
                </picture>
                <p>テキスト</p>
            </div>
        </div>
        <div class="p-scrollFade__grid__right upper">
            <img class="p-scrollFade__grid__right--img upper" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/683x768.png" />
            <img class="p-scrollFade__grid__right--img upper" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/00.jpg" />
        </div>
    </div>
    <div class="p-scrollFade__grid lower">
        <div class="p-scrollFade__grid__left">
            <div class="p-scrollFade__grid__left--inner">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/300x300.png" media="(min-width: 768px)">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/300x300.png" width="300" height="300" />
                </picture>
                <p>テキスト</p>
            </div>
        </div>
        <div class="p-scrollFade__grid__right lower">
            <img class="p-scrollFade__grid__right--img lower" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/683x768.png" />
            <img class="p-scrollFade__grid__right--img lower" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/00.jpg" />
        </div>
    </div>
    <div class="p-xxx"></div>
    </section>
</div>
<?php
get_footer();
?>