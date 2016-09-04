<?php
require_once './includes/header_admin.php';

?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Մրցույթներ</h1>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Մրցույթ - <b><?= $competition[0]->title; ?> </b>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <?php foreach ($competition as $comp): ?>
                            <div class="col-md-4">
                                <div class="img">
                                    <img src="<?= base_url() ?>images/competitions/<?= $comp->comp_img_name; ?>">

                                    <div class="overlay-img">
                                        <a class="btn btn-danger delete-button"
                                           href="<?= base_url(); ?>index.php/admin/del_comp/<?= $comp->comp_img_id; ?>">Ջնջել</a>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <div class="col-lg-6">

            <form role="form" method="post" action="<?= base_url(); ?>index.php/admin/add_competition_image"
                  enctype="multipart/form-data">

                <div class="form-group">
                    <label>Նկար</label>
                    <input type="file" name="userfile" multiple>

                    <input type="hidden" class="form-control" name="competition_id" value="<?= $comp->id; ?>">
                </div>
                <input type="submit" class="btn btn-primary" name="enter_competitions" value="Ավելացնել">
            </form>
        </div>


    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
