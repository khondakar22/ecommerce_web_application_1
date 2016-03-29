<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cart_in"><i></i> Add product</h3>

        <div class="clearfix"></div>
    </div>
    <div class="separator"></div> 
    
    <div>
            <h3 style="color: #000099">
                <?php
                $msg = $this->session->userdata('message');
                if (isset($msg)) {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h3>
        </div>

    <form action="<?php echo base_url();?>s_s_a/save_product" method="post" enctype="multipart/form-data" >
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
                                <select name="smile_menubar_category_id">
                                    <option> Select Category.. </option>
                                    <?php
                                    foreach ($all_published_main_menu as $v_category) {
                                        ?>
                                        <option value="<?php echo $v_category->smile_menubar_category_id; ?>"><?php echo $v_category->smile_menubar_category_name; ?></option>

                                    <?php } ?>
                                </select>
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
                                <select name="smile_sub_menubar_category_id">
                                    <option> Select Category.. </option>
                                    <?php
                                    foreach ($all_published_sub_menu as $v_sub_category) {
                                        ?>
                                        <option value="<?php echo $v_sub_category->smile_sub_menubar_category_id; ?>"><?php echo $v_sub_category->smile_sub_menubar_category_name; ?></option>

                                    <?php } ?>
                                </select>
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
                                <input type="text"  id="inputTitle" class="span6" name="smile_product_name" placeholder="Enter product title ..." />
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
                                <textarea id="textDescription" name="smile_product_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    <div class="tab-pane" id="productPhotosTab">

                        <input type="file" name="smile_product_image">
                    
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
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_qunatity" placeholder="Enter product title ..." />
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
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_price" placeholder="Enter product title ..." />
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
                                    <input type="text" id="inputTitle" class="span6" name="smile_product_model_name" placeholder="Enter product title ..." />
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
                        <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons ok_2"><i></i>Save</button>

                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </form>




</div>