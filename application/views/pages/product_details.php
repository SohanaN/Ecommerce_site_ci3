<!--<div class="col-sm-9 padding-right">-->
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="<?php echo base_url() . $product_info->product_image ?>" alt="" />
            <h3>ZOOM</h3>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/similar3.jpg" alt=""></a>
                </div>

            </div>

            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="<?php echo base_url() ?>front_end/images/product-details/new.jpg" class="newarrival" alt="" />
            <h2><?php echo $product_info->product_name ?></h2>
            <!--<p>Web ID: 1089772</p>-->
            <img src="<?php echo base_url() ?>front_end/images/product-details/rating.png" alt="" />
            <span>
                <span>US $<?php echo $product_info->product_new_price ?></span>
                <label>Quantity: </label>
                <input type="text" value="3" />
                <button type="button" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </button>
            </span>
            <p><b>Availability: </b>
                <?php
                if ($product_info->product_quantity <= 0) {
                    echo 'Not Availabe';
                } else {
                    echo 'Availabe';
                }
                ?></p>
            <p><b>Condition:</b> New</p>
            <p><b>Brand: </b><?php echo $product_info->manufacture_name ?></p>
            <a href=""><img src="<?php echo base_url() ?>front_end/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->
<!--</div>-->