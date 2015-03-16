var response;
var count=0;
var quest_count;
var quest_tag;
var correct_ans;
var option_tags;
var notation_tag;
var notation_wrapper;
var course_id=0;

function LoadData(){
	document.getElementsByName('timershow')[0].style.visibility='hidden';
	document.getElementsByName('submittest')[0].style.visibility='hidden';
	$.ajax({
	type: "GET",
	url:"question.php",
	data: {'course_id':course_id},
	success:function(result){
    response = JSON.parse(result);
	quest_count = response.length;
	//console.log(quest_count);
	if(quest_count>0){
		ReplaceData(0);
		FillNotation();
		notation_tag=document.getElementsByName("navigate");
		document.getElementById("container").style.visibility="visible";
		document.getElementsByName('gettingquestion')[0].style.display='none';
		document.getElementsByName('timershow')[0].style.visibility='visible';
	document.getElementsByName('submittest')[0].style.visibility='visible';
		//countdown(2);
	}
	else
		alert("No Record Found");	
  }});

}



//end review test 

function getPrev(){
	if(count==0){
		alert("No more questions are there");
		return;
	}
	else{
			count=count-1;
			ReplaceData(count);
			
	}
}

function getNext(){
	if(count >= (quest_count-1)){
		alert("No more questions are there");
		return;
	}
	else{
			count=count+1;
			ReplaceData(count);
	}
}

function ReplaceData(localCount){
	document.getElementById("quest_no").innerHTML="Question No." + (localCount + 1) ;
	quest_tag.innerHTML = response[localCount]["question"];
	correct_ans.innerHTML=response[localCount]["correct"];
	for (i=0; i < option_tags.length; i++){
		//option_tags[i].value=response[localCount]["options"][i];
		option_tags[i].nextSibling.innerHTML=response[localCount]["options"][i];
	}
	ClearSelectedOptions();
	SetSelectedOption(response[localCount]["tick"]);
}

function setAnswer(value){
	response[count]["tick"]=value;
	notation_tag[count].style.background="rgb(56,207,48)";
	//console.log(response[count]);
}

function ClearSelectedOptions(){
   for(var i=0;i<option_tags.length;i++)
      option_tags[i].checked = false;
}

function SetSelectedOption(value){
	if(!isNaN(parseInt(value)))
		option_tags[parseInt(value)-1].checked = true;	
}

function ResetSelection(){
	ClearSelectedOptions();
	response[count]["tick"]="";
	notation_tag[count].style.background="#faa732";
   //	console.log(response[count]);
}

function ReviewSelection(){
	//ClearSelectedOptions();
	//response[count]["tick"]="";
	notation_tag[count].style.background="red";
   //	console.log(response[count]);
}

function NavigateDirect(value){
	count=parseInt(value)-1;
	ReplaceData(count);
}

function SubmitTest(){
	alert("Are you sure to Submit the Test.");
	document.getElementsByName('answer_sheet')[0].style.display='none';
	document.getElementsByName('aftersubmit')[0].style.display='block';
	document.getElementsByName('timershow')[0].style.visibility='hidden';
	document.getElementsByName('submittest')[0].style.visibility='hidden';
	document.getElementsByName('rreset')[0].style.visibility='hidden';
	document.getElementsByName('rreview')[0].style.visibility='hidden';

var the_obj = JSON.stringify(response);

		if( this.ajax )
        {
            this.ajax.abort();
        }
        this.ajax =$.ajax({
    type: 'POST',
	url: 'calculatetest.php',
	data: {'json':the_obj},	
    success: function(result) {
		//console.log(result);
		document.getElementsByName('aftersubmit')[0].style.display='none';
		document.getElementById('container').style.visibility='hidden';
		document.getElementsByName('navvvv')[0].style.display='none';
		document.getElementById('resultcalculated').style.display='block';
		document.getElementById("resultcalculated").innerHTML=result;

    }
});
//console.log("Success");
}



function FillNotation1(){
	for(i=0;i<quest_count;i++){
		notation_wrapper.innerHTML += '<span class="span-wrapper" name="navigate1" onclick="NavigateDirect1(this.textContent)">' + (i+1) + '</span>';
	}
}
function NavigateDirect1(value){
	count=parseInt(value)-1;
	ReplaceData1(count);
}


// Review test js end

function FillNotation(){
	for(i=0;i<quest_count;i++){
		notation_wrapper.innerHTML += '<span class="span-wrapper" name="navigate" onclick="NavigateDirect(this.textContent)">' + (i+1) + '</span>';
	}
}

function SelectdValue(value){
	course_id = value;
	EntryPoint();
}

function EntryPoint(){
	quest_tag=document.getElementById("quest");
	correct_ans=document.getElementById("correctans");
	option_tags=document.getElementsByName("options");
	notation_wrapper=document.getElementById("notation");
	LoadData();
	//console.log("Loading Complete");
	
}
// review test js 
function Reviewtest(){
	document.getElementById('resultcalculated').style.visibility='hidden';
	document.getElementById('container').style.visibility='visible';
	document.getElementsByName('review_disable')[0].style.visibility='visible';
	document.getElementsByName('navvvv')[0].style.display='block';
	document.getElementsByName('answer_sheet')[0].style.display='block';
	document.getElementsByName('corans')[0].style.visibility='visible';
	document.getElementsByName('corans')[0].style.display='block';

	document.getElementsByName('shoresult')[0].style.display='block';
	document.getElementsByName('taketestagnain')[0].style.display='block';

	
}
function Showresult(){
	document.getElementById('resultcalculated').style.visibility='visible';
	document.getElementById('container').style.visibility='hidden';
		document.getElementsByName('review_disable')[0].style.visibility='hidden';
	document.getElementsByName('navvvv')[0].style.display='none';
	document.getElementsByName('answer_sheet')[0].style.display='none';
	document.getElementsByName('corans')[0].style.visibility='hidden';
	document.getElementsByName('corans')[0].style.display='none';


}