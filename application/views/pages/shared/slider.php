<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                    <li data-target="#slider-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <?php
                    $i = 1;
                    foreach ($all_featured_image as $v_featured_image) {
                        if ($i == 1) {
                            echo "<div class='item active'>";
                        } else {
                            echo "<div class='item'>";
                        }
                        ?>

                        <div class="col-sm-6">
                            <h1><span>E</span>-SHOPPER</h1>
                            <h2><?php echo $v_featured_image->product_name ?></h2>
                            <p><?php echo $v_featured_image->product_short_description ?> </p>
                            <button type="button" class="btn btn-default get">Get it now</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo base_url() ?>home/product_details/<?php echo $v_featured_image->product_id ?>">  <img src="<?php echo base_url() . $v_featured_image->product_image ?>" class="girl img-responsive" alt="" /></a>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>

            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
</div>