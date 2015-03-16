<?php

require_once("includes/config.php");
require_once("functions.php");

if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

$section = "Quiz";

$page = "managequiz";

$error = '';

if(isset($_POST['save']) && $_POST['save']=="Save"){

	editQuestion($_POST,$error);
}

 $dtls = getQuestion($_GET['id']);



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
          <form name="frmcat" action="" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <fieldset>
              <p>
                <label>Choose Course</label>
                <select name="course_prt">
                  <option value="0">Choose Course</option>
                  <?=GetCourseTree(0,0,$dtls['quiz_course_id']);?>
                </select>
                <br />
                <span id="msg-details"></span><small>Select Course which you want to create Quiz</small> </p>
                
                <p>
                <label>Select Chapter Name</label>
                
                <select name="exm_year">
                                    <option value="0">Choose a Chapter</option>
                                                     <?php
                                                        $query="select * from quiz_chapter_name";
                                                  $result=mysql_query($query);
                                                  while($row=mysql_fetch_array($result)){
                                                  echo "<option value='";echo $row[1];echo"'>"; echo $row[1];echo'</option>';
                                                  }
                                                  ?>
                 
                </select>
                <br />
                <span id="msg-details"></span><small>Select Course which you want to create Quiz</small> </p>
                
              <p>
              <p>
              <p>
                <label>Question</label>
                <textarea cols="80" id="question" name="question" rows="10"><?=output($dtls['quiz_qust'])?></textarea>
                <br />
                <span id="msg-details"></span><small>Type your Question Here</small> 
                 <script>
			     CKEDITOR.replace( 'question' );
			  </script>
                </p>
                <p>
                <label>Answer 1</label>
               <input type="text" name="Ans1" id="Ans1" class="text-input" value="<?=output($dtls['quiz_ans1'])?>" style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                <br />
                <span id="msg-details"></span><small>Type Answer First</small> </p>
                <p>
                <label>Answer 2</label>
               <input type="text" name="Ans2" id="Ans2" class="text-input" value="<?=output($dtls['quiz_ans2'])?>" style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                <br />
                <span id="msg-details"></span><small>Type Answer second</small> </p>
                <p>
                <label>Answer 3</label>
               <input type="text" name="Ans3" id="Ans3" class="text-input" value="<?=output($dtls['quiz_ans3'])?>" style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                <br />
                <span id="msg-details"></span><small>Type Answer Third</small> </p>
                <p>
                <label>Answer 4</label>
               <input type="text" name="Ans4" id="Ans4" class="text-input" value="<?=output($dtls['quiz_ans4'])?>" style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                <br />
                <span id="msg-details"></span><small>Type Answer Fourth</small> </p>
              
              
              <p>
                <label>Correct Answer</label>
               <input type="text" name="corrcAns" id="corrcAns" class="text-input small-input" value="<?=$dtls['corr_answer'];?>" style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"><?php if($error!="") echo $error;?></span>
                <br />
                <span id="msg-details"></span><small>Type Correct Answer If your answer is Answer 1 Than put 1.</small> </p>
              
              <p>
              <label>Select Status</label>
              <select name="status" class="small-input">
                  <option value="Active" <? if($dtls['status']=="Active"){ echo "selected"; }?>>Active</option>
                  <option value="Inactive" <? if($dtls['status']=="Inactive"){ echo "selected"; }?>>Inactive</option>
                </select>
              </p>
              <p>
               <input type="hidden" name="id" value="<?=$dtls['quiz_id'];?>" />
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