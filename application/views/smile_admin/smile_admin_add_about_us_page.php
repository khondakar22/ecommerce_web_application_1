<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons zoom_in"><i></i> Add About Us</h3>

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

    <form action="<?php echo base_url();?>s_s_a/save_about" method="post" enctype="multipart/form-data" >
        <div class="widget widget-2 widget-tabs">
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>About Us Description and Title</a></li>
                    <li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Add Image</a></li>
                    <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Publication Status</a></li>

                </ul>
            </div>
            <div class="widget-body" style="padding: 10px;">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">
                       <div class="row-fluid">
                            <div class="span3">
                                <strong>Menu Category </strong>
                                <p class="muted">Choose Category For About Us Page</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Header Category</label>
                                <select name="smile_header_category_id">
                                    <option> Select Category.. </option>
                                    <?php
                                    foreach ($all_header_menu as $v_category) {
                                        ?>
                                        <option value="<?php echo $v_category->smile_header_category_id; ?>"><?php echo $v_category->smile_header_category_name; ?></option>

                                    <?php } ?>
                                </select>
                                <div class="separator"></div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Heading title</strong>
                                <p class="muted">Enter Your Big Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Big Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_big_heading" placeholder="Enter Big Heading title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Small Heading title</strong>
                                <p class="muted">Enter Your Small Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Samll Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_small_heading" placeholder="Enter Small Heading title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Small Sub Heading title</strong>
                                <p class="muted">Enter Your Small First Sub Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Samll Sub First Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_small_heading_first_title" placeholder="Enter Samll Heading First title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Small Sub Heading title</strong>
                                <p class="muted">Enter Your Small Second Sub Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Samll Sub Second Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_small_heading_second_title" placeholder="Enter Small Heading Second title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Small Sub Heading title</strong>
                                <p class="muted">Enter Your Small Third Sub Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Samll Sub Third Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_small_heading_third_title" placeholder="Enter Small Heading Third title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Small Sub Heading title</strong>
                                <p class="muted">Enter Your Small Fourth Sub Heading Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Samll Sub Fourth Title Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_page_small_heading_fourth_title" placeholder="Enter Small Heading Fourth title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Heading Description</strong>
                                <p class="muted">Describe Big Heading First Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_big_heading_first_image_first_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Big Heading Description</strong>
                                <p class="muted">Describe Big Heading Second Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_big_heading_second_image_second_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Small Heading Description</strong>
                                <p class="muted">Describe Small Heading First Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_small_heading_first_title_first_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Small Heading Description</strong>
                                <p class="muted">Describe Small Heading Second Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_small_heading_second_title_second_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Small Heading Description</strong>
                                <p class="muted">Describe Small Heading Third Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_small_heading_third_title_third_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Small Heading Description</strong>
                                <p class="muted">Describe Small Heading Fourth Description</p>
                            </div>
                            <div class="span9">
                                <label for="textDescription">Description</label>
                                <textarea id="textDescription" name="smile_page_small_heading_fourth_title_fourth_description" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    <div class="tab-pane" id="productPhotosTab">

                        <input type="file" name="smile_about_image"> <br>
                        <input type="file" name="smile_heading_image">
                    
                    </div>
                    <!-- Photos END -->

                    <!-- Attributes -->
                    <div class="tab-pane" id="productAttributesTab">
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Publicaiton Status</strong>
                                <p class="muted">Select Your Banner Publication Status</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Publication</label>
                                <select name="smile_page_publication_status">
                                    <optgroup>
                                        <option>Select... </option>
                                        <option value="1">Yes </option>
                                        <option value="0">No </option>
                                    </optgroup>

                                </select>
                                <div class="separator"></div>
                            </div>
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