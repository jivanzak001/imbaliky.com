<?php
require_once './includes/header_admin.php';

?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Մեր մասին</h1>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Մեր մասին
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="col-lg-12">

                            <form role="form" method="post" action="<?= base_url(); ?>index.php/admin/add_about"
                                  enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Տեքստ</label>
                                    <textarea class="form-control " id="editor1" rows="6"
                                              name="text"><?= $about_admin['text']; ?></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" name="enter_competitions" value="Փոփոխել">
                        </div>


                        </form>
                    </div>


                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
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
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script type="text/javascript">

    CKEDITOR.replace('editor1');
</script>
</body>

</html>
