<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Լուսանկարներ</h1>

            <div class="breadcrumb">
                <a href="<?= base_url(); ?>">Գլխավոր</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Լուսանկարներ</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">
            <!--
                                <!--dt-sc-portfolio-container starts-->
            <div class="dt-sc-portfolio-container">
                <?php foreach ($photo as $items): ?>
                    <div class="portfolio-content dt-sc-one-fifth  hidden">

                        <a href="<?= base_url(); ?>images/photos/<?= $items['img_name'] ?>"
                           data-gal="prettyPhoto[gallery]" class="zoom"> <img class="photo_img"
                                                                              src="<?= base_url(); ?>images/photos/<?= $items['img_name'] ?>"
                                                                              alt="" title=""></a>

                        <div class="image-overlay">


                        </div>

                    </div>
                <?php endforeach; ?>


            </div>
            <!--dt-sc-portfolio-container ends-->
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
