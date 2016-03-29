<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons settings"><i></i> Edit Product</h3>

        <div class="clearfix"></div>
    </div>
    <div class="separator"></div> 
    
    

    <form name="edit_product_form" action="<?php echo base_url();?>s_s_a/updat_product" method="post" enctype="multipart/form-data" >
        <div class="widget widget-2 widget-tabs">
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a></li>
                    <li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Photos</a></li>

                    <li><a href="#productPriceTab" data-toggle="tab" class="glyphicons table"><i></i>Qty,Price $ Model </a></li>
                    <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Featured & Publication Status</a></li>

                </ul>
            </div>
            <div class="widget-body" style="padding: 10px;">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">

                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Menu Category </strong>
                                <p class="muted">Choose Category For Product</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Menubar Category</label>
                                
                                <input type="text" disabled="disabled"  id="inputTitle" class="span6" name="smile_menubar_category_name" value="<?php echo $select_prodcut_by_sub_men_id->smile_menubar_category_name;?>" />
                                <input type="hidden"  id="inputTitle" class="span6" name="smile_menubar_category_id" value="<?php echo $select_prodcut_by_sub_men_id->smile_menubar_category_id;?>" />
                                
                                
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Sub Category</strong>
                                <p class="muted">Choose Sub Category For Product</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle"> Sub category</label>
                                <input type="text" disabled="disabled"  id="inputTitle" class="span6" name="smile_sub_menubar_category_name" value="<?php echo $select_prodcut_by_sub_men_id->smile_sub_menubar_category_name;?>" />
                                <input type="hidden"  id="inputTitle" class="span6" name="smile_sub_menubar_category_id" value="<?php echo $select_prodcut_by_sub_men_id->smile_sub_menubar_category_id;?>" />
                                
                                
                                
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />



                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Product title</strong>
                                <p class="muted">Enter Your Product Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Title</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_product_name" value="<?php echo $select_prodcut_by_sub_men_id->smile_product_name;?>" />
                                <input type="hidden"  id="inputTitle" class="span6" name="smile_product_id" value="<?php echo $select_prodcut_by_sub_men_id->smile_product_id;?>" />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Description</strong>
                                <p class="muted">Describe Your Product</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_product_description" class="wysihtml5" style="width: 96%;" rows="5"><?php echo $select_prodcut_by_sub_men_id->smile_product_description;?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    <div class="tab-pane" id="productPhotosTab">

                        <input type="file" name="smile_product_image">
                        <img src="<?php echo base_url().$select_prodcut_by_sub_men_id->smile_product_image;?>" width="40" height="60"/>
                    
                    </div>
                    <!-- Photos END -->



                    <!-- Price -->
                    <div class="tab-pane" id="productPriceTab">

                        <div class="tab-pane active" id="productDescriptionTab">
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Product Quantity </strong>
                                    <p class="muted">How many Product of this Item you want store your Database? Please Fill Up the Amount</p>
                                </div>
                                <div class="span9">
                                    <label for="inputTitle">QTY</label>
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_qunatity" value="<?php echo $select_prodcut_by_sub_men_id->smile_product_qunatity;?>" />
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <hr class="separator bottom" />
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Product Price </strong>
                                    <p class="muted">Please Fill up the Price of this product</p>
                                </div>
                                <div class="span9">
                                    <label for="inputTitle">Price (Taka)</label>
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_price" value="<?php echo $select_prodcut_by_sub_men_id->smile_product_price;?>" />
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <hr class="separator bottom" />
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Product Model </strong>
                                    <p class="muted">Please Fill the model name of this product</p>
                                </div>
                                <div class="span9">
                                    <label for="inputTitle">Model Name</label>
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_model_name" value="<?php echo $select_prodcut_by_sub_men_id->smile_product_model_name;?>" />
                                    <div class="separator"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- Price END -->
                    <!-- Attributes -->
                    <div class="tab-pane" id="productAttributesTab">
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Publicaiton Status</strong>
                                <p class="muted">Select Your Product Publication Status</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Publication</label>
                                <select name="smile_product_publication_status">
                                    <optgroup>
                                        <option>Select... </option>
                                        <option value="1">Yes </option>
                                        <option value="0">No </option>
                                    </optgroup>

                                </select>
                                <div class="separator"></div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <hr class="separator bottom" />
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Featured Product</strong>
                                    <p class="muted">Select Your Featured Product</p>
                                </div>
                                <div class="span9">
                                    <label for="inputTitle">Featured</label>
                                    <select name="smile_featured_product">
                                        <optgroup>
                                            <option>Select... </option>
                                            <option value="1">Yes </option>
                                            <option value="0">No </option>
                                        </optgroup>

                                    </select>
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <div class="row-fluid">
                            </div>
                            <!-- Attributes END -->


                        </div>
                    </div>
                </div>
                <div class="heading-buttons">
                    <div class="buttons pull-right" style="margin-top: 0;">
                        <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons ok_2"><i></i>Update</button>

                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </form>




</div>

<script type="text/javascript">
                                    document.forms['edit_product_form'].elements['smile_product_publication_status'].value="<?php echo $select_prodcut_by_sub_men_id->smile_product_publication_status;?>";
                                    document.forms['edit_product_form'].elements['smile_featured_product'].value="<?php echo $select_prodcut_by_sub_men_id->smile_featured_product;?>";
                        </script>