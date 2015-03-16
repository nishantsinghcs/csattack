/*
<!--
	SCRIPT:  exam.js
	PURPOSE: This javascript is used to obtain proper values from the database based on the selection done from drop down and also to properly display the  exam page.
	LOGIC:   1. Initially get the courses for which the logged in user is registered and display in a drop down menu. If not show proper error message.
	2. Based upon the selected course get the subjects which are active in that course and display in a drop down menu.
	3. Based upon the selected subject get the chapters and display them in a multi select box.
	4. Also get the maximum total marks which is possible if all the chapters are selected for test to be taken and display it in drop down box.Also display the difficulty level in the drop down.

	All Rights Reserved
	OWNER:      Prime Softech Solutions Pvt. Ltd., Vasai, India (info@primesoftechsolutions.com)
	AUTHOR:     Parth Tanna 
	UPDATED BY: Parth Tanna (15/04/2012 21:30 pm, adding comments header)

	NOTE: Using this file with or without the header for any commercial purpose is not permitted
		  without a written permission from the owner company
 -->
*/
var ismock;
var chapterwisecount=0;
var course_name="";
var mockcount=0;
var check_box_value;
function getcourse()
{
	
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			
			var select="<select name='course' id='course' style='display:none'";
			
			if(document.URL.indexOf("MntQuestions.php",1)>0  || document.URL.indexOf("DataFeedingAdmin.php",1)>0)
			{
				select+="onchange='getsubject(this.value);'>";
			}
			else
			{
				select+="onchange='getTestCount(this.value);'>";			
			}
            var text = xmlhttp.responseText;
            if (text.search("SQL error") != -1)
            {
                if (user_type == 3)
                    text = "You cannot set any tests.Please contact Prexam admin by <a href='feedback.php'>clicking here.</a>";
                else
                    text = "You are not registered in any course. Please enroll by <a href='courseregister.php'>clicking here.</a>";
                document.getElementById("courselabel").style.display ="block";
                document.getElementById("courselabel").innerHTML = text;
            }
            else
            {
                var temp = eval(xmlhttp.responseText);
                select+="<option value=''>Select Course</option>";
                for (i=0;i<temp.length ;i++ )
                    select+="<option value='"+temp[i]['id']+"'>"+temp[i]['name']+"</option>";
                select+="</select>";
                //alert(select);
                document.getElementById("course1").innerHTML = select;
                document.getElementById("course").style.display ="block";
                document.getElementById("courselabel").style.display ="block";
            }
			
        }
    }
    xmlhttp.open("POST", "getstream.php", true);
    xmlhttp.send();
}
function reset_other()
{
document.getElementById("test_message1").style.visibility ="hidden";
document.getElementById("test_message2").style.visibility ="hidden";
}

function getTestCount(str)
{
reset_other();
var xmlhttp;
url ="getTestCount.php?course_id="+str;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   //alert(xmlhttp.responseText);
	var count=new Array();
	count=xmlhttp.responseText.split('$$$');
    mockcount = parseInt(count[0],10); 
	chapterwisecount = parseInt(count[1],10);
	course_name=count[2];
	//document.getElementById("coursen").innerHTML=count[2];
	//document.getElementById("coursen1").innerHTML=count[2];
	getsubject(str);
    }
  }
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
function enabletest(val)
{
    ismock = val;
    if (val == 1)
    {
	    if(mockcount <= 0)
		{
			//document.getElementById("test_message1").style.display="block";
			//document.getElementById("test_message2").style.display="none";
			document.getElementById("test_message1").style.visibility="visible";
			 if(user_type == 3){
			   document.getElementById("test_message1").innerHTML="Sorry you cannot set mock tests for "+ course_name +" .To get more mock tests,contact PREXAM <a href='feedback.php'> click here.</a> ";
		   }
		   else{
				document.getElementById("test_message1").innerHTML="Sorry your free mock tests for "+ course_name +" are over please <a href='courseregister.php'> click here</a> to register for more testor <a href=registeredcourses.php>add more </a> tests.";
		   }
		   document.getElementById("test_message2").style.visibility="hidden";
		}
		else{
			if(document.getElementById("exp_date")){
				document.getElementById("exp_date").style.display ="block";
				document.getElementById("test_name").style.display ="block";
			}
			document.getElementById("difflabel").style.display ="block";
			document.getElementById("diffoption").style.display ="block";
			document.getElementById("submit").style.display ="block";
			document.getElementById("test_message2").style.visibility="hidden";
			
        }
	}
    else
    {   
	
	   if(chapterwisecount <= 0)
	   {
		  if(user_type == 3){
			document.getElementById("test_message2").innerHTML="Sorry you cannot set chapter wise tests for "+ course_name +" .To get more chapter wise tests,contact PREXAM  <a href='feedback.php'> click here.</a>";}
		else{
			document.getElementById("test_message2").innerHTML="Sorry your free chapter wise tests for "+ course_name +" are over please <a href='courseregister.php'> click here</a> to register for more test or <a href=registeredcourses.php>add more </a> tests.";}
	    //document.getElementById("test_message2").style.display="block";
		//document.getElementById("test_message1").style.display="none";
		document.getElementById("test_message2").style.visibility="visible";
		document.getElementById("test_message1").style.visibility="hidden";
		document.getElementById("difflabel").style.display ="none";
        document.getElementById("diffoption").style.display ="none";
        document.getElementById("submit").style.display ="none";
	   }
	   else
	   {
	   document.getElementById("test_message1").style.visibility="hidden";
        document.getElementById("subjectlabel").style.display ="block";
        document.getElementById("subject").style.display ="block";
        document.getElementById("mocktest").style.display ="none";
        document.getElementById("difflabel").style.display ="none";
        document.getElementById("diffoption").style.display ="none";
        document.getElementById("submit").style.display ="none";
		if(document.getElementById("exp_date")){
			document.getElementById("exp_date").style.display ="none";
			document.getElementById("negmarks").style.display ="none";
			document.getElementById("test_name").style.display ="none";
		}
		
       }
	}
}

