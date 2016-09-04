<?php
require_once './includes/header_admin.php';

?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Նորություններ</h1>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Նորություններ
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
                            <?php foreach ($news_admin as $key => $items): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?= $items['title'] ?></td>
                                    <td>
                                        <form method="post" action="<?= base_url(); ?>index.php/admin/del_news">
                                            <input type="submit" name="del_news" class="btn btn-danger" value="Ջնջել">
                                            <input type="hidden" class="form-control" name="id"
                                                   value="<?= $items['id']; ?>">
                                        </form>
                                    </td>
                                    <td><a class="btn btn-primary"
                                           href="<?= base_url(); ?>index.php/admin/edit_news/<?= $items['id']; ?>">
                                            Փոփոխել </a></td>
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
        <div class="col-lg-6">
            <?php
            if (isset($edit) && !empty($edit)) {


                $edit_id = $edit['id'];
                $edit_title = $edit['title'];
                $edit_text = $edit['text'];
                $edit_short = $edit['short_text'];
                $edit_img_name = $edit['img_name'];
                $edit_or = $edit['or'];
                $edit_amis = $edit['amis'];
                $edit_tari = $edit['tari'];
                echo '<img src="'.base_url().'images/news/'.$edit_img_name.'" style="width:150px;">';


            } else {
                $edit_id = '';
                $edit_title = '';
                $edit_short = '';
                $edit_text = '';
                $edit_img_name = '';
                $edit_or = '';
                $edit_amis = '';
                $edit_tari = '';
            }
            ?>

            <form role="form" method="post" action="<?= base_url(); ?>index.php/admin/add_news"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Վերնագիր</label>
                    <input type="text" class="form-control" name="title" value="<?= $edit_title; ?>">


                </div>
                <div class="form-group">
                    <label>Կարճ տեքստ</label>
                    <input type="text" class="form-control" name="short_text" max="170" value="<?= $edit_short; ?>">

                </div>
                <div class="form-group">
                    <label>Տեքստ</label>
                    <textarea id="editor1" class="form-control" rows="3" name="text"><?= $edit_text; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Նկար</label>
                    <input type="file" name="userfile">
                    <input type="hidden" name="old_image" value="<?= $edit_img_name; ?>">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" name="or" placeholder='27' value="<?= $edit_or; ?>">

                </div>
                <div class="form-group">

                    <input type="text" class="form-control" name="amis" placeholder='Հուն.' value="<?= $edit_amis; ?>">

                </div>
                <div class="form-group">

                    <input type="text" class="form-control" name="tari" placeholder='2015' value="<?= $edit_tari; ?>">

                </div>

                <input type="hidden" class="form-control" name="edit_id" value="<?= $edit_id; ?>">

                <input type="submit" class="btn btn-primary" name="enter" value="Ավելացնել">
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <!-- /#page-wrapper -->
    <?php  if($this->pagination->create_links()){
        echo $this->pagination->create_links();
    }?>

</div>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script type="text/javascript">

    CKEDITOR.replace('editor1');

</script>
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
