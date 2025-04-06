<?php get_header(); ?>
<?php get_template_part('components/c_pageHead', null, array('title_en' => 'NEWS', 'title_ja' => 'ニュース')); ?>
<div class="l-pageContents">
    <div class="l-inner l-inner--1100">
        <div class="c-single">
        <time datetime="<?php the_time('Y-m-d'); ?>" class="c-single__date"><?php the_time('Y.m.d'); ?></time>
            <h1 class="c-single__title"><?php the_title(); ?></h1>
            <div class="c-single__wrap">
                <div class="c-single__content p-editorContents">
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="post-navigation">
                <div class="previous-post">
                    <?php previous_post_link('%link', '前の記事'); ?>
                </div>
                <div class="next-post">
                    <?php next_post_link('%link', '次の記事'); ?>
                </div>
            </div>
            <div class="toArchive">
                <a href="<?php echo home_url('/news'); ?>">一覧に戻る</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>