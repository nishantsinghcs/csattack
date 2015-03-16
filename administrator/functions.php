<?php

    ini_set('memory_limit', '-1');
	
	function getExtension($str) {
			 $i = strrpos($str,".");
			 if (!$i) { return ""; }
			 $l = strlen($str) - $i;
			 $ext = substr($str,$i+1,$l);
			 return $ext;
	 }
	function resizeImage($imgSrc,$imgName,$thumbnail_width,$thumbnail_height) { //$imgSrc is a FILE - Returns an image resource.
		//getting the image dimensions  
		list($width_orig, $height_orig) = getimagesize($imgSrc);  
		
		$extension = getExtension($imgName);
		$extension = strtolower($extension);
		if($extension=="jpg" || $extension=="jpeg" )
		{
		 $myImage = imagecreatefromjpeg($imgSrc);
		}
		else if($extension=="png")
		{
		 $myImage = imagecreatefrompng($imgSrc);
		}
		else 
		{
		 $myImage = imagecreatefromgif($imgSrc);
		}
		 
		$ratio_orig = $width_orig/$height_orig;
		  
		if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
		   $new_height = $thumbnail_width/$ratio_orig;
		   $new_width = $thumbnail_width;
		} else {
		   $new_width = $thumbnail_height*$ratio_orig;
		   $new_height = $thumbnail_height;
		}
		  
		$x_mid = $new_width/2;  //horizontal middle
		$y_mid = $new_height/2; //vertical middle
		  
		$process = imagecreatetruecolor(round($new_width), round($new_height)); 
		  
		imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
		$thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height); 
		imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
	  
		imagedestroy($process);
		imagedestroy($myImage);
		return $thumb;
	}
 

function AdminLogin($req,&$outputMsg)
{
	$sqlLogin = "select * from admin where adminuser='".trim($req['username'])."' and password='".trim($req['userPassword'])."'";
	
	$resLogin = mysql_query($sqlLogin);
	
	$rowLogin = mysql_num_rows($resLogin);
	
	if($rowLogin > 0){
	
		$dataLogin = mysql_fetch_object($resLogin);
	
		$_SESSION['adminuser'] = $dataLogin->id;
	
		$_SESSION['adminName'] = $dataLogin->adminuser;

	    header("location:index.php");
        
		return true;
	  
    }else{
	 
	 $outputMsg = 'Invalid Username or Password';
	 return false; 	
	 
	}
}


function getAdminInfo(){

	$sql = mysql_query("select * from admin");
	$data = mysql_fetch_object($sql);
	return $data;

}  

function chkCourse($name){
	
	$countQur = mysql_num_rows(mysql_query("select course_name from quiz_course where course_name = '".$name."' "));
	if($countQur > 0)
	return true;
}

function getCourse($Id){
	
	 $getQur = mysql_fetch_assoc(mysql_query("select * from quiz_course where course_id = '".$Id."' "));
	 return $getQur;
}




function CountQuestion($Id){
	
	 $numofqust = mysql_num_rows(mysql_query("select course_id from quiz_questions where course_id = '".$Id."' "));
	 return $numofqust;
}

function GetCourseTree($parent,$level,$mtch) 
{
	$sql = "select * from quiz_course where course_prt_id = '$parent' and course_status = 'Active' order by course_name Asc";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) 
	{
		 $select = ($row['course_id']==$mtch)?'selected':'';
		 echo "<option value='".$row['course_id']."' $select>".str_repeat("&nbsp;&nbsp;&nbsp;",$level).$row['course_name']."</option>";
		 GetCourseTree($row['course_id'], $level+1,$mtch);
	}
}

function AddCourse($req,$req2,&$outputMsg)
{	
   $course_name = input($req['course_name']);
   $prtId = $req['course_prt'] ? $req['course_prt'] : 0;
   if($course_name != '') {
		 if(chkCourse($course_name))
		 {
			$outputMsg  = 'This Course-name already Exist';
		 }
   }
   if($req2['course_icon']['name']!=""){    
	     
		 $course_icon = time().$req2['course_icon']['name'];
         $imgfile="../Banner/courses/Icon/".$course_icon;
		 move_uploaded_file($req2['course_icon']['tmp_name'],$imgfile);
	}
	if($req2['course_banner']['name']!=""){    
	     
		 $course_banner = time().$req2['course_banner']['name'];
         $imgfile="../Banner/courses/".$course_banner;
		 move_uploaded_file($req2['course_banner']['tmp_name'],$imgfile);
	}
   
   
	if($outputMsg == "") {
	    $sql = mysql_query("insert into quiz_course set course_name='$course_name',course_prt_id='".$prtId."',course_icon='".$course_icon."',course_banner='".$course_banner."', course_description='".input($req['course_desc'])."', meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',meta_desc='".input($req['meta_desc'])."', course_updated_on= '".time()."',course_status='".$req['status']."'");
						   
	    header ("location: managecourse.php?msg=success");
	   return true;
	}
}



