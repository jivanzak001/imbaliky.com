<?php
require_once './includes/header_admin.php';

?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Նկարներ</h1>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Նկարներ
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Վերնագիր</th>
                                <th>Ջնջել</th>
                                <th>Փոփոխել</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($photo_admin as $key => $items): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><img src="<?= base_url(); ?>images/photos/<?= $items['img_name']; ?>"
                                             style="width:120px"></td>
                                    <td><a href="">
                                            <form method="post" action="<?= base_url(); ?>index.php/admin/del_photo">
                                                <input type="submit" name="del_photo" class="btn btn-danger"
                                                       value="Ջնջել">
                                                <input type="hidden" class="form-control" name="id"
                                                       value="<?= $items['id']; ?>">
                                            </form></td>
                                    <td><a class="btn btn-primary"
                                           href="<?= base_url(); ?>index.php/admin/edit_photo/<?= $items['id']; ?>">
                                            Փոփոխել </a></td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>

                        </table>
                        <?php  if($this->pagination->create_links()){
                            echo $this->pagination->create_links();
                        }?>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">

            <?php
            if (isset($edit) && !empty($edit)) {


                $edit_id = $edit['id'];

                $edit_title = $edit['title'];
                $edit_img_name = $edit['img_name'];

                echo '<img src="' . base_url() . 'images/photos/' . $edit["img_name"] . '" style="height:120px;">';


            } else {
                $edit_id = '';
                $edit_title = '';
                $edit_img_name = '';

            }
            ?>
            <form role="form" method="post" action="<?= base_url(); ?>index.php/admin/add_photo"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Վերնագիր</label>
                    <input type="text" class="form-control" name="title" value="<?= $edit_title; ?>">

                </div>

                <div class="form-group">
                    <label>Նկար</label>
                    <input type="file" name="userfile" multiple>
                    <input type="hidden" name="old_image" value="<?= $edit_img_name; ?>">
                    <input type="hidden" class="form-control" name="edit_id" value="<?= $edit_id; ?>">
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
