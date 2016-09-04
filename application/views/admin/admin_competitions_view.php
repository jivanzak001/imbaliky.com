<?php
require_once './includes/header_admin.php';
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Մրցույթներ</h1>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Մրցույթներ
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
                                <th>Ակտիվացնել/Դադարեցնել</th>
                                <th>Ավելացնել նկար</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($competitions_admin as $key => $items): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><a href="#"><?= $items['title']; ?> </a></td>
                                    <td>
                                        <form method="post" action="<?= base_url(); ?>index.php/admin/del_com">
                                            <input type="submit" name="del_com" class="btn btn-danger" value="Ջնջել">
                                            <input type="hidden" class="form-control" name="id"
                                                   value="<?= $items['id']; ?>">
                                        </form>
                                    </td>
                                    <td><a class="btn btn-primary"
                                           href="<?= base_url(); ?>index.php/admin/edit_competitions/<?= $items['id']; ?>">
                                            Փոփոխել </a></td>
                                    <?php
                                    if ($items['status'] == 'active') {

                                        $url = 'set_deactive_competition';
                                        $status = 'Դեակտիվացնել';
                                    } else {

                                        $url = 'set_active_competition';
                                        $status = 'Ակտիվացնել';
                                    }
                                    ?>
                                    <td><a class="btn btn-success"
                                           href="<?= base_url(); ?>index.php/admin/<?= $url; ?>/<?= $items['id']; ?>">

                                            <?= $status; ?></a></td>
                                    <?php
                                    if ($items['status'] == 'complete') {

                                        $c_url = 'set_active_competition';
                                        $c_status = 'Ավարտված է';
                                        $c_class = 'btn-danger';
                                    } else {

                                        $c_url = 'set_complete_competition';
                                        $c_status = 'Ավարտել';
                                        $c_class = 'btn-success';
                                    }
                                    ?>
                                    <td><a class="btn <?= $c_class;?>"
                                           href="<?= base_url(); ?>index.php/admin/<?= $c_url; ?>/<?= $items['id']; ?>">

                                            <?= $c_status; ?></a></td>
                                    <td>
                                        <a href="<?= base_url(); ?>index.php/admin/view_competition/<?= $items['id']; ?>"
                                           class="btn btn-primary"><i class="fa fa-plus"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-4">
            <?php
            if (isset($edit) && !empty($edit)) {


                $edit_id = $edit['id'];
                $edit_title = $edit['title'];
                $edit_description = $edit['description'];
                $edit_img_name = $edit['img_name'];
                $edit_date_end = $edit['date_end'];
                $edit_date_added = $edit['date_added'];

            } else {
                $edit_id = '';
                $edit_title = '';
                $edit_img_name = '';
                $edit_description = '';
                $edit_date_end = '';
                $edit_date_added = '';
            }
            ?>
            <form role="form" method="post" action="<?= base_url(); ?>index.php/admin/add_competitions"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Վերնագիր</label>
                    <input type="text" class="form-control" name="title" value="<?= $edit_title; ?>">

                </div>
                <div class="form-group">
                    <label>Նկարագրություն</label>

                    <textarea class="form-control" name="description"><?= $edit_description; ?></textarea>

                </div>
                <div class="form-group">
                    <label>Սկիզբ</label>
                    <input type="text" class="form-control" name="date_added" value="<?= $edit_date_added; ?>">


                </div>
                <div class="form-group">
                    <label>Ավարտ</label>
                    <input type="text" class="form-control" name="date_end" value="<?= $edit_date_end; ?>">


                </div>

                <div class="form-group">

                    <label>Նկար</label>
                    <input type="file" name="userfile" multiple>
                    <input type="hidden" name="old_image" value="<?= $edit_img_name; ?>">
                    <input type="hidden" class="form-control" name="edit_id" value="<?= $edit_id; ?>">
                </div>
                <input type="submit" name="enter_competitions" class="btn btn-primary" value="Ավելացնել">
            </form>
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