function editCourse($req,$req2,&$outputMsg)
{	
   $course_name = input($req['course_name']);
   $prtId = $req['menu_prt'] ? $req['menu_prt'] : 0;
   
	if($req2['course_icon']['name']!=""){    
	     
		 $course_icon = time().$req2['course_icon']['name'];
         $imgfile="../Banner/courses/Icon/".$course_icon;
		 move_uploaded_file($req2['course_icon']['tmp_name'],$imgfile);
		 $cond1 = ",course_icon='$course_icon'";
	}
	if($req2['course_banner']['name']!=""){    
	     
		 $course_banner = time().$req2['course_banner']['name'];
         $imgfile="../Banner/courses/".$course_banner;
		 move_uploaded_file($req2['course_banner']['tmp_name'],$imgfile);
		 $cond2 = ",course_banner='$course_banner'";
	}
	
	    $sql = mysql_query("update quiz_course set course_name='$course_name',course_prt_id='".$prtId."', course_description='".input($req['course_desc'])."',meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',meta_desc='".input($req['meta_desc'])."',course_updated_on= '".time()."',course_status='".$req['status']."' $cond1 $cond2 where course_id = '".$req['id']."' ");
						   
	    header ("location: managecourse.php?msg=update");
	   return true;
	 
}


function delCourse($id){
		
		$sql = mysql_query("delete from quiz_course where course_id = '$id'");
		
		 header("location: managecourse.php?msg=deleted");
		 
		return true;
		
}
function delSubject($id){
	$sql = mysql_query("delete from quiz_subject_name where subject_name = '$id'");
		
		 header("location: managesubject.php?msg=deleted");
		 
		return true;
}
function delbook($id){
	
	$yo = mysql_query("select * from download where slno =$id");
	$row=mysql_fetch_array($yo);
	$file= $row[7];
		if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
		else
  { 	$sql = mysql_query("delete from download where slno = '$id'");
  	header("location: managebooks.php?msg=deleted");		}
		 
		return true;
}
function activatebook($id){
			$sql = mysql_query("UPDATE download SET status=1 where slno = $id ");
			header("location: managebooks.php?msg=activated");
		 	return true;
}

function deactivatebook($id){
			$sql = mysql_query("UPDATE download SET status=0 where slno = $id ");
			header("location: managebooks.php?msg=deactivated");
		 	return true;
}

function delChapter($id){
	$sql = mysql_query("delete from quiz_chapter_name where chapter_name = '$id'");
	if($sql)
	{
		
		 header("location: managechapter.php?msg=deleted");
		}
		else{
			 header("location: managechapter.php?msg=notdeleted");
		}
		 
		return true;
}



function updateCourse($req){

    $ids = implode(",",$req['stId']);

			if($req['appAction']=="Active"){
		
				$sql = mysql_query("update quiz_course set course_status ='Active' where course_id in ($ids)");
				
				header ("location: managecourse.php?msg=active");  
			}
	
			if($req['appAction']=="Inactive"){
		
				$sql = mysql_query("update quiz_course set course_status ='Inactive' where course_id in ($ids)");
				 
				header ("location: managecourse.php?msg=inactive"); 
			}
	
			if($req['appAction']=="Delete"){
		
				$sql =  mysql_query("delete from  quiz_course where course_id in ($ids)");
		
				header ("location: managecourse.php?msg=deleted");
			}
}


