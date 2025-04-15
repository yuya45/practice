<?php
/*
Template Name: ボタンくるくる(page-btnCircle.php)
*/
get_header();
get_template_part('components/c_pageHead', null, array('title_en' => 'Scroll-Fade', 'title_ja' => 'スクロールで画像フェード')); ?>
<div class="l-pageContents p-sample">
    <section class="p-sampleSection p-xxx">
        <div class="p-btnCircle__wrap">
            <svg class="p-btnCircle CircleArrow_circle__9LRdk" viewBox="0 0 200 200">
                <circle cx="100" cy="100" r="100" fill="transparent" stroke="#e5e5e5" stroke-width="2"></circle>
                <circle cx="100" cy="100" r="100" fill="transparent" stroke="#2a2625" stroke-width="2" stroke-dasharray="628" stroke-dashoffset="628" class="ReactiveCircle_circle_item__gp_eH" data-svg-origin="100 100" transform="matrix(0,-1,1,0,0,200)" style="transform-origin: 0px 0px; stroke-dashoffset: 0px;"></circle>
            </svg>
        </div>
        <div class="frame">
            <div class="center">
                <div class="button">
                    <p>hello</p>
                    <p class="appear">I'm Sabine</p>
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line"></polyline>
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>