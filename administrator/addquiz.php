<?php

require_once("includes/config.php");
require_once("functions.php");

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
  <div style="background:#009900;width:250px;padding:10px;">Chapter Added Successfully<img src="./img/tick.png" style="margin-left:20px;height:14px;widht:17px;"></div>
  <?php
}
    ?>
    
    <div class="content-box">
      <div class="content-box-header">
        <h3>Add Quiz</h3>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form name="frmcat" action="add-quiz-process.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <fieldset>
              <script type="text/javascript">
function getsubject() {
  var e = document.getElementById("course");
    var f = e.options[e.selectedIndex].value;
      $.ajax({url: 'ajaxgetsubject.php?svalue='+f,
             success: function(output) {
              document.getElementById("subject").innerHTML=output;
                //alert(output);
               // $('#'+list_target_id).html(output);
            },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + " "+ thrownError);
          }});}

      function getchapter() {
  var e = document.getElementById("subject");
    var f = e.options[e.selectedIndex].value;
      $.ajax({url: 'ajaxgetchapter.php?svalue='+f,
             success: function(output) {
              document.getElementById("chapter").innerHTML=output;
                //alert(output);
               // $('#'+list_target_id).html(output);
            },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + " "+ thrownError);
          }});}
</script>
               <p>
                <label>Select Course From List</label>
                <select name="course" class="small-input" id="course" Onchange="getsubject();">
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
                <label>Select Subject</label>
              
                <select name="subject" id="subject" Onchange="getchapter();">

                       
                </select>
                <br />
                <span id="msg-details"></span><small>Select chapter</small> </p>
              <p>
                <label>Select chapter</label>

              
                <select name="exm_year" id="chapter" >
                
                
                </select>
                <br />
                <span id="msg-details"></span><small>Select chapter which you want to create Question</small> </p>
 <p>
                <label>Question</label>
                <textarea cols="80" id="question" name="question" rows="10"></textarea>
                <br />
                <span id="msg-details"></span><small>Type your Question Here</small> 
                 
                </p>
                 
                <p>
                <label>Answer 1</label>
               <input type="text" name="Ans1" id="Ans1" class="text-input" value=" " style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"> </span>
                <br />
                <span id="msg-details"></span><small>Type Answer First</small> </p>
                <p>
                <label>Answer 2</label>
               <input type="text" name="Ans2" id="Ans2" class="text-input" value=" " style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"> </span>
                <br />
                <span id="msg-details"></span><small>Type Answer second</small> </p>
                <p>
                <label>Answer 3</label>
               <input type="text" name="Ans3" id="Ans3" class="text-input" value=" " style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"> </span>
                <br />
                <span id="msg-details"></span><small>Type Answer Third</small> </p>
                <p>
                <label>Answer 4</label>
               <input type="text" name="Ans4" id="Ans4" class="text-input" value=" " style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"> </span>
                <br />
                <span id="msg-details"></span><small>Type Answer Fourth</small> </p>
              
              
              <p>
                <label>Correct Answer</label>
               <input type="text" name="corrcAns" id="corrcAns" class="text-input small-input" value=" " style="width:500px;" /> 
               <span style="color:#F00; font-weight:bold;"> </span>
                <br />
                <span id="msg-details"></span><small>Type Correct Answer If your answer is Answer 1 Than put 1.</small> </p>
              
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