//function AddQuestion($req,&$outputMsg)
//{	
//
//    if($req['ans_type']=="TF"){    
//		 
//		 $cond = ",question_type='TF',answer1='".input($req['TFAns1'])."',answer2='".input($req['TFAns2'])."',answer3='',answer4=''";
//	}else if($req['ans_type']=="OA"){    
//		 
//         $cond = ",question_type='OA',answer1='".input($req['OneAns1'])."',answer2='".input($req['OneAns2'])."',
//		           answer3='".input($req['OneAns3'])."',answer4='".input($req['OneAns4'])."'";	
//	}else if($req['ans_type']=="MA"){    
//		 
//		 $cond = ",question_type='MA',answer1='".input($req['MultiAns1'])."',answer2='".input($req['MultiAns2'])."',
//		           answer3='".input($req['MultiAns3'])."',answer4='".input($req['MultiAns4'])."'";
//	}
//   
//   
//
//	$sql = mysql_query("insert into quiz_questions set course_id= '".input($req['course_prt'])."',
//		               question_name='".input($req['question'])."',corr_answer='".input($req['corrcAns'])."',update_on='".time()."' $cond");
//						   
//	header ("location: managequiz.php?msg=success");
//	   
//  return true;
//	
//}

function getQuestion($Id){
	
	 $getQur = mysql_fetch_assoc(mysql_query("select * from quiz_question where quiz_id = '".$Id."' "));
	 return $getQur;
}


