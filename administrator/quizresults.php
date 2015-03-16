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

$sql = "select * from quiz_course";		

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
        <h3>CS-Attack Test Results</h3>
        <div class="clear"></div>
      </div>
      
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
          
                        
                      
          
          <table>
            <form name="mngstate" id="mngstate" method="post" action="">
              <thead>
                <tr>
                  <th>User Email Id:</th>
                  <th>Marks Obtained</th>
                  <th>Total Marks</th>
                  <th>Date Time of Test</th>
                </tr>
              </thead>
              <tbody>
			   <?php
    $query="select * from users";
    $result=mysql_query($query);
    while($row=mysql_fetch_array($result)){
     echo " <tr>
                  <td>  "; ?>

                   <?php
                   echo $row[2];
                    echo"</td>
                 
                 <td align='center'>
				          <a href='#'> "; ?>

                   <?php
                   echo $row[3];
                    echo"</a>
                 </td>
                  <td align='center'>
                  <a href='#'> "; ?>

                   <?php
                   echo $row[5];
                    echo"</a>
                 </td>
                 <td align='center'>
                  <a href='#'> "; ?>

                   <?php
                   echo $row[7];
                    echo"</a>
                 </td>
            </tr>";
         
      }
        ?>



                
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="7">
                    
                    
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