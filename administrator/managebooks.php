<?php

require_once("includes/config.php");

require_once('ps_pagination.php');
require_once("functions.php");

if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

$section = "Course";

$page = "ManageBooks";

$paging=new Page();


if(isset($_GET['id']) && $_GET['action']=="del"){

	delbook($_GET['id']);

}
if(isset($_GET['id']) && $_GET['action']=="deactivate"){

  deactivatebook($_GET['id']);

}
if(isset($_GET['id']) && $_GET['action']=="activate"){

  activatebook($_GET['id']);

}
if(isset($_POST['apply'])){

	updateCourse($_POST);	

}



if(isset($_GET['sortcourse']))
{
  $coursee=$_GET['sortcourse'];
  $sql = "select * from download WHERE course='$coursee'"; 
}
elseif (isset($_GET['sortsubject'])) {
   $subjectt=$_GET['sortsubject'];
   $sql = "select * from download WHERE subject_name='$subjectt'";  
}
elseif(isset($_GET['sortstatus'])){
  $status=$_GET['sortstatus'];
   $sql = "select * from download WHERE status='$status'";  

}
else{
$sql = "select * from download ";	
}	

$res = mysql_query($sql);

$row = mysql_num_rows($res);

$paging->set_page_data($_SERVER['PHP_SELF'],$row,$limit,$limit,true,true,true);

$res1=mysql_query($paging->get_limit_query($sql));

$pager = new PS_Pagination($conn, $sql, 1000000000, 5, "");

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

							}else if($_GET['msg']=="deactivated")

							{

								echo "BOOK has been deactivated.";

							}else if($_GET['msg']=="deleted")

							{

								echo "BOOK has been Deleted.";

							}else if($_GET['msg']=="activated")

							{

								echo "BOOK has been Activated";

							}else if($_GET['msg']=="inactive")

							{

								echo "BOOK has been Deactivate";

							}

							?>
            </div>
          </div>
                       <?php } ?>

          
          <table>
            <form name="mngstate" id="mngstate" method="post" action="">
              <input type="button" value="Remove filter see all notes" Onclick="rmsort();">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Notes Name</th>
                  <th>
                    <select name="course" class="small-input" id="course" Onchange="getsubject();">
                  <option value="0">Choose a Course</option>
                                                     <?php
                                                   $query112="select * from quiz_course";
                                                  $result112=mysql_query($query112);
                                                  while($row112=mysql_fetch_array($result112)){
                                                  echo "<option value='";echo $row112[1];echo"'>"; echo $row112[1];echo'</option>';
                                                  }
                                                  ?>
                </select>
                <input type="button" id="sortt" value="sort" Onclick="sort();">
              </th>
                  <th><select name="subject" id="subject">
                    <option> Select Subject</option>>
                </select>
                <input type="button" id="sortt" value="sort" Onclick="sortsub();">
              </th>
                  <th>
                    <select id="status">
                    <option>Status</option>
                    <option value=1>Active</option>
                      <option value=0>Deactive</option>
                  </select>
                    <input type="button" value="Sort" Onclick="sortstatus();">
                </th>
                  <th>Uploaded by</th>
                  <th>ACTIVATE/DEACTIVATE</th>
                  <th>Delete</th>
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
                  <td><input type="checkbox" name="stId[]" id="stId" value="<?=$data->slno?>" /></td>
                  <td><?=output($data->book_name)?></td>
                  <td><?php echo ($data->course);?></td>
                  <td><?=output($data->subject_name) ?></td>
                  <td><?=output($data->status) ?></td>
                  <td><?=output($data->uploadername) ?></td>
                  <?php if($data->status==1){ ?>
                   
                    <td><a href="managebooks.php?id=<?=$data->slno ?>&action=deactivate" title="Dactivate" onClick="return confirm("Sure you want to activate this book");">
                    <img src="resources/images/icons/exclamation.png" alt="Delete" />DEACTIVATE
                  </a>
                </td>
                  <?php } 
                  else{ ?>
                   
                    <td><a href="managebooks.php?id=<?=$data->slno ?>&action=activate" title="Dactivate" onClick="return confirm("Sure you want to deactivate this book");">
                    <img src="resources/images/icons/add.gif" alt="Activate" />ACTIVATE
                  </a>
                </td>
                <?php 
                  }
                  ?>


                  <td><a href="managebooks.php?id=<?=$data->slno?>&action=del" title="Delete" onClick="return confirm('Sure you want to delete this book');">
                    <img src="resources/images/icons/cross.png" alt="Delete" />
                  </a>
                </td>

                
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

<script type="text/javascript">
function sort()
{
$(function(){
 
     var e = document.getElementById("course");
    var f = e.options[e.selectedIndex].value;
    window.location='./managebooks.php?sortcourse=' + f
 
});
}
function sortsub()
{
$(function(){
 
     var e = document.getElementById("subject");
    var f = e.options[e.selectedIndex].value;
    window.location='./managebooks.php?sortsubject=' + f
 
});
}
function sortstatus(){
   var e = document.getElementById("status");
    var f = e.options[e.selectedIndex].value;
    window.location='./managebooks.php?sortstatus=' + f

}
function rmsort(){
   window.location='./managebooks.php';

}
</script>
 <script type="text/javascript">
 
function getsubject() {
  var e = document.getElementById("course");
    var f = e.options[e.selectedIndex].value;
  $.ajax({url: 'ajaxgetsubject.php?svalue='+f,
             success: function(output) {
              document.getElementById("subject").innerHTML=output;
               },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + " "+ thrownError);
          }});}

     
</script>