function AddQuestion($req,&$outputMsg)
{	
	$sql = mysql_query("insert into quiz_question set quiz_course_id= '".input($req['course_prt'])."',
		               quiz_qust='".input($req['question'])."',quiz_ans1='".input($req['Ans1'])."',
		               quiz_ans2='".input($req['Ans2'])."',quiz_ans3='".input($req['Ans3'])."',
		               quiz_ans4='".input($req['Ans4'])."',corr_answer='".input($req['corrcAns'])."',
					   examination_year='".input($req['exm_year'])."',updated_on='".time()."',status='".$req['status']."'
					   ");
					   
					  
						   
	header ("location: managequiz.php?msg=success");
	   
  return true;
	
}


function editQuestion($req,&$outputMsg)
{	
	$sql = mysql_query("UPDATE quiz_question set quiz_course_id= '".input($req['course_prt'])."',
		               quiz_qust='".input($req['question'])."',quiz_ans1='".input($req['Ans1'])."',
		               quiz_ans2='".input($req['Ans2'])."',quiz_ans3='".input($req['Ans3'])."',
		               quiz_ans4='".input($req['Ans4'])."',corr_answer='".input($req['corrcAns'])."',
					   examination_year='".input($req['exm_year'])."',updated_on='".time()."',status='".$req['status']."' 
					   WHERE quiz_id = '".$req['id']."'");
					   
					  
						   
	header ("location: quizquestions.php?courseId=$_GET[courseId]&year=$_GET[year]&msg=update");
	   
  return true;
	
}



function delQuestionByYear($id,$year){
		
		$sql = mysql_query("delete from quiz_question where quiz_course_id = '$id' and examination_year = '$year'");
		
		 header("location: totalquest.php?msg=deleted&courseId=$id");
		 
		return true;
		
}

function delQuiz($id){
		
		$sql = mysql_query("delete from quiz_question where quiz_id = '$id'");
		
		 header("location: quizquestions.php?courseId=$_GET[courseId]&year=$_GET[year]&msg=deleted");
		 
		return true;
		
}


function updateQuiz($req){

    $ids = implode(",",$req['stId']);

			if($req['appAction']=="Active"){
		
				$sql = mysql_query("update quiz_question set status ='Active' where quiz_id in ($ids)");
				
				header ("location: quizquestions.php?courseId=$_GET[courseId]&year=$_GET[year]&msg=active");  
			}
	
			if($req['appAction']=="Inactive"){
		
				$sql = mysql_query("update quiz_question set status ='Inactive' where quiz_id in ($ids)");
				 
				header ("location: quizquestions.php?courseId=$_GET[courseId]&year=$_GET[year]&msg=inactive"); 
			}
	
			if($req['appAction']=="Delete"){
		
				$sql =  mysql_query("delete from  quiz_question where quiz_id in ($ids)");
		
				header("location: quizquestions.php?courseId=$_GET[courseId]&year=$_GET[year]&msg=deleted");
			}
}
	
	
function delMenu($id){
		
		$sql = mysql_query("delete from cipltech_menu where menu_id = '$id'");
		
		 header("location :managemenu.php?msg=deleted");
		 
		return true;
		
}


function chkCategory($name){
	
	$countQur = mysql_num_rows(mysql_query("select cat_name from cipltech_category where cat_name = '".$name."' "));
	if($countQur > 0)
	  return true;
}

function GetCatgTree($parent,$level,$mtch) 
{
	$sql = "select cat_id,cat_name from cipltech_category where cat_prt_id = '$parent' and cat_status = 'Active' order by cat_name Asc";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) 
	{
		 $select = ($row['cat_id']==$mtch)?'selected':'';
		 echo "<option value='".$row['cat_id']."' $select>".str_repeat("&nbsp;&nbsp;&nbsp;",$level).$row['cat_name']."</option>";
		 GetCatgTree($row['cat_id'], $level+1,$mtch);
	}
}

function getCatg($Id){
	
	 $getQur = mysql_fetch_assoc(mysql_query("select * from cipltech_category where cat_id = '".$Id."' "));
	 return $getQur;
}

function addCategory($req,$file,&$outputMsg)
{	

   $cat_name = input($req['cat_name']);
   $prtId    = $req['cat_prt'] ? $req['cat_prt'] : 0;
   $catimg   = rand(10,1000).$file['catImage']['name'];
   $target   = "catImg/".$catimg;
   move_uploaded_file($file["catImage"]["tmp_name"],$target);
   
   
    if($cat_name != '') {
		 if(chkCategory($cat_name))
		 {
			$outputMsg  = 'This Category-name already Exist';
		 }
    }
	if($outputMsg == "") {
	    $sql = mysql_query("insert into cipltech_category set cat_name='$cat_name',cat_prt_id ='".$prtId."',cat_img ='".$catimg."', 
		                   cat_desc='".input($req['cat_desc'])."',meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',
						   meta_desc='".input($req['meta_desc'])."',cat_updated_on= '".time()."',cat_status='".$req['status']."'");
						   
	    header ("location: managecatg.php?msg=success");
	   return true;
	}
}

function editCatg($req,$file,&$outputMsg)
{	
       $cat_name = input($req['cat_name']);
	   $prtId    = $req['cat_prt'] ? $req['cat_prt'] : 0;
	   $sqlimg   = "";
	   if($file['catImage']['name'] != ""){
		   $catimg   = rand(10,1000).$file['catImage']['name'];
		   $target   = "catImg/".$catimg;
		   move_uploaded_file($file["catImage"]["tmp_name"],$target);
		   $cond = ",cat_img='$catimg'";
	   }
	    $sql = mysql_query("update cipltech_category set cat_name='$cat_name',cat_prt_id ='".$prtId."', 
		                   cat_desc='".input($req['cat_desc'])."',meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',
						   meta_desc='".input($req['meta_desc'])."',cat_updated_on= '".time()."',cat_status='".$req['status']."' $cond  
						   where cat_id = '".$req['id']."' ") or die(mysql_error());
						   
	   header ("location: managecatg.php?msg=update");
	   return true;
}

function updateCatg($req){

    $ids = implode(",",$req['stId']);

			if($req['appAction']=="Active"){
		
				$sql = mysql_query("update cipltech_category set cat_status ='Active' where cat_id in ($ids)");
				
				header ("location: managecatg.php?msg=active");  
			}
	
			if($req['appAction']=="Inactive"){
		
				$sql = mysql_query("update cipltech_category set cat_status ='Inactive' where cat_id in ($ids)");
				 
				header ("location: managecatg.php?msg=inactive"); 
			}
	
			if($req['appAction']=="Delete"){
		
				$sql =  mysql_query("delete from  cipltech_category where cat_id in ($ids)");
		
				header("location :managecatg.php?msg=deleted");
			}
}
	
	
function delCatg($id){
		
		$sql = mysql_query("delete from cipltech_category where cat_id = '$id'");
		
		 header("location :managecatg.php?msg=deleted");
		 
		return true;
		
}
function chkProd($name){
	
	$countQur = mysql_num_rows(mysql_query("select prod_name from cipl_tech_prod where prod_name = '".$name."' "));
	if($countQur > 0)
	  return true;
}





function addProd($req,$file,&$outputMsg)
{	

   $prod_name = input($req['prod_name']);
   $prodimg1  = '';
   $prodimg2  = '';
   $prodimg3  = '';
   if($file['prodImage1']['name'] != ""){
	   $prodimg1   = rand(10,1000).$file['prodImage1']['name'];
	   $target1    = "prodImg/".$prodimg1;
	   move_uploaded_file($file["prodImage1"]["tmp_name"],$target1);
   }if($file['prodImage2']['name'] != ""){
	   $prodimg2   = rand(10,1000).$file['prodImage2']['name'];
	   $target2    = "prodImg/".$prodimg2;
	   move_uploaded_file($file["prodImage2"]["tmp_name"],$target2);
   }if($file['prodImage3']['name'] != ""){
	   $prodimg3   = rand(10,1000).$file['prodImage3']['name'];
	   $target3   = "prodImg/".$prodimg3;
	   move_uploaded_file($file["prodImage3"]["tmp_name"],$target3);
   }
   
    if($prod_name != '') {
		 if(chkProd($prod_name))
		 {
			$outputMsg  = 'This Product-name already Exist';
		 }
    }
	if($outputMsg == "") {
	    $sql = mysql_query("insert into cipl_tech_prod set prod_name ='$prod_name',prod_catg_id ='".$req['prodcatg']."',prod_img1 ='".$prodimg1."',
		                   prod_img2 ='".$prodimg2."',prod_img3 ='".$prodimg3."', prod_desc='".input($req['prod_desc'])."',
		                   meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',
						   meta_desc='".input($req['meta_desc'])."',prod_updated_on= '".time()."',prod_status='".$req['status']."'")or die(mysql_error());
						   
	    header ("location: manageprod.php?msg=success");
	   return true;
	}
}

function getProd($Id){
	
	 $getQur = mysql_fetch_assoc(mysql_query("select * from cipl_tech_prod where prod_id = '".$Id."' "));
	 return $getQur;
}

function editProd($req,$file)
{	

   $prod_name = input($req['prod_name']);

   if($file['prodImage1']['name'] != ""){
	   $prodimg1   = rand(10,1000).$file['prodImage1']['name'];
	   $target1    = "prodImg/".$prodimg1;
	   move_uploaded_file($file["prodImage1"]["tmp_name"],$target1);
	   $cond1 = ",prod_img1='$prodimg1'";
   }if($file['prodImage2']['name'] != ""){
	   $prodimg2   = rand(10,1000).$file['prodImage2']['name'];
	   $target2    = "prodImg/".$prodimg2;
	   move_uploaded_file($file["prodImage2"]["tmp_name"],$target2);
	   $cond2 = ",prod_img2='$prodimg2'";
   }if($file['prodImage3']['name'] != ""){
	   $prodimg3   = rand(10,1000).$file['prodImage3']['name'];
	   $target3   = "prodImg/".$prodimg3;
	   move_uploaded_file($file["prodImage3"]["tmp_name"],$target3);
	   $cond3 = ",prod_img3='$prodimg3'";
   }
   

	    $sql = mysql_query("update cipl_tech_prod set prod_name ='$prod_name',prod_catg_id ='".$req['prodcatg']."', prod_desc='".input($req['prod_desc'])."',
		                   meta_title = '".input($req['meta_title'])."',meta_keyword = '".input($req['meta_keyword'])."',meta_desc='".input($req['meta_desc'])."'
						   ,prod_updated_on= '".time()."',prod_status='".$req['status']."' $cond1 $cond2 $cond3 WHERE prod_id = '".$req['id']."'")
						   or die(mysql_error());
						   
	    header ("location: manageprod.php?msg=update");
	   return true;
}

function updateProd($req){

    $ids = implode(",",$req['stId']);

			if($req['appAction']=="Active"){
		
				$sql = mysql_query("update cipl_tech_prod set prod_status ='Active' where prod_id in ($ids)");
				
				header ("location: manageprod.php?msg=active");  
			}
	
			if($req['appAction']=="Inactive"){
		
				$sql = mysql_query("update cipl_tech_prod set prod_status ='Inactive' where prod_id in ($ids)");
				 
				header ("location: manageprod.php?msg=inactive"); 
			}
	
			if($req['appAction']=="Delete"){
		
				$sql =  mysql_query("delete from  cipl_tech_prod where prod_id in ($ids)");
		
				header("location :manageprod.php?msg=deleted");
			}
}
	
	
function delProd($id){
		
		$sql = mysql_query("delete from cipl_tech_prod where prod_id = '$id'");
		
		 header("location :manageprod.php?msg=deleted");
		 
		return true;
		
}

?>