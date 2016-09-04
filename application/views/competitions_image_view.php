<?php require_once './includes/header.php';

?>
<!--header ends-->
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Մրցույթ -
                <b><?= $images[0]->title; ?></b>
               <small>
                   <?php if($images[0]->status == 'complete'){
                            echo '(Ավարտված է)';
                   }
                    ?>
               </small>

            </h1>

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
            <?php if($images[0]->status == 'complete'){


                $complete_array = array_slice((array) $images,0,3);

                ?>

                <div class="dt-sc-portfolio-container" style="margin-bottom: 20px;">
                    <div class="dt-sc-one-third comp-img relative comp_height first" style="text-align: right">
                        <img src="<?= base_url();?>images/medal-second.png" class="medal-second">
                        <img src="<?= base_url(); ?>images/competitions/<?= $complete_array[1]->comp_img_name; ?>" class="imgs">
                        <span class="text-right complete-likes"><i class="fa fa-heart"></i>&nbsp;
                                <span class="complete-likes-count"><?php  echo $complete_array[1]->likes; ?></span>
                            </span>
                    </div>
                    <div class="dt-sc-one-third comp-img relative center">

                            <img src="<?= base_url();?>images/medal-first.png" class="medal-first">
                            <img src="<?= base_url(); ?>images/competitions/<?= $complete_array[0]->comp_img_name; ?>">
                        <span class="text-right complete-likes"><i class="fa fa-heart"></i>&nbsp;
                                <span class="complete-likes-count"><?php  echo $complete_array[0]->likes; ?></span>
                            </span>
                    </div>

                    <div class="dt-sc-one-third comp-img relative comp_height last">

                            <img src="<?= base_url();?>images/medal-third.png" class="medal-third">
                            <img src="<?= base_url(); ?>images/competitions/<?= $complete_array[2]->comp_img_name; ?>" class="imgs">
                        <span class="text-right complete-likes"><i class="fa fa-heart"></i>&nbsp;
                                <span class="complete-likes-count"><?php  echo $complete_array[2]->likes; ?></span>
                            </span>

                    </div>
                </div>

           <?php }  ;?>
            <div class="dt-sc-portfolio-container">
                <?php
                $img_array = array();

                ?>
                <?php foreach ($images as $key => $img): ?>
                    <?php array_push($img_array, $img->comp_img_name); ?>
                    <div class="portfolio-content dt-sc-one-fifth comp-img hidden">

                        <img data-id="<?php echo $img->comp_img_id; ?>" data-likes="<?php if ($img->likes == NULL) {
                            $img->likes = 0;
                        }
                        echo $img->likes; ?>" data-position="<?= $key ?>"
                             src="<?= base_url(); ?>images/competitions/<?= $img->comp_img_name; ?>" class="album">

                        <div class="over">
                            <?php if($img->status != 'complete'):?>
                                 <span class="like" data-id="<?php echo $img->comp_img_id; ?>">Հավանել &nbsp; <i class="fa fa-thumbs-up"></i></span>
                            <?php endif;?>
                            <span class="text-right hearts"><i class="fa fa-heart-o"></i>&nbsp;
                                <span class="like-count"><?php if ($img->likes == NULL) {
                                    $img->likes = 0;
                                }
                                echo $img->likes; ?></span>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
            <!--dt-sc-portfolio-container ends-->
        </section>
        <!--primary ends-->
    </div>
    <!--container ends-->
</div>
<!--main ends-->
<div id="photo-album">
    <div id="photo">
        <div class="left"><i class="fa fa-chevron-left fa-2x"></i></div>
        <div class="img">

        </div>
        <!--        <div class="over">-->
        <!--            <span class="like" data-id="-->
        <?php //echo $img->comp_img_id;?><!--">Հավանել &nbsp; <i class="fa fa-thumbs-up"></i></span>-->
        <!--            <span class="text-right"><i class="fa fa-heart-o"></i>&nbsp;-->
        <?php //if($img->likes == NULL){$img->likes = 0;}echo $img->likes;?><!--</span>-->
        <!--        </div>-->
        <div class="right"><i class="fa fa-chevron-right fa-2x"></i></div>
    </div>
    <div class="close"><i class="fa fa-times"></i></div>
