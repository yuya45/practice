<?php get_header(); ?>
<?php get_template_part('components/c_pageHead', null, array('title_en' => 'NEWS', 'title_ja' => 'ニュース')); ?>
<div class="l-pageContents">
    <div class="l-inner l-inner--1100">
        <ul class="">
            <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="">
                            <div class="">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img class="attachment-post-thumbnail" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/noImage.jpg" alt="">
                                <?php endif; ?>
                            </div>
                            <p class=""><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                            <p class=""><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="c-article__notFound">ただいま準備中です。</p>
            <?php endif;
            wp_reset_postdata();
            ?>
        </ul>
        <div class="c-pagination c-paginationArchive">
            <?php
            the_posts_pagination(array(
                'mid_size' => 0,
                'prev_text' => '<div  class="arrow__prev"></div>', // 前へのテキストを変更
                'next_text' => '<div  class="arrow__next"></div>', // 次へのテキストを変更
            ));
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>