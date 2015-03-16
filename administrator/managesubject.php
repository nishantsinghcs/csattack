<?php

require_once("includes/config.php");

require_once('ps_pagination.php');
require_once("functions.php");

if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

$section = "Course";

$page = "ManageSubject";

$paging=new Page();

if(isset($_GET['id']) && $_GET['action']=="del"){

	delSubject($_GET['id']);

}

if(isset($_POST['apply'])){

	updateCourse($_POST);	

}

$sql = "select * from quiz_subject_name";		

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
                           <?php if($_GET['msg']=="success")

							{

							 	echo "New Course has been successfully added .";

							}else if($_GET['msg']=="update")

							{

								echo "Course has been Updated.";

							}else if($_GET['msg']=="deleted")

							{

								echo "Subject has been Deleted.";

							}else if($_GET['msg']=="active")

							{

								echo "Course has been Activated";

							}else if($_GET['msg']=="inactive")

							{

								echo "Course has been Deactivate";

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
                  <th>Subject Name</th>
                  <th>Course</th>
                  
                  <th>Updated On</th>
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
                  <td><input type="checkbox" name="stId[]" id="stId" value="<?=$data->course_id?>" /></td>
                  <td><?=output($data->subject_name)?></td>
                  <td><?php echo ($data->course_name);?></td>
                  <td><?=output($data->time) ?></td>
                  
                  <td>
                    
                 <a href="managesubject.php?id=<?=$data->subject_name?>&action=del" title="Delete" onClick="return confirm('Sure you want to delete this Subject');"><img src="resources/images/icons/cross.png" alt="Delete" /></a></td>
                </tr>
                <?php } }else{ ?>
                <tr>
                  <td colspan="7">Yet No Course Added.</td>
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