<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons zoom_in"><i></i> Add Banner Slider</h3>

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

    <form action="<?php echo base_url();?>s_s_a/save_banner" method="post" enctype="multipart/form-data" >
        <div class="widget widget-2 widget-tabs">
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Banner Description</a></li>
                    <li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Add Banner</a></li>
                    <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Publication Status</a></li>

                </ul>
            </div>
            <div class="widget-body" style="padding: 10px;">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Banner title</strong>
                                <p class="muted">Enter Your Banner Slider Name Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Banner Name</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_banner_name" placeholder="Enter Banner title ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    <div class="tab-pane" id="productPhotosTab">

                        <input type="file" name="smile_banner_image">
                    
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
                                <select name="smile_banner_publication_status">
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