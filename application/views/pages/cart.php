
<?php
$contents = $this->cart->contents();
//echo '<pre>';
//print_r($contents);
//exit();
//
?>


<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contents as $v_contents) { ?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="<?php echo base_url() . $v_contents['options']['image'] ?>" height="150" width="150" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $v_contents['name'] ?></a></h4>
                                <!--<p>Web ID: 1089772</p>-->
                            </td>
                            <td class="cart_price">
                                <p>$<?php echo $v_contents['price'] ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $v_contents['qty'] ?>" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$<?php echo $v_contents['subtotal'] ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="total_area">
                <ul>
                    <li>Cart Sub Total <span>$<?php echo $this->cart->total(); ?></span></li>
                    <li>Vat(17.5%) <span>$<?php echo $vat = ((17.5 * $this->cart->total()) / 100); ?></span></li>
                    <!--<li>Shipping Cost <span>Free</span></li>-->
                    <li>Total <span>$<?php echo $vat + $this->cart->total(); ?></span></li>
                </ul>
                <a class="btn btn-default update" href="">Update</a>
                <a class="btn btn-default check_out" href="">Check Out</a>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
