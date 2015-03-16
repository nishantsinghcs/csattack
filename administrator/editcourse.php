<?php

require_once("includes/config.php");
require_once("functions.php");

if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

$section = "Course";

$page = "ManageCourse";
$error = '';

if(isset($_POST['save']) && $_POST['save']=="Save"){

	editCourse($_POST,$_FILES,$error);
}

 $dtls = getCourse($_GET['id']);



?>

<?php require_once("includes/header.php");?>

    <div class="clear"></div>
    <div class="content-box">
      <div class="content-box-header">
        <h3>Edit Course </h3>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form name="frmcourse" action="" method="post" enctype="multipart/form-data" >
            <fieldset>
               
              <p>
                <label>Course Name</label>
               <input type="text" name="course_name" id="course_name" class="text-input small-input" value="<?=output($dtls['course_name'])?>" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                
                <br />
                <span id="msg-details"></span><small>Type Desired Main Course Name</small> </p>
              <p>
                <label>Main Course</label>
                 <select name="course_prt"><option value="0">Select Course Menu</option><?=GetCourseTree(0,0,$dtls['course_prt_id']);?></select>
                 <br />
                <span id="msg-details"></span><small>Select Course if you want to create Sub Course</small> </p>
              </p>
              <p>
                <label>Course Icon</label>
                <input class="text-input small-input" type="file" id="course_icon" name="course_icon" />
                <span id="msg-pimage"></span> <br />
                <small>Upload Course Icon</small><br /> 
                <img src="../Banner/courses/Icon/<?php echo $dtls['course_icon'];?>" width="200" height="200" />

                </p>
              <p>
                <label>Course Banner</label>
                <input class="text-input small-input" type="file" id="course_banner" name="course_banner" />
                <span id="msg-pimage"></span> <br />
                <small>Upload Course Banner</small><br /> 
                <img src="../Banner/courses/<?php echo $dtls['course_banner'];?>" width="350" height="200" />
                </p>
              <p>
              <p>
                <label>Description</label>
                <textarea cols="80" id="course_desc" name="course_desc" rows="10"><?=output($dtls['course_description']);?></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Service Description</small> </p>
              <p>
              <script>
			     CKEDITOR.replace( 'course_desc' );
			  </script>
              <label>Meta Title</label>
                <textarea cols="10" id="meta_title" name="meta_title" rows="6"><?=$dtls['meta_title']?></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Title</small> </p>
                 <p>
                <label>Meta Keyword</label>
                <textarea cols="80" id="meta_keyword" name="meta_keyword" rows="6"><?=$dtls['meta_keyword']?></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Keyword</small> </p>
                 <p>
                <label>Meta Description</label>
                <textarea cols="80" id="meta_desc" name="meta_desc" rows="6"><?=$dtls['meta_desc']?></textarea>
                <br />
                <span id="msg-details"></span><small>Type Little Bit Page Description</small> </p>
                <label>Select Status</label>
                <select name="status" class="small-input">
                  <option value="Active" <? if($dtls['course_status']=="Active"){ echo "selected"; }?>>Active</option>
                  <option value="Inactive" <? if($dtls['course_status']=="Inactive"){ echo "selected"; }?>>Inactive</option>
                </select>
              </p>
              <p>
                <input type="hidden" name="id" value="<?=$dtls['course_id']?>" />
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