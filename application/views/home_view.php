<?php require_once './includes/header.php';

?>
    <!--header ends-->
    <!--main starts-->
    <div id="main">





    <!--slider starts-->
    <div id="slider">
        <div id="layerslider_4" class="ls-wp-container"
             style="width:100%;height:610px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
            <!--                    <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
                                    <img src="images/layerslider-gallery/bg3.jpg" class="ls-bg" alt="Slide background" />
                                    <img class="ls-l" style="top:120px;left:530px;white-space: nowrap;" data-ls="offsetxin:0;delayin:800;easingin:easeOutElastic;skewxin:30;skewyin:30;transformoriginin:50% 0% 50%;offsetxout:0;parallaxlevel:1;" src="images/layerslider-gallery/bring.png" alt="">
                                    <img class="ls-l" style="top:420px;left:-375px;z-index:100;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:80;delayin:500;offsetxout:0;offsetyout:-80;" src="images/layerslider-gallery/grass.png" alt="">
                                    <img class="ls-l" style="top:185px;left:530px;white-space: nowrap;" data-ls="offsetxin:2;delayin:1000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-1;" src="images/layerslider-gallery/fun.png" alt="">
                                    <img class="ls-l" style="top:252px;left:507px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/two.png" alt="">
                                    <img class="ls-l" style="top:250px;left:571px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:3;" src="images/layerslider-gallery/life.png" alt="">
                                    <img class="ls-l" style="top:355px;left:518px;white-space: nowrap;" data-ls="delayin:2500;parallaxlevel:-2;" src="images/layerslider-gallery/cup-divider.png" alt="">

                                    <img class="ls-l" style="top:220px;left:370px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2000;easingin:swing;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="images/layerslider-gallery/boy1.png" alt="">
                                    <img class="ls-l" style="top:42px;left:173px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2200;easingin:easeInOutBack;offsetxout:0;offsetyout:-150;parallaxlevel:-4;" src="images/layerslider-gallery/girl2.png" alt="">
                                    <img class="ls-l" style="top:70px;left:-59px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2700;easingin:easeInBack;offsetxout:0;offsetyout:-150;parallaxlevel:5;" src="images/layerslider-gallery/girl1.png" alt="">
                                    <img class="ls-l" style="top:55px;left:740px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2300;easingin:easeOutQuart;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="images/layerslider-gallery/boy2.png" alt="">
                                    <img class="ls-l" style="top:85px;left:955px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2500;offsetxout:0;offsetyout:-150;parallaxlevel:4;" src="images/layerslider-gallery/boy3.png" alt="">
                                </div>-->
            <?php foreach ($slide as $items): ?>
                <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
                    <img src="images/layerslider-gallery/<?= $items['img_name'] ?>" class="ls-bg"
                         alt="Slide background"/>
                    <!--<img class="ls-l" style="top:35px;left:678px;white-space: nowrap;" data-ls="offsetxout:180;" src="images/layerslider-gallery/school-kid.png" alt="">
                    <img class="ls-l" style="top:23px;left:998px;white-space: nowrap;" data-ls="delayin:1500;scaleyin:3;transformoriginin:0% 50% 0;parallaxlevel:2;" src="images/layerslider-gallery/b-cloud.png" alt="">
                    <img class="ls-l" style="top:67px;left:679px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:2000;rotateyin:30;parallaxlevel:5;" src="images/layerslider-gallery/b-swirl.png" alt="">
                    <img class="ls-l" style="top:78px;left:50px;white-space: nowrap;" data-ls="offsetxin:-200;delayin:2000;" src="images/layerslider-gallery/b-comment.png" alt="">
                    <img class="ls-l" style="top:137px;left:98px;white-space: nowrap;" data-ls="delayin:2500;rotateyin:30;" src="images/layerslider-gallery/welcome-text.png" alt="">
                    <img class="ls-l" style="top:222px;left:96px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:30;" src="images/layerslider-gallery/text-desc.png" alt="">
                    <a href="http://webmozart.com" class="ls-l" style="top:397px;left:105px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:3500;offsetxout:0;offsetyout:150;"><img src="images/layerslider-gallery/purchase-theme.png" alt=""></a>
                    <img class="ls-l" style="top:395px;left:297px;white-space: nowrap;" data-ls="delayin:3700;" src="images/layerslider-gallery/b-tick.png" alt="">
                    <img class="ls-l" style="top:421px;left:100px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:4000;offsetxout:0;offsetyout:150;" src="images/layerslider-gallery/chalk-effect.png" alt="">
                    <img class="ls-l" style="top:30px;left:2px;white-space: nowrap;" data-ls="delayin:3100;rotateyin:90;parallaxlevel:3;" src="images/layerslider-gallery/b-game.png" alt="">
                    <img class="ls-l" style="top:498px;left:13px;white-space: nowrap;" data-ls="offsetxin:-100;delayin:3500;parallaxlevel:4;" src="images/layerslider-gallery/b-bulb.png" alt="">
                    <img class="ls-l" style="top:524px;left:507px;white-space: nowrap;" data-ls="delayin:2300;rotateyin:180;parallaxlevel:-3;" src="images/layerslider-gallery/b-glass.png" alt="">-->
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <!--slider ends-->
    <section class="fullwidth-background dt-sc-parallax-section orange-bg">
        <!--container starts-->
        <div class="container">
            <h2 class="dt-sc-hr-white-title">Նորություններ</h2>
            <?php foreach ($last as $items): ?>


                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <!--   <a href="blog-detail.html" class="blog-author"><img src="images/rounded-bg-img.jpg" alt="" title=""></a> -->
                                <div class="date">
                                    <span>  <?= $items['or']; ?> </span>

                                    <p>  <?= $items['amis']; ?><br>  <?= $items['tari']; ?></p>
                                </div>
                                <!--                                        <a href="#" class="comments">
                                                                            12 <span class="fa fa-comment"> </span>
                                                                        </a>-->
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">

                                <a href="<?= base_url(); ?>home/blog/<?= $items['id']; ?>"><img
                                        src="<?= base_url(); ?>images/news/<?= $items['img_name']; ?>"
                                        style="width: 444px; height: 270px;" alt="" title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3>
                                        <a href="<?= base_url(); ?>home/blog/<?= $items['id']; ?>"> <?= $items['title']; ?> </a>
                                    </h3>
                                </div>
                                <!--entry-metadata ends-->
                                <div class="entry-body">
                                    <p> <?= $items['short_text']; ?></p>
                                </div>
                                <a href="<?= base_url(); ?>home/blog/<?= $items['id']; ?>"
                                   class="dt-sc-button small"> Կարդալ ավելին <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>



            <?php foreach ($random as $items): ?>


                <div class="column dt-sc-one-third first" id="margin_news">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta" id="entry-meta">
                                <!--   <a href="blog-detail.html" class="blog-author"><img src="images/rounded-bg-img.jpg" alt="" title=""></a> -->
                                <div class="date">
                                    <span> <?= $items['or']; ?> </span>

                                    <p> <?= $items['amis']; ?><br> <?= $items['tari']; ?> </p>
                                </div>
                                <!--                                        <a href="#" class="comments">
                                                                            12 <span class="fa fa-comment"> </span>
                                                                        </a>-->
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"><img
                                        src="<?= base_url(); ?>images/news/<?= $items['img_name']; ?>" alt="" title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3>
                                        <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"> <?= $items['title']; ?> </a>
                                    </h3>
                                </div>
                                <!--entry-metadata ends-->
                                <div class="entry-body">
                                    <p><?= $items['short_text']; ?></p>
                                </div>
                                <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"
                                   class="dt-sc-button small"> Կարդալ ավելին <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
            <!--dt-sc-one-half ends-->
        </div>
        <!--container ends-->
    </section>
    <!--primary starts-->
    <!--   <div class="dt-sc-hr"></div>
