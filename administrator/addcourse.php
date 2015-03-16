<?php

require_once("includes/config.php");


if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}





?>
<?php require_once("includes/header.php");?>

    <div class="clear"></div>
    <!-- End .clear -->
       <?php 
if(isset($_GET['added']))
{ ?>
  <div style="background:#009900;width:250px;padding:10px;color:#fbfbfb">Course Added Successfully<img src="./img/tick.png" style="margin-left:20px;height:14px;widht:17px;"></div>
  <?php
}
    ?>
    
    <div class="content-box">
      <div class="content-box-header">
        <h3>Add Course</h3>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form name="frmmenu" action="addcourse-process.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <fieldset>
              <p>
                <label>Course Name</label>
               <input type="text" name="course_name" id="course_name" class="text-input small-input" value=""></span>
                
                <br />
                <span id="msg-details"></span><small>Type Desired Course Name</small> </p>
               
              </p>
              
             
              <p>
                <label>Course Description</label>
                <textarea cols="80" id="course_desc" name="course_desc" rows="10"></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Course Description</small> </p>
              <p>
              
              <label>Meta Title</label>
                <textarea id="meta_title" name="meta_title" rows="6" style="width:50% !important"></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Title</small> </p>
                 <p>
                <label>Meta Keyword</label>
                <textarea id="meta_keyword" name="meta_keyword" rows="6" style="width:50% !important"></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Keyword</small> </p>
                 <p>
                <label>Meta Description</label>
                <textarea id="meta_desc" name="meta_desc" rows="8" style="width:50% !important"></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Description</small> </p>
                <p>
                <label>Select Status</label>
                <select name="status" class="small-input">
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </p>
              <p>
                <input class="button" type="submit" value="Save" name="save" />
              </p>
            </fieldset>
            <div class="clear"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div id="footer">
      <?php include("includes/footer.php");?>
    </div>
  </div>
</div>
</body>
</html>
