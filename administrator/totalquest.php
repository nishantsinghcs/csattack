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

$course = getCourse($_GET['courseId']);

if(isset($_GET['id']) && $_GET['action']=="del"){

	delQuestionByYear($_GET['id'],$_GET['year']);

}

$sql = "select count(*) as totalQust,examination_year from quiz_question WHERE quiz_course_id = '".$_GET['courseId']."' group by examination_year";		

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
        <h3><?php echo $course['course_name']; ?> Question Chapter Wise</h3>
        <div class="clear"></div>
      </div>
      
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
          
                        <?php
						if(isset($_GET['msg']))
						{?>
          <div class="notification success png_bg"> <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>
                           <?php  if($_GET['msg']=="deleted"){

								    echo "Quiz has been successfully Deleted.";

							     }
							?>
            </div>
          </div>
                       <?php } ?>
          
          <table>
            <form name="mngstate" id="mngstate" method="post" action="">
              <thead>
                <tr>
                  <th>Chapter Name</th>
                  <th>Number Of Question</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
			   <?php
           
                    if($row > 0){

                       while($data = mysql_fetch_object($rs)){
                        
                      
			  ?>
                <tr>
                  <td><?php echo output($data->examination_year)?></td>
                 <td align="center">
				 <?php  
				   echo "<a href='quizquestions.php?courseId=$_GET[courseId]&year=$data->examination_year'>".$data->totalQust.'</a>';
				 ?>
                 </td>
                 <td><a href="quizquestions.php?id=<?php echo $_GET['courseId'].'&year='.$data->examination_year;?>&action=del" title="Delete" onClick="return confirm('Sure you want to delete this Course');"><img src="resources/images/icons/cross.png" alt="Delete" /></a></td>
                </tr>
                <?php } }else{ ?>
                <tr>
                  <td colspan="7">Yet No Quiz Added.</td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="7">
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