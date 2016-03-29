<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons zoom_in"><i></i> Add Smile Contact Information</h3>

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

    <form action="<?php echo base_url();?>s_s_a/save_contact_info" method="post">
        <div class="widget widget-2 widget-tabs">
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Contact Us Information</a></li>
                    

                </ul>
            </div>
            <div class="widget-body" style="padding: 10px;">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Contact Address</strong>
                                <p class="muted">Enter Your Company Address Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Contact</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_contact_address" placeholder="Enter Contact Address Here ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Contact Telephone</strong>
                                <p class="muted">Enter Your Company Telephone Number Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Telephone</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_contact_address_telephone" placeholder="Enter Telephone Number Here ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Contact Email Address</strong>
                                <p class="muted">Enter Your Company Email Address  Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Email Address</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_company_email_address" placeholder="Enter Email Address Here ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">
                            <div class="span3">
                                <strong>Fax Number</strong>
                                <p class="muted">Enter Your Company Fax Number  Here</p>
                            </div>
                            <div class="span9">
                                <label for="inputTitle">Fax Number</label>
                                <input type="text"  id="inputTitle" class="span6" name="smile_contact_address_fax" placeholder="Enter Fax Number Here ..." />
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom" />
                        
                        
                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    
                    <!-- Photos END -->

                    <!-- Attributes -->
                    
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