<?php

require_once("includes/config.php");


if(!isset($_SESSION['adminuser'])){
 header ("location : login.php");
}

?>
<?php require_once("includes/header.php");?>
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
</script>

    <div class="clear"></div>
    <!-- End .clear -->
        <?php 
if(isset($_GET['uploaded']))
{ ?>
  <div style="background:#009900;width:250px;padding:10px;color:#fbfbfb">Notes Added Successfully<img src="./img/tick.png" style="margin-left:20px;height:14px;widht:17px;"></div>
  <?php
}
    ?>
    
    <div class="content-box">
      <div class="content-box-header">
        <h3>Add Books to download</h3>
        <div class="clear"></div>
      </div>
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form name="frmmenu" action="addbook-process.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm();">
            <fieldset>
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
              
                <select name="subject" id="subject">
                       
                </select>
                <br />
                <span id="msg-details"></span><small>Select chapter</small> </p>

                <p>
                <label>Select Module</label>
              
                <select name="module">
                       <option value="1">Module 1</option>
                       <option value="2">Module 2</option>
                       <option value="2">Module 3</option>
                </select>
                <br />
                <span id="msg-details"></span><small>Status</small> </p>
                    <p>
                <label>Select Module</label>
              
                <select name="status">
                      <option value="1">Active</option>
                       <option value="0">Deactive</option>
                       
                </select>
                <br />
                <span id="msg-details"></span><small>Select Module for your chapter</small> </p>
                  <p>
                <label>BOOK NAME</label>
              
               <input type="text" class="text-input small-input" value="" name="bookname">
                <br />
                <span id="msg-details"></span><small>Type your books name</small> </p>

              <p>
                <label>Upload Here</label>
               <input type="file" name="fileToUpload" id="fileToUpload" class="text-input small-input" value=""></span>
               <br>
                <span id="msg-details"></span><small>click to upload the book</small> </p>
               
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
