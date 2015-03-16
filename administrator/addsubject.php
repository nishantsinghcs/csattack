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
  <div style="background:#009900;width:250px;padding:10px;color:#fbfbfb">Subject Added Successfully<img src="./img/tick.png" style="margin-left:20px;height:14px;widht:17px;"></div>
  <?php
}
    ?>
    
    <div class="content-box">
      <div class="content-box-header">
        <h3>Add Subject into Courses</h3>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form name="frmmenu" action="addsubject-process.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <fieldset>
               <p>
                <label>Select Course From List</label>
                <select name="course" class="small-input">
                  <option value="0">Choose a Course</option>
                                                     <?php
                                                        $query="select * from quiz_course";
                                                  $result=mysql_query($query);
                                                  while($row=mysql_fetch_array($result)){
                                                  echo "<option value='";echo $row[1];echo"'>"; echo $row[1];echo'</option>';
                                                  }
                                                  ?>
                </select>
              </p>
              <p>
                <label>Subject Name</label>
               <input type="text" name="subject_name" id="course_name" class="text-input small-input" value=""></span>
               <br>
                <span id="msg-details"></span><small>Type Desired Subject Name</small> </p>
               
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
