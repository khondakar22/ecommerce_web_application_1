
<form action="<?php echo base_url();?>welcome/save_product_comment" method="post">
<div class="box">
              <div class="box-content box-rating">
              <a> <span class="button_review">Write Review</span></a>
          </div>
            <div class="box-write">
              <h3 id="review-title">Write a review</h3>
              <span class="label">Your Name:</span>
              <input type="text"  name="smile_comment_user_name">
              <br/>
              <br/>
              <span class="label">Your Review:</span>
              <textarea style="width: 98%;" rows="10" cols="40" name="smile_comment_description"></textarea>
              <input type="hidden" value="<?php echo $product_info->smile_product_id;?>" name="smile_product_id"/>
              <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br/>
              <br/>
              <span class="label">Rating:</span>
              <select name="smile_comment_product_rating_status">
                  <optgroup>
                      <option> Select Your Opinion.. </option>
                      <option value="1" > Low </option>
                      <option value="2" > Average  </option>
                       <option value="3" > Medium  </option>
                       <option value="4" > Good  </option>
                       <option value="5" > Best  </option>
                  </optgroup>
                  
                  
              </select>
              <br/>
              
              <br/>
              
           
              <br/>
              
              <div class="buttons">
                <div class="left">
                    <button type="submit" name="btn" class="btn6""><i></i>Submit Comments</button>
                </div>
              </div>
            </div>
          
        </div>
    
    </form>