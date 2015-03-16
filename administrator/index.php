<?php
include("includes/config.php");
if(!isset($_SESSION['adminuser']))
{
?>
<script language="javascript">window.location.href=('login.php');</script>
<?php
}
$section = "index";
?>
<?php require_once("includes/header.php");?>
  <p>&nbsp;</p>
  <div style="float:left">
     <ul class="shortcut-buttons-set">
      <li>
        <a href="managebooks.php?sortstatus=0"><div style="background:#ccc;border-radius:100%;height:200px;width:200px;position:absolute;margin-left:280px;">
        <p style="margin-left:30px;position:absolute;border-radius:5px;height:30px;width:100px;background:tomato;padding:10px;color:#fbfbfb"><b><?php 
                                    $query1="select * from download WHERE status=0";
                                                  $result1=mysql_query($query1);
                                                 $count=mysql_num_rows($result1);
                                                  echo $count;
                                                 ?> </b>Activation Requests<p>
         <img src="./img/bell.png" style="margin-left:25px;height:150px;width:150px">
       </div></a>
        <a class="shortcut-button" href="addbook.php"><span> <img src="resources/images/icons/image_add_48.png" alt="icon" width="48" height="48" /><br />
        Add Notes  </span></a>
      </li>
      <li><a class="shortcut-button" href="managebooks.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
        Manage Notes </span></a></li>
        
    </ul>
    <ul class="shortcut-buttons-set">
      <li><a class="shortcut-button" href="addcourse.php"><span> <img src="resources/images/icons/image_add_48.png" alt="icon" width="48" height="48" /><br />
        Add Course </span></a></li>
      <li><a class="shortcut-button" href="managecourse.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
        Manage Course </span></a></li>
        
    </ul>
      <ul class="shortcut-buttons-set">
        <li><a class="shortcut-button" href="addsubject.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
         Add Subjects</span></a></li>
        <li><a class="shortcut-button" href="managesubject.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
        Manage Subjects </span></a></li>
         
        
      </ul>
    

   
      <ul class="shortcut-buttons-set">
        <li><a class="shortcut-button" href="addchapter.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
        Add Chapters </span></a></li>
         <li><a class="shortcut-button" href="managechapter.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
        Manage Chapters </span></a></li>
      </ul>
      <ul class="shortcut-buttons-set">
        <li><a class="shortcut-button" href="addquiz.php"><span> <img src="resources/images/icons/managegallery.png" alt="icon" width="48" height="48" /><br />
          Add Question</span></a></li>
        <li><a class="shortcut-button" href="managequiz.php"><span> <img src="resources/images/icons/manage_services.png" alt="icon" width="48" height="48" /><br />
          Manage Questions</span></a></li>

      </ul>
      <div class="clear"></div>
    </div>
    <div style="clear:both"></div>
    <!-- -->

      <div style="float:left">
      <ul class="shortcut-buttons-set">
         <li><a class="shortcut-button" href="quizresults.php"><span> <img src="resources/images/icons/manage_services.png" alt="icon" width="48" height="48" /><br />
          Test Results</span></a></li>
        
      </ul>
      <div class="clear"></div>
    </div>
 <!-- -->
  </div>
</body>
</html>
