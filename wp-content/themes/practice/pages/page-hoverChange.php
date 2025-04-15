<?php
/*
Template Name: ホバーチェンジ(page-hoverChange.php)
*/
get_header();
get_template_part('components/c_pageHead', null, array('title_en' => 'Scroll-Fade', 'title_ja' => 'スクロールで画像フェード')); ?>
<div class="l-pageContents">
    <div class="l-inner l-inner--1100">
        <div class="p-home__productWrap">
            <div class="p-home__productLeft wow fadeInLeft" data-wow-delay=".1s">
                <ul class="p-home_productCardList js-hoverChangeCardList">
                    <li class="p-home_productCard current">
                        <img class="p-home__productImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        <div class="p-home__productCardTxtWrap">
                            <p class="p-home__productCardMainTxt">みがきシャフト</p>
                            <p class="p-home__productCardSubTxt">熱間圧延素材を用い、冷間引抜、研削、切削などの組み合わせによって製造されるのがみがきシャフトです。</p>
                        </div>
                    </li>
                    <li class="p-home_productCard">
                        <img class="p-home__productImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        <div class="p-home__productCardTxtWrap">
                            <p class="p-home__productCardMainTxt">特殊鋼・一般鋼材・鋼管・非鉄</p>
                            <p class="p-home__productCardSubTxt">熱間圧延素材を用い、冷間引抜、研削、切削などの組み合わせによって製造されるのがみがきシャフトです。</p>
                        </div>
                    </li>
                    <li class="p-home_productCard">
                        <img class="p-home__productImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        <div class="p-home__productCardTxtWrap">
                            <p class="p-home__productCardMainTxt">機械加工（６面フライス）</p>
                            <p class="p-home__productCardSubTxt">熱間圧延素材を用い、冷間引抜、研削、切削などの組み合わせによって製造されるのがみがきシャフトです。</p>
                        </div>
                    </li>
                    <li class="p-home_productCard">
                        <img class="p-home__productImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        <div class="p-home__productCardTxtWrap">
                            <p class="p-home__productCardMainTxt">オリジナル製品</p>
                            <p class="p-home__productCardSubTxt">熱間圧延素材を用い、冷間引抜、研削、切削などの組み合わせによって製造されるのがみがきシャフトです。</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="p-home__productRight  wow fadeInUp">
                <div class="p-home__productIconHeading c-iconHeading wow fadeInLeft" data-wow-delay=".1s">
                    <img class="c-iconHeading__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/product_icon.png" width="46" alt="">
                    <p class="c-iconHeading__enTxt">PRODUCT</p>
                    <div class="c-iconHeading__bar"></div>
                    <h2 class="c-iconHeading__jaTxt">取扱品目</h2>
                </div>
                <ul class="p-home__productList js-hoverChangeTriggerList">
                    <li class="p-home__productListItem wow fadeInLeft" data-wow-delay=".1s">
                        <a class="p-home__productListLink" href="#">
                            <div class="p-home__productTxtImgWrapXl">
                                <p class="p-home__productListNum">01</p>
                                <p class="p-home__productListTxt">みがきシャフト</p>
                            </div>
                            <img class="p-home__productImgXl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        </a>
                    </li>
                    <li class="p-home__productListItem wow fadeInLeft" data-wow-delay=".2s">
                        <a class="p-home__productListLink" href="#">
                            <div class="p-home__productTxtImgWrapXl">
                                <p class="p-home__productListNum">02</p>
                                <p class="p-home__productListTxt">特殊鋼・一般鋼材・<br class="is-spOnly">鋼管・非鉄</p>
                            </div>
                            <img class="p-home__productImgXl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        </a>
                    </li>
                    <li class="p-home__productListItem wow fadeInLeft" data-wow-delay=".3s">
                        <a class="p-home__productListLink" href="#">
                            <div class="p-home__productTxtImgWrapXl">
                                <p class="p-home__productListNum">03</p>
                                <p class="p-home__productListTxt">機械加工（６面フライス）</p>
                            </div>
                            <img class="p-home__productImgXl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        </a>
                    </li>
                    <li class="p-home__productListItem wow fadeInLeft" data-wow-delay=".4s">
                        <a class="p-home__productListLink" href="#">
                            <div class="p-home__productTxtImgWrapXl">
                                <p class="p-home__productListNum">04</p>
                                <p class="p-home__productListTxt">オリジナル製品</p>
                            </div>
                            <img class="p-home__productImgXl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/home/550x377.png" alt="">
                        </a>
                    </li>
                </ul>
                <div class="c-arrowBtnWrapMid p-home__productBtnWrap wow fadeInLeft" data-wow-delay=".5s">
                    <a class="c-arrowBtn c-arrowBtnBlue" href="#">取扱品目を詳しく見る</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>