</div>

<!--footer starts-->

<!--MODAL-->

<div id="fb_modal">
    <div class="question">
        <span class="close"><i class="fa fa-times"></i></span>

        <p class="text">Քվեարկելու համար մուտք գործեք կայք Facebook-ով։</p>

        <a class="success" href="<?= base_url() ?>social/session/facebook/<?= $images[0]->id;?>">Մուտք</a>

        <p class="close">Չեղարկել</p>
    </div>
</div>

<div id="alert">
    <div class="question">
        <span class="close"><i class="fa fa-times"></i></span>

        <p class="text">Կարող եք քվեարկել միայն մեկ անգամ։</p>


    </div>
</div>
<?php
require_once './includes/footer.php';
?>
<script type="text/javascript">
    var $ = jQuery.noConflict();
    jQuery(document).ready(function () {

        jQuery('.album').click(function () {
            var position = jQuery(this).attr('data-position');

//
            var img_array = [<?php echo '"'.implode('","', $img_array).'"' ?>];

            jQuery('#photo .img').html('<img src="<?php echo base_url();?>images/competitions/' + img_array[position] + '">');

            jQuery('#photo-album .right').click(function () {
                position++;

                if (position > img_array.length - 1) {

                    position = 0;
                }

                jQuery('#photo .img').html('<img src="<?php echo base_url();?>images/competitions/' + img_array[position] + '">');

            });
            jQuery('#photo-album .left').click(function () {
                position--;

                if (position < 0) {

                    position = img_array.length - 1;
                }

                jQuery('#photo .img').html('<img src="<?php echo base_url();?>images/competitions/' + img_array[position] + '">');

            });
            jQuery('#photo-album').fadeIn();
            jQuery('#photo-album .close').click(function () {
                jQuery('#photo-album').fadeOut();
            });
            jQuery(document).keydown(function (e) {
                if (e.keyCode == 27) {

                    jQuery('#photo-album .close').click();
                }
                if (e.keyCode == 39) {

                    jQuery('#photo-album .right').click();
                }
                if (e.keyCode == 37) {

                    jQuery('#photo-album .left').click();
                }
            });

        });
        $('.like').click(function () {
var like = $(this).parent().find('.like-count');

            if ('<?php echo $this->session->userdata('user_id');?>') {

                var id = $(this).attr('data-id');
                var url = '<?=base_url();?>competitions/like/' + id;
                var img_url = '<?=base_url();?>competitions/check_img/' + id;
                $.ajax({
                    url: img_url
                }).done(function (data) {

                    if (data == 0) {

                        $.ajax({url: url}).done(function (done) {

                            if (done == 'no') {
                                $('#alert').fadeIn();
                                $('.close').click(function () {

                                    $('#alert').fadeOut();
                                });
                            }else{
                                var count = parseInt(like.html()) + 1;
                                like.html(count);
                                get_fb_users();
                            }


                        });
                    } else {

                        $('#alert').fadeIn();
                        $('.close').click(function () {

                            $('#alert').fadeOut();
                        });
                    }
                });

            } else {

                $('#fb_modal').fadeIn();
                $('.close').click(function () {
                    $('#fb_modal').fadeOut();
                });
            }

        });
        get_fb_users();
        function get_fb_users(){

            var get_fb_users = '<?=base_url();?>competitions/get_fb_users/';
            $.ajax({

                url: get_fb_users
            }).done(function (data) {

                var users = JSON.parse(data);
                $(users).each(function (key, value) {

                    $('.album').each(function () {

                        if ($(this).attr('data-id') == value.img_id) {

                            $(this).next().find('i').removeClass('fa-heart-o').addClass('fa-heart');
                        }
                    });
                });

            });
        }



    });


</script>