<?php

require_once("includes/config.php");
require_once('ps_pagination.php');
require_once("functions.php");

if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

$section = "Quiz";

$page = "managequiz";

$paging=new Page();

if(isset($_GET['id']) && $_GET['action']=="del"){

	delQuiz($_GET['id']);

}

if(isset($_POST['apply'])){

	updateQuiz($_POST);	

}

$sql = "select * from quiz_question WHERE quiz_course_id ='".$_GET['courseId']."' and examination_year='".$_GET['year']."'";		

$res = mysql_query($sql);

$row = mysql_num_rows($res);

$paging->set_page_data($_SERVER['PHP_SELF'],$row,$limit,$limit,true,true,true);

$res1=mysql_query($paging->get_limit_query($sql));

$pager = new PS_Pagination($conn, $sql, 10, 5, "");

$pager->setDebug(true);

$rs = $pager->paginate();


?>
<?php require_once("includes/header.php");?>

    <div class="clear"></div>
    
    <div class="content-box">
      
      <div class="content-box-header">
        <h3>Menu List</h3>
        <div class="clear"></div>
      </div>
      
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
          
                        <?php
						if(isset($_GET['msg']))
						{?>
          <div class="notification success png_bg"> <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>
                           <?php if($_GET['msg']=="update")

							{

								echo "Quiz has been Updated.";

							}else if($_GET['msg']=="deleted")

							{

								echo "Quiz has been Deleted.";

							}else if($_GET['msg']=="active")

							{

								echo "Quiz has been Activated";

							}else if($_GET['msg']=="inactive")

							{

								echo "Quiz has been Deactivate";

							}

							?>
            </div>
          </div>
                       <?php } ?>
          
          <table>
            <form name="mngstate" id="mngstate" method="post" action="">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Question</th>
                  <th>Answer</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

							if($row > 0)

							{

							while($data = mysql_fetch_object($rs))

							{

							?>
                <tr>
                  <td><input type="checkbox" name="stId[]" id="stId" value="<?=$data->quiz_id?>" /></td>
                  <td><?=output($data->quiz_qust);?></td>
                  <td>
				   <?php $ans = $data->corr_answer; 
				         $ansvalue = 'quiz_ans'.$ans;  
				         echo $data->$ansvalue;?></td>
                  <td><?=$data->status?></td>
                  <td>
                    
                    <a href="editquiz.php?id=<?=$data->quiz_id?>&year=<?=$_GET['year']?>&courseId=<?=$_GET['courseId']?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a> <a href="quizquestions.php?id=<?=$data->quiz_id?>&action=del&year=<?=$_GET['year']?>&courseId=<?=$_GET['courseId']?>" title="Delete" onClick="return confirm('Sure you want to delete this Quiz');"><img src="resources/images/icons/cross.png" alt="Delete" /></a></td>
                </tr>
                <?php } }else{ ?>
                <tr>
                  <td colspan="7">Yet No Course Added.</td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="7"><div class="bulk-actions align-left">
                      <select name="appAction">
                        <option value="">Choose an action...</option>
                        <option value="Active">Activate</option>
                        <option value="Inactive">Deactivate</option>
                        <option value="Delete">Delete</option>
                      </select>
                      <input type="submit" name="apply" value="Apply to selected" class="button" onClick="return isChecked();"  />
                    </div>
                    <div class="pagination"> <? echo $pager->renderFullNav();?> </div>
                    
                    <!-- End .pagination -->
                    
                    <div class="clear"></div></td>
                </tr>
              </tfoot>
            </form>
          </table>
        </div>
        <!-- End #tab1 --> 
        
      </div>
      <!-- End .content-box-content --> 
      
    </div>
    <!-- End .content-box -->
    
    <div class="clear"></div>
    <div id="footer">
      <?php include("includes/footer.php");?>
    </div>
    <!-- End #footer --> 
    
  </div>
  <!-- End #main-content --> 
  
</div>
</body>

<!-- Download From www.exet.tk-->

</html>
<script language="javascript">

function isChecked() {

	var flag = false;	

	for( var i=0; i<document.mngstate.elements.length; i++ ) {

		if( document.mngstate.elements[i].name == "stId[]" && document.mngstate.elements[i].checked ) {		

				flag = true;

				break;

		}

	}

	if(flag==false){

	alert("Please Select atleast one");

	}

	return flag;

}

</script>