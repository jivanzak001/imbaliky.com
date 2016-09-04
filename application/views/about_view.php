<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Մեր մասին</h1>

            <div class="breadcrumb">
                <a href="<?= base_url(); ?>">Գլխավոր</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Մեր մասին</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">


            <!--dt-sc-one-half starts-->
            <div class="column dt-sc-one-column">

                <p><?= $about_admin['text']; ?></p>

            </div>
            <!--dt-sc-one-half ends-->

            <div class="dt-sc-hr"></div>


            <div class="dt-sc-hr"></div>


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

