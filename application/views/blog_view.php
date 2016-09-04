<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">

            <h1><?= $last['title'] ?></h1>

            <div class="breadcrumb">
                <a href="<?= base_url(); ?>">Գլխաոր</a>

                <span class="fa fa-angle-double-right"></span>
                <span class="current"><?= $last['title'] ?></span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="with-sidebar">

            <article class="blog-entry">
                <div class="blog-entry-inner">
                    <div class="entry-meta">

                        <div class="date">
                            <span> <?= $last['or'] ?> </span>

                            <p> <?= $last['amis'] ?> <br> <?= $last['tari'] ?> </p>
                        </div>

                        <a href="<?= base_url() ?>photo" class="entry_format"><span
                                class="fa fa-picture-o"></span></a>
                    </div>
                    <div class="entry-thumb  dt-sc-one-half  ">
                        <img src="<?= base_url(); ?>images/news/<?= $last['img_name'] ?> " alt="" title="">
                    </div>
                    <div class="entry-details">
                        <div class="entry-title">
                            <h3> <?= $last['title'] ?>  </h3>
                        </div>
                        <!--entry-metadata ends-->
                        <div class="entry-body">
                            <?= $last['text'] ?>
                        </div>
                    </div>
                </div>
            </article>
            <!--commententries starts-->

            <!--commententries ends-->
        </section>
        <!--primary ends-->

        <!--secondary starts-->

        <!--secondary ends-->

    </div>
    <!--container ends-->
</div>
<!--main ends-->

<!--footer starts-->
<?php
require_once './includes/footer.php';
?>
