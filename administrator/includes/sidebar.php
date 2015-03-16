<div id="sidebar-wrapper">
  <!-- Sidebar with logo and menu -->
  <h1 id="sidebar-title"><a href="javascript:void(0);">CIPLTECH ADMIN</a></h1>
  <!-- Logo (221px wide) -->
  <a href="javascript:void(0);"><img id="logo" src="images/logo.png" alt="CIPLTECH" width="220"/></a>
  <!-- Sidebar Profile links -->
  <div id="profile-links"> Welcome, <a href="javascript:void(0);" title="">
    <?=$_SESSION['adminName']?>
    </a><br />
    <br />
    <a href="#" title="View the Site" target="_blank">View the Site</a> | <a href="logout.php" title="Sign Out">Sign Out</a> </div>
  <ul id="main-nav">
    <!-- Accordion Menu -->
    <li> <a href="index.php" class="nav-top-item no-submenu "><? if($section=="index"){echo  'current'; }?>Dashboard </a> </li>
  
    <li> <a href="#" class="nav-top-item "><? if($section=="Course"){echo 'current'; }?> Course Managment </a>
      <ul>
         <? if(isset($page)=="AddCourse"){echo 'class="current"'; }?><li><a href="addcourse.php">Add Course</a></li>
        <? if(isset($page)=="ManageCourse"){echo 'class="current"'; }?>  <li><a href="managecourse.php">Manage Course</a></li>
      </ul>
    </li>
    <li> <a href="#" class="nav-top-item"> <? if($section=="Quiz"){echo 'current'; }?>Quiz Managment </a>
      <ul>
         <? if(isset($page)=="addquiz"){echo 'class="current"'; }?><li><a href="addquiz.php">Add Quiz</a></li>
        <? if(isset($page)=="managequiz"){echo 'class="current"'; }?>  <li><a href="managequiz.php">Manage Quiz</a></li>
      </ul>
    </li>
   <!-- <li> <a href="#" class="nav-top-item <? if($section=="Product"){echo 'current'; }?>"> Product Managment </a>
      <ul>
        <li><a <? if($page=="addproduct"){echo 'class="current"'; }?>href="addprod.php">Add Product</a></li>
        <li><a <? if($page=="manageproduct"){echo 'class="current"'; }?> href="manageprod.php">Manage Product</a></li>
      </ul>
    </li>
    <li> <a href="#" class="nav-top-item <? if($section=="Customer"){echo 'current'; }?>"> Customer Managment </a>
      <ul>
        <li><a <? if($page=="managecustomer"){echo 'class="current"'; }?> href="managecustomer.php">Manage Customer</a></li>
      </ul>
    </li> -->
    
   
  </ul>
  <!-- End #main-nav -->
</div>