function getsubject(str)
{
	if(str=="")
    {
        document.getElementById("subject").innerHTML = "";
    }
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var select="<select name='subject' id='subject' style='display:none'  onchange='getchapter(this.value)'>";
            //document.getElementById("subject1").innerHTML = select+xmlhttp.responseText+"</select>";
            var temp = eval(xmlhttp.responseText);
	    select+="<option value=''>Select Subject</option>";
            for (i=0;i<temp.length ;i++ )
                select+="<option value="+temp[i]['id']+">"+temp[i]['name']+"</option>";
            select+="</select>";
           if(document.URL.indexOf("MntQuestions.php",1)>0  || document.URL.indexOf("DataFeedingAdmin.php",1)>0)
			{
				document.getElementById("subject1").innerHTML = select;
				document.getElementById("subjectlabel").style.display ="block";
				document.getElementById("subject").style.display ="block";
			}
			else{
				document.getElementById("subject1").innerHTML = select;
				document.getElementById("subjectlabel").style.display ="none";
				document.getElementById("subject").style.display ="none";
				document.getElementById("chapterlabel").style.display ="none";
				document.getElementById("Chkbox1").style.display ="none";
				document.getElementById("chapter1").style.display ="none";
				document.getElementById("markslabel").style.display ="none";
				document.getElementById("marks1").style.display ="none";
				document.getElementById("difflabel").style.display ="none";
				document.getElementById("diffoption").style.display ="none";
				document.getElementById("submit").style.display ="none";
				document.getElementById("mocktest").style.display ="block";
				document.getElementById("mock1").checked = false;
				document.getElementById("mock2").checked = false;

				if(document.getElementById("exp_date")){
				document.getElementById("exp_date").style.display ="none";
				document.getElementById("negmarks").style.display ="none";
                document.getElementById("test_name").style.display ="none";				
				}
			}
        }
    }
    xmlhttp.open("GET", "getsubject.php?q=" + str, true);
    xmlhttp.send();
}
function getmarks(str)
{
        if(str=="")
    {
        document.getElementById("chapter").innerHTML = "<option></option>";
    }
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var select='<select name="marks" id="marks" style="display:none">';
            document.getElementById("marks1").innerHTML = select+xmlhttp.responseText+"</select>";
            document.getElementById("marks1").style.display ="block";
            document.getElementById("markslabel").style.display ="block";
            document.getElementById("marks").style.display ="block";
            document.getElementById("difflabel").style.display ="block";
            document.getElementById("diffoption").style.display ="block";
		   document.getElementById("submit").style.display ="block";
		    check_box_value = 1;
		 if (document.getElementById("exp_date")){
                document.getElementById("negmarks").style.display ="block";
				document.getElementById("exp_date").style.display ="block";
				document.getElementById("test_name").style.display ="block";
			}

        }
    }
    xmlhttp.open("GET", "getmarks.php?q=" + str, true);
    xmlhttp.send();
}
function getchapter(str)
{
    if(str=="")
    {
        document.getElementById("chapter").innerHTML = "<option></option>";
    }
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			
			var temp = eval(xmlhttp.responseText);
            var select = "";
			
			if(document.URL.indexOf("MntQuestions.php",1)>0 || document.URL.indexOf("DataFeedingAdmin.php",1)>0)
			{
				var select='<select name="chapter" id="chapter" style="display:none;float: left" ><option value="">Select All</option>';
				
				for (i=0;i<temp.length ;i++ )
					select+="<option value="+temp[i]['id']+">"+temp[i]['name']+"</option>";
				document.getElementById("chapter1").innerHTML =select + "</select>";
				document.getElementById("chapterlabel").style.display ="block";
				document.getElementById("chapter").style.display ="block";
			}
			else
			{
			//document.getElementById("chapter1").innerHTML = xmlhttp.responseText;
           
            for (i=0;i<temp.length ;i++ )
            {
                select += "<input type='checkbox' name='check' id='check1' onclick='checkall(document.form1.check)' value="+temp[i]['id']+">"
                select += "<label id='chktxt"+i+"'>"+temp[i]['name']+"</label></input><br/>";
            }
            document.getElementById("chapter1").innerHTML = select;
            document.getElementById("chapter1").style.display ="block";
            document.getElementById("chapterlabel").style.display ="block";
            document.getElementById("Chkbox1").style.display ="block";
            document.getElementById("Chkbox").style.display ="inline";
	        document.getElementById("Chkbox").checked =false;
            document.getElementById("Chkboxtxt").style.display ="inline";
			
  //          document.getElementById("submit").style.display ="block";
            getmarks(str);
			}
        }
    }
    xmlhttp.open("GET", "getchapter.php?q=" + str, true);
    xmlhttp.send();
}
function openwindow(lst)
{
    var i;
    var j=0;
    var difval = document.getElementById('diffoption').value;
	if(user_type == 3){
		var ex_date = document.getElementById('expiry_on').value;
		var test_name = document.getElementById('tname').value;
	}
    var Args = new Array();
    var value;
    Args[4] = new Array();
    Args[5] = new Array();
    if (!(ismock))
    {
		if (lst.length==undefined)
		{
			if(lst.checked)
			{
				Args[4][j] = lst.value;
				Args[5][j] = document.getElementById('chktxt'+0).innerHTML;
				j++;
			}
		}
		else
		{
			for(i = 0; i<lst.length;i++)
			{
				if(lst[i].checked)
				{
					Args[4][j] = lst[i].value;
					Args[5][j] = document.getElementById('chktxt'+i).innerHTML;
					j++;
				}
			}
		}
		if(j == 0)
		{
			document.getElementById("note").innerHTML = "Select atleast 1 chapter";
			document.getElementById("note").style.display = "block";
			return false;
		}
		else if (difval == 0)
		{
			document.getElementById("note1").innerHTML = "Select difficulty level";
			return false;
		}
		 else if(user_type == 3 && (ex_date == "" || ex_date == null))
		{
			document.getElementById("note2").innerHTML = "Select test expiry date";
			return false;

		}
		else if(user_type == 3 && (test_name == "" || test_name == null))
		{
			document.getElementById("note3").innerHTML = "Please enter a test name";
			return false;

		}
		else
		{
		   // document.getElementById("submit").type = "submit";
			Args[0]=document.getElementById("course").value;
			Args[1]=document.getElementById("marks").value;
			value = document.getElementById("course").selectedIndex;
			Args[2]=document.getElementById("course").options[value].text;
			value = document.getElementById("subject").selectedIndex;
			Args[3]=document.getElementById("subject").options[value].text;
			Args[6] = difval;
			Args[7] = ismock;
			if(user_type == 3){
					Args[9] = document.getElementById("expiry_on").value;
					Args[10] = document.getElementById('tname').value;
					Args[11] = user_type;
					Args[12] = G_userid;
					
					if (!(document.getElementById("negativemarks").disabled))
					{
						Args[8] = document.getElementById("negativemarks").value;
					}
					else
					{
						Args[8] = ""; //to identify as to nothing is set
					}
			  }
		//First check if any chapters selected if yes then proceed else not
			if (window.showModalDialog)
			{
				 if (user_type == 3)
					window.showModalDialog("print.php",Args,"dialogWidth:"+document.documentElement.clientWidth+"; dialogHeight:"+document.documentElement.clientHeight+"; center:yes");
				 else
					window.showModalDialog("test.php",Args,"dialogWidth:"+(screen.availWidth-10)+"; dialogHeight:"+(screen.availHeight-50)+";scroll:yes;resizable:yes;dialogTop:0;dialogLeft:0;status:no;center:no");
			}
			else
			{
			
				document.getElementById("args").value=JSON.stringify(Args);
				//alert(document.getElementById("args").value);
				 if (user_type == 3)
					window.open('print.php',"MyTest",'height='+window.innerHeight+',width='+window.innerWidth+',toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
				else
					window.open('test.php',"MyTest",'height='+window.innerHeight+',width='+window.innerWidth+',toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
					return false;
					
			}
		  }
    }
    else
    {	
		if(user_type == 3 && (ex_date == "" || ex_date == null)){
			
				document.getElementById("note2").innerHTML = "Select test expiry date";
				return false;
		}
        else if(user_type == 3 && (test_name == "" || test_name == null))
	    {
				document.getElementById("note3").innerHTML = "Please enter a test name";
				return false;

	    }		
        else if (difval == 0)
        {
            document.getElementById("note1").innerHTML = "Select difficulty level";
            return false;
        }
        else
        {
           // document.getElementById("submit").type = "submit";
            var temp = document.getElementById("subject");
            for (i=1;i<temp.options.length ;i++ )
            {
                Args[4][i-1] = temp.options[i].value;
                Args[5][i-1] = temp.options[i].text;
            }
            Args[0]=document.getElementById("course").value;
            //Args[1]=document.getElementById("marks").value;
            value = document.getElementById("course").selectedIndex;
            Args[2]=document.getElementById("course").options[value].text;
            //value = document.getElementById("subject").selectedIndex;
            //Args[3]=document.getElementById("subject").options[value].text;
            Args[6] = difval;
            Args[7] = ismock;
			if(user_type == 3){
				Args[9] = document.getElementById("expiry_on").value;
				Args[10] = document.getElementById('tname').value;
				Args[11] = user_type;
				Args[12] = G_userid;	
			}
        //First check if any chapters selected if yes then proceed else not
            if (window.showModalDialog)
            {
				 if (user_type == 3)
                    window.showModalDialog("print.php",Args,"dialogWidth:"+document.documentElement.clientWidth+"; dialogHeight:"+document.documentElement.clientHeight+"; center:yes");
                else
					window.showModalDialog("test.php",Args,"dialogWidth:"+(screen.availWidth-10)+"; dialogHeight:"+(screen.availHeight-50)+";scroll:yes;resizable:yes;dialogTop:0;dialogLeft:0;status:no;center:no");
            }
            else
            {
            			document.getElementById("args").value=JSON.stringify(Args);
				if (user_type == 3)
                    window.open('print.php',Args,'height='+window.innerHeight+',width='+window.innerWidth+',toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
                else
					window.open('test.php',Args,'height='+window.innerHeight+',width='+window.innerWidth+',toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
					return false;
            }
        }
    }
	return true;
}

function ChangeSel(lst)
{
    document.getElementById("note").style.display = "none";
    if(document.getElementById("Chkbox").checked)
    {
        if (lst.length==undefined)
        {
            lst.checked = true;
        }
        else
        {
            for(i = 0; i<lst.length;i++)
            {
                lst[i].checked = true;
            }
        }
    }
    else
    {
        if (lst.length==undefined)
        {
            lst.checked = false;
        }
        else
        {
            for(i = 0; i<lst.length;i++)
            {
                lst[i].checked = false;
            }
        }
    }
}
function checkall(lst)
{
    document.getElementById("note").style.display = "none";
    var lookup = 0;
    if (lst.length == undefined)
    {
        if (!lst.checked)
            lookup = 1;
    }
    else
    {
        for(i = 0; i<lst.length;i++)
            if (!lst[i].checked)
            {
                lookup = 1;
                break;
            }
    }
    if (lookup == 0)
        document.getElementById("Chkbox").checked = true;
    else
        document.getElementById("Chkbox").checked = false;
}
function openTestNew(testId,test_type)
{
	var Args = new Array();	
	Args[0] = testId;
	Args[1] = user_type;
	Args[2] = test_type; //0=>chapterwise else 1=>mocktest
	if (window.showModalDialog)
	{
		window.showModalDialog("test.php",Args,"dialogWidth:"+(screen.availWidth-10)+"; dialogHeight:"+(screen.availHeight-50)+";scroll:yes;resizable:yes;dialogTop:0;dialogLeft:0;status:no;center:no");
	}
	else
	{
		window.open('test.php',Args,'height='+window.innerHeight+',width='+window.innerWidth+',fullscreen=yes,toolbar=no,directories=no,status=no,menubar=no,resizable=no ,modal=yes');
	}
		
	window.location.href = "viewsetteststud.php";
		return false;
}

function enablebox(value)
{
    check_box_value = value;
    if (check_box_value == 1)
    {
        document.getElementById('negativemarks').disabled = true;
    }
    else if (check_box_value == 2)
    {
        document.getElementById('negativemarks').disabled = false;
    }
}