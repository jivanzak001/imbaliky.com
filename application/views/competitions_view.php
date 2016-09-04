<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Մրցույթներ</h1>

            <div class="breadcrumb">
                <a href="<?= base_url(); ?>">Գլխավոր</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Մրցույթներ</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">
            <!--dt-sc-portfolio-container starts-->
            <div class="dt-sc-portfolio-container">
                <div class="dt-sc-portfolio-container">
                    <?php foreach ($photo as $items): ?>
                        <a href="<?= base_url(); ?>competitions/images/<?= $items['id']; ?>">
                            <div class="portfolio-content comp">

                                <img src="<?= base_url(); ?>images/competitions/<?= $items['img_name'] ?>" alt=""
                                     title="<?= $items['title'] ?>">
                                <i class="fa fa-group fa-fw"></i><span>Անվանում  - <?= $items['title'] ?></span><br>
                                <?php if($items['status'] == 'complete'): ?>
                                <span>Ավարտված է</span>
                                <?php else:?>
                                <i class="fa  fa-level-up fa-fw"></i><span>Սկիզբ  - <?= $items['date_added'] ?></span><br>
                                <i class="fa fa-level-down fa-fw"></i><span>Ավարտ - <?= $items['date_end'] ?></span>
                                <?php endif;?>
                            </div>

                        </a>
                    <?php endforeach; ?>


                </div>

            </div>
            <!--dt-sc-portfolio-container ends-->
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
