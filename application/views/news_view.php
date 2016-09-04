<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Նորություններ</h1>

            <div class="breadcrumb">
                <a href="<?= base_url(); ?>">Գլխավոր</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Նորություններ</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">
            <?php foreach ($all_news as $items): ?>
                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">

                                <div class="date">
                                    <span> <?= $items['or']; ?> </span>

                                    <p> <?= $items['amis']; ?> <br> <?= $items['tari']; ?>  </p>
                                </div>
                                <!--                                    <a href="#" class="comments">
                                                                        12 <span class="fa fa-comment"> </span>
                                                                    </a>-->
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"><img
                                        src="<?= base_url(); ?>images/news/<?= $items['img_name']; ?> " alt="" title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3>
                                        <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"> <?= $items['title']; ?>  </a>
                                    </h3>
                                </div>
                                <!--entry-metadata ends-->
                                <div class="entry-body">
                                    <p><?= $items['short_text']; ?> </p>
                                </div>
                                <a href="<?= base_url(); ?>index.php/home/blog/<?= $items['id']; ?>"
                                   class="dt-sc-button small"> Կարդալ ավելին<span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
            <div class="text-center"><?php  echo $this->pagination->create_links();?></div>

        </section>
        <!--primary ends-->
    </div>
    <!--container ends-->
</div>
<!--main ends-->

<!--footer starts-->
<?php
require_once './includes/footer.php';
?>

