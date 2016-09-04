<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin Իմ բալիկը </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=  base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=  base_url();?>css/custom.css" rel="stylesheet">
    <link href="<?=  base_url();?>css/bootstrap3-wysihtml5.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=  base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=  base_url();?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=  base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=  base_url();?>bower_components/morrisjs/morris.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?=  base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="<?=  base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <a href="<?=  base_url();?>" title="Իմ բալիկը"><img src="<?=  base_url();?>images/logo.png" alt="Իմ բալիկը logo" title="Իմ բալիկը"></a>
                </div>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="<?=  base_url();?>index.php/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="<?=  base_url();?>admin"><i class="fa fa-bar-chart-o fa-fw"></i> Նորություններ</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                       
                         <li>
                            <a href="<?=  base_url();?>admin/competitions"><i class="fa fa-columns"></i> Մրցույթներ</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="<?=  base_url();?>admin/photo"><i class="fa  fa-camera-retro"></i> Նկարներ</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?=  base_url();?>admin/slider"><i class="fa  fa-image"></i> Սլայդեր</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?=  base_url();?>admin/about"><i class="fa fa-columns"></i> Մեր մասին</a>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?=  base_url();?>admin/services"><i class="fa fa-bar-chart-o fa-fw"></i> Ծառայություններ</a>

                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>