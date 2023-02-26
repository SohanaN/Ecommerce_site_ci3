<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--/
//<?php
//echo $title;
//exit();
//
?>

-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $title ?> | SN E-Shop</title>
        <link href="<?php echo base_url() ?>front_end/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/price-range.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>front_end/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>front_end/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>front_end/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>front_end/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>front_end/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>front_end/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <!-- Load the header view -->
            <?php $this->load->view('pages/shared/header'); ?>
        </header><!--/header-->

        <!--slider-->
        <?php if (isset($slider)) { ?> <!-- to show slider only on main page-->
            <section id="slider">
                <!--Load the slider view-->
                <?php $this->load->view('pages/shared/slider'); ?>
            </section>
        <?php } ?>
        <!--/slider-->

        <section>
            <div class="container">
                <div class="row">
                    <!--home_content page-->
                    <?php echo $main_content; ?>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <!-- Load the header view -->
            <?php $this->load->view('pages/shared/footer'); ?>
        </footer><!--/Footer-->

        <script src="<?php echo base_url() ?>front_end/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>front_end/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>front_end/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url() ?>front_end/js/price-range.js"></script>
        <script src="<?php echo base_url() ?>front_end/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url() ?>front_end/js/main.js"></script>
    </body>
</html>