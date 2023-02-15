<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h3 style="color:Green">
                <?php
                $message = $this->session->userdata('message');
                if ($message) {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h3>
            <form class="form-horizontal" action="<?php echo base_url() ?>save-product" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" required="" name="product_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Category Name</label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select Option </option>
                                <?php foreach ($published_category_info as $v_category) {
                                    ?>
                                    <option value=" <?php echo $v_category->category_id ?>"> <?php echo $v_category->category_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Manufacture Name</label>
                        <div class="controls">
                            <select name="manufacture_id">
                                <?php foreach ($published_manufacture_info as $v_manufacture) {
                                    ?>
                                    <option value=" <?php echo $v_manufacture->manufacture_id ?>"> <?php echo $v_manufacture->manufacture_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="product_short_description"></textarea>
                        </div>

                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="product_long_description"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_price">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product New Price</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_new_price">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_quantity">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Is Featured</label>
                        <div class="controls">
                            <input type="checkbox" class="span6 typeahead" id="typeahead"  name="is_featured">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" id="typeahead"  name="product_image">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Option </option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->