-->
    <section class="fullwidth-background dt-sc-parallax-section product_bg" style="background-position: 50% 72px;">
        <div class="container  ">
            <h2 class="dt-sc-hr-green-title">Լուսանկարներ</h2>

            <!--portfolio-content starts-->
            <div class="front-portfolio-container ">
                <?php foreach ($photo as $key => $items): ?>
                    <div class="portfolio-content portfolio-content<?= $key ?>">
                        <div class="front-portfolio">
                            <div class="portfolio-outer">
                                <div class="portfolio-thumb " id="home_portfolio">
                                    <img src="<?= base_url(); ?>images/photos/<?= $items['img_name'] ?>" alt=""
                                         title="">

                                    <div class="image-overlay">
                                        <a href="<?= base_url(); ?>images/photos/<?= $items['img_name'] ?>"
                                           data-gal="prettyPhoto[gallery]" class="zoom"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="dt-sc-hr-small"></div>
                <div class="aligncenter">
                    <a href="<?= base_url(); ?>index.php/photo" class="dt-sc-button medium mustard">Դիտել բոլորը <span
                            class="fa fa-chevron-circle-right"> </span></a>
                </div>
            </div>

            <!--front-portfolio-container ends-->

        </div>
    </section>
    <!--container ends-->



        <!--footer starts-->
    <?php
require_once './includes/footer.php';
    ?>