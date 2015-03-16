// JavaScript Document

function LTrim( value ) {

	

	var re = /\s*((\S+\s*)*)/;

	return value.replace(re, "$1");

	

}



// Removes ending whitespaces

function RTrim( value ) {

	

	var re = /((\s*\S+)*)\s*/;

	  return value.replace(re, "$1");

	

}



// Removes leading and ending whitespaces

function trim( value ) {

	

	return LTrim(RTrim(value));

}

function chkLogin()

{

	if(trim(document.getElementById("username").value)=="")

	{

		document.getElementById("logerr_msg").innerHTML = "";

		document.getElementById("logerr_msg").innerHTML = "Please enter user Name";

		document.getElementById("username").focus();

		return false;

	}else{

		document.getElementById("logerr_msg").innerHTML = "";

	}

	if(trim(document.getElementById("userPassword").value)=="")

	{

		document.getElementById("logerr_msg").innerHTML = "";

		document.getElementById("logerr_msg").innerHTML = "Please enter password";

		document.getElementById("userPassword").focus();

		return false;

	}else{

		document.getElementById("logerr_msg").innerHTML = "";	

	}

	



}

function chkProduct()

{



  if(trim(document.getElementById("category").value)=="")

	{

		document.getElementById("msg-cat").innerHTML = "";

		document.getElementById("msg-cat").className = "input-notification error png_bg";

		document.getElementById("msg-cat").innerHTML = "select your category name";

		document.getElementById("category").focus();

		return false;

	}else{

		document.getElementById("msg-cat").innerHTML = "";

		document.getElementById("msg-cat").className = "";

	}



if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-sub").innerHTML = "";

		document.getElementById("msg-sub").className = "input-notification error png_bg";

		document.getElementById("msg-sub").innerHTML = "select your subcategory name";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-sub").innerHTML = "";

		document.getElementById("msg-sub").className = "";

	}







if(trim(document.getElementById("productc").value)=="")

	{

		document.getElementById("msg-pc").innerHTML = "";

		document.getElementById("msg-pc").className = "input-notification error png_bg";

		document.getElementById("msg-pc").innerHTML = "Please input product code";

		document.getElementById("productc").focus();

		return false;

	}else{

		document.getElementById("msg-pc").innerHTML = "";

		document.getElementById("msg-pc").className = "";

	}

	if(trim(document.getElementById("productN").value)=="")

	{

		document.getElementById("msg-pname").innerHTML = "";

		document.getElementById("msg-pname").className = "input-notification error png_bg";

		document.getElementById("msg-pname").innerHTML = "Please enter Product name";

		document.getElementById("productN").focus();

		return false;

	}else{

		document.getElementById("msg-pname").innerHTML = "";

		document.getElementById("msg-pname").className = "";

	}

	if(trim(document.getElementById("productP").value)=="")

	{

		document.getElementById("msg-pp").innerHTML = "";

		document.getElementById("msg-pp").className = "input-notification error png_bg";

		document.getElementById("msg-pp").innerHTML = "Please enter product price";

		document.getElementById("productP").focus();

		return false;

	}else{

		document.getElementById("msg-pp").innerHTML = "";

		document.getElementById("msg-pp").className = "";

	}

	if(trim(document.getElementById("productDP").value)=="")

	{

		document.getElementById("msg-pdp").innerHTML = "";

		document.getElementById("msg-pdp").className = "input-notification error png_bg";

		document.getElementById("msg-pdp").innerHTML = "Please enter Product discount price";

		document.getElementById("productDP").focus();

		return false;

	}else{

		document.getElementById("msg-pdp").innerHTML = "";

		document.getElementById("msg-pdp").className = "";

	}

	if(trim(document.getElementById("productD").value)=="")

	{

		document.getElementById("msg-pd").innerHTML = "";

		document.getElementById("msg-pd").className = "input-notification error png_bg";

		document.getElementById("msg-pd").innerHTML = "Please enter product discount";

		document.getElementById("productD").focus();

		return false;

	}else{

		document.getElementById("msg-pd").innerHTML = "";

		document.getElementById("msg-pd").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "input-notification error png_bg";

		document.getElementById("msg-details").innerHTML = "Please enter details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "";

	}

	

	var ext = document.getElementById("pimage").value.substring(document.getElementById("pimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("pimage").value)=="")

	{

		document.getElementById("msg-pimage").innerHTML = "";

		document.getElementById("msg-pimage").className = "input-notification error png_bg";

		document.getElementById("msg-pimage").innerHTML = "Please upload product image";

		document.getElementById("pimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-pimage").innerHTML = "";

		document.getElementById("msg-pimage").className = "";

	}else{

		document.getElementById("msg-pimage").innerHTML = "";

		document.getElementById("msg-pimage").className = "input-notification error png_bg";

		document.getElementById("msg-pimage").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("pimage").focus();

		return false;

	}

	

}

function chkProduct1()

{

	 if(trim(document.getElementById("category").value)=="")

	{

		document.getElementById("msg-ocat").innerHTML = "";

		document.getElementById("msg-ocat").className = "input-notification error png_bg";

		document.getElementById("msg-ocat").innerHTML = "select your category name";

		document.getElementById("category").focus();

		return false;

	}else{

		document.getElementById("msg-ocat").innerHTML = "";

		document.getElementById("msg-ocat").className = "";

	}



if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-osub").innerHTML = "";

		document.getElementById("msg-osub").className = "input-notification error png_bg";

		document.getElementById("msg-osub").innerHTML = "select your subcategory name";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-osub").innerHTML = "";

		document.getElementById("msg-osub").className = "";

	}



	

	if(trim(document.getElementById("productc").value)=="")

	{

		document.getElementById("msg-opc").innerHTML = "";

		document.getElementById("msg-opc").className = "input-notification error png_bg";

		document.getElementById("msg-opc").innerHTML = "Please input product code";

		document.getElementById("productc").focus();

		return false;

	}else{

		document.getElementById("msg-opc").innerHTML = "";

		document.getElementById("msg-opc").className = "";

	}

	if(trim(document.getElementById("productN").value)=="")

	{

		document.getElementById("msg-opname").innerHTML = "";

		document.getElementById("msg-opname").className = "input-notification error png_bg";

		document.getElementById("msg-opname").innerHTML = "Please enter Product name";

		document.getElementById("productN").focus();

		return false;

	}else{

		document.getElementById("msg-opname").innerHTML = "";

		document.getElementById("msg-opname").className = "";

	}

	if(trim(document.getElementById("productP").value)=="")

	{

		document.getElementById("msg-opp").innerHTML = "";

		document.getElementById("msg-opp").className = "input-notification error png_bg";

		document.getElementById("msg-opp").innerHTML = "Please enter product price";

		document.getElementById("productP").focus();

		return false;

	}else{

		document.getElementById("msg-opp").innerHTML = "";

		document.getElementById("msg-opp").className = "";

	}

	if(trim(document.getElementById("productDP").value)=="")

	{

		document.getElementById("msg-opdp").innerHTML = "";

		document.getElementById("msg-opdp").className = "input-notification error png_bg";

		document.getElementById("msg-opdp").innerHTML = "Please enter Product discount price";

		document.getElementById("productDP").focus();

		return false;

	}else{

		document.getElementById("msg-opdp").innerHTML = "";

		document.getElementById("msg-opdp").className = "";

	}

	if(trim(document.getElementById("productD").value)=="")

	{

		document.getElementById("msg-opd").innerHTML = "";

		document.getElementById("msg-opd").className = "input-notification error png_bg";

		document.getElementById("msg-opd").innerHTML = "Please enter product discount";

		document.getElementById("productD").focus();

		return false;

	}else{

		document.getElementById("msg-opd").innerHTML = "";

		document.getElementById("msg-opd").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "input-notification error png_bg";

		document.getElementById("msg-odetails").innerHTML = "Please enter details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "";

	}

	

	var ext = document.getElementById("pimage").value.substring(document.getElementById("pimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("pimage").value)=="")

	{

		document.getElementById("msg-opimage").innerHTML = "";

		document.getElementById("msg-opimage").className = "input-notification error png_bg";

		document.getElementById("msg-opimage").innerHTML = "Please upload product image";

		document.getElementById("pimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-opimage").innerHTML = "";

		document.getElementById("msg-opimage").className = "";

	}else{

		document.getElementById("msg-opimage").innerHTML = "";

		document.getElementById("msg-opimage").className = "input-notification error png_bg";

		document.getElementById("msg-opimage").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("pimage").focus();

		return false;

	}

	

}

function chkbidding()

{

	

	if(trim(document.getElementById("biddingu").value)=="")

	{

		document.getElementById("msg-biddingu").innerHTML = "";

		document.getElementById("msg-biddingu").className = "input-notification error png_bg";

		document.getElementById("msg-biddingu").innerHTML = "Please enter bidding user";

		document.getElementById("biddingu").focus();

		return false;

	}else{

		document.getElementById("msg-biddingu").innerHTML = "";

		document.getElementById("msg-biddingu").className = "";

	}

	if(trim(document.getElementById("biddingc").value)=="")

	{

		document.getElementById("msg-biddingc").innerHTML = "";

		document.getElementById("msg-biddingc").className = "input-notification error png_bg";

		document.getElementById("msg-biddingc").innerHTML = "Please enter bidding code";

		document.getElementById("biddingc").focus();

		return false;

	}else{

		document.getElementById("msg-biddingc").innerHTML = "";

		document.getElementById("msg-biddingc").className = "";

	}

	if(trim(document.getElementById("marketp").value)=="")

	{

		document.getElementById("msg-mp").innerHTML = "";

		document.getElementById("msg-mp").className = "input-notification error png_bg";

		document.getElementById("msg-mp").innerHTML = "Please enter market price";

		document.getElementById("marketp").focus();

		return false;

	}else{

		document.getElementById("msg-mp").innerHTML = "";

		document.getElementById("msg-mp").className = "";

	}

	if(trim(document.getElementById("biddingminimump").value)=="")

	{

		document.getElementById("msg-bmp").innerHTML = "";

		document.getElementById("msg-bmp").className = "input-notification error png_bg";

		document.getElementById("msg-bmp").innerHTML = "Please enter minimum price";

		document.getElementById("biddingminimump").focus();

		return false;

	}else{

		document.getElementById("msg-bmp").innerHTML = "";

		document.getElementById("msg-bmp").className = "";

	}

	if(trim(document.getElementById("biddingmaximump").value)=="")

	{

		document.getElementById("msg-bm").innerHTML = "";

		document.getElementById("msg-bm").className = "input-notification error png_bg";

		document.getElementById("msg-bm").innerHTML = "Please enter maximum price";

		document.getElementById("biddingmaximump").focus();

		return false;

	}else{

		document.getElementById("msg-bm").innerHTML = "";

		document.getElementById("msg-bm").className = "";

	}

	if(trim(document.getElementById("bidp").value)=="")

	{

		document.getElementById("msg-price").innerHTML = "";

		document.getElementById("msg-price").className = "input-notification error png_bg";

		document.getElementById("msg-price").innerHTML = "Please enter bidding price";

		document.getElementById("bidp").focus();

		return false;

	}else{

		document.getElementById("msg-price").innerHTML = "";

		document.getElementById("msg-price").className = "";

	}

	if(trim(document.getElementById("bids").value)=="")

	{

		document.getElementById("msg-saving").innerHTML = "";

		document.getElementById("msg-saving").className = "input-notification error png_bg";

		document.getElementById("msg-saving").innerHTML = "Please enter bid saving";

		document.getElementById("bids").focus();

		return false;

	}else{

		document.getElementById("msg-saving").innerHTML = "";

		document.getElementById("msg-saving").className = "";

	}

	if(trim(document.getElementById("bidd").value)=="")

	{

		document.getElementById("msg-msg-discount").innerHTML = "";

		document.getElementById("msg-discount").className = "input-notification error png_bg";

		document.getElementById("msg-discount").innerHTML = "Please enter bidding discount";

		document.getElementById("bidd").focus();

		return false;

	}else{

		document.getElementById("msg-discount").innerHTML = "";

		document.getElementById("msg-discount").className = "";

	}

	if(trim(document.getElementById("bidde").value)=="")

	{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "input-notification error png_bg";

		document.getElementById("msg-details").innerHTML = "Please enter bid details";

		document.getElementById("bidde").focus();

		return false;

	}else{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "";

	}

	var ext = document.getElementById("bidimage").value.substring(document.getElementById("bidimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("bidimage").value)=="")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload product image";

		document.getElementById("bidimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "";

	}else{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("bidimage").focus();

		return false;

	}

	/*if(trim(document.getElementById("username").value)=="")

	{

		document.getElementById("msg-un").innerHTML = "";

		document.getElementById("msg-un").className = "input-notification error png_bg";

		document.getElementById("msg-un").innerHTML = "Please select user name";

		document.getElementById("username").focus();

		return false;

	}else{

		document.getElementById("msg-un").innerHTML = "";

		document.getElementById("msg-un").className = "";

	}

	

	

	

	if(trim(document.getElementById("productname").value)=="")

	{

		document.getElementById("msg-pn").innerHTML = "";

		document.getElementById("msg-pn").className = "input-notification error png_bg";

		document.getElementById("msg-pn").innerHTML = "Please select Product name";

		document.getElementById("productname").focus();

		return false;

	}else{

		document.getElementById("msg-pn").innerHTML = "";

		document.getElementById("msg-pn").className = "";

	}*/

	

}



function chkbidding1()

{

	

	if(trim(document.getElementById("username").value)=="")

	{

		document.getElementById("msg-oun").innerHTML = "";

		document.getElementById("msg-oun").className = "input-notification error png_bg";

		document.getElementById("msg-oun").innerHTML = "Please select user name";

		document.getElementById("username").focus();

		return false;

	}else{

		document.getElementById("msg-oun").innerHTML = "";

		document.getElementById("msg-oun").className = "";

	}

	

	if(trim(document.getElementById("productname").value)=="")

	{

		document.getElementById("msg-opn").innerHTML = "";

		document.getElementById("msg-opn").className = "input-notification error png_bg";

		document.getElementById("msg-opn").innerHTML = "Please select product name";

		document.getElementById("productname").focus();

		return false;

	}else{

		document.getElementById("msg-opn").innerHTML = "";

		document.getElementById("msg-opn").className = "";

	}

	if(trim(document.getElementById("biddingu").value)=="")

	{

		document.getElementById("msg-obiddingu").innerHTML = "";

		document.getElementById("msg-obiddingu").className = "input-notification error png_bg";

		document.getElementById("msg-obiddingu").innerHTML = "Please enter bidding user";

		document.getElementById("biddingu").focus();

		return false;

	}else{

		document.getElementById("msg-obiddingu").innerHTML = "";

		document.getElementById("msg-obiddingu").className = "";

	}

	if(trim(document.getElementById("biddingc").value)=="")

	{

		document.getElementById("msg-obiddingc").innerHTML = "";

		document.getElementById("msg-obiddingc").className = "input-notification error png_bg";

		document.getElementById("msg-obiddingc").innerHTML = "Please enter bidding code";

		document.getElementById("biddingc").focus();

		return false;

	}else{

		document.getElementById("msg-obiddingc").innerHTML = "";

		document.getElementById("msg-obiddingc").className = "";

	}

	if(trim(document.getElementById("marketp").value)=="")

	{

		document.getElementById("msg-omp").innerHTML = "";

		document.getElementById("msg-omp").className = "input-notification error png_bg";

		document.getElementById("msg-omp").innerHTML = "Please enter market price";

		document.getElementById("marketp").focus();

		return false;

	}else{

		document.getElementById("msg-omp").innerHTML = "";

		document.getElementById("msg-omp").className = "";

	}

	if(trim(document.getElementById("biddingminimump").value)=="")

	{

		document.getElementById("msg-obmp").innerHTML = "";

		document.getElementById("msg-obmp").className = "input-notification error png_bg";

		document.getElementById("msg-obmp").innerHTML = "Please enter minimum price";

		document.getElementById("biddingminimump").focus();

		return false;

	}else{

		document.getElementById("msg-obmp").innerHTML = "";

		document.getElementById("msg-obmp").className = "";

	}

	if(trim(document.getElementById("biddingmaximump").value)=="")

	{

		document.getElementById("msg-obm").innerHTML = "";

		document.getElementById("msg-obm").className = "input-notification error png_bg";

		document.getElementById("msg-obm").innerHTML = "Please enter maximum price";

		document.getElementById("biddingmaximump").focus();

		return false;

	}else{

		document.getElementById("msg-obm").innerHTML = "";

		document.getElementById("msg-obm").className = "";

	}

		if(trim(document.getElementById("bidp").value)=="")

	{

		document.getElementById("msg-oprice").innerHTML = "";

		document.getElementById("msg-oprice").className = "input-notification error png_bg";

		document.getElementById("msg-oprice").innerHTML = "Please enter bidding price";

		document.getElementById("bidp").focus();

		return false;

	}else{

		document.getElementById("msg-oprice").innerHTML = "";

		document.getElementById("msg-oprice").className = "";

	}

	if(trim(document.getElementById("bids").value)=="")

	{

		document.getElementById("msg-osaving").innerHTML = "";

		document.getElementById("msg-osaving").className = "input-notification error png_bg";

		document.getElementById("msg-osaving").innerHTML = "Please enter bid saving";

		document.getElementById("bids").focus();

		return false;

	}else{

		document.getElementById("msg-osaving").innerHTML = "";

		document.getElementById("msg-osaving").className = "";

	}

	if(trim(document.getElementById("bidd").value)=="")

	{

		document.getElementById("msg-odiscount").innerHTML = "";

		document.getElementById("msg-odiscount").className = "input-notification error png_bg";

		document.getElementById("msg-odiscount").innerHTML = "Please enter bidding discount";

		document.getElementById("bidd").focus();

		return false;

	}else{

		document.getElementById("msg-odiscount").innerHTML = "";

		document.getElementById("msg-odiscount").className = "";

	}

	if(trim(document.getElementById("bidde").value)=="")

	{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "input-notification error png_bg";

		document.getElementById("msg-odetails").innerHTML = "Please enter bid details";

		document.getElementById("bidde").focus();

		return false;

	}else{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "";

	}

	var ext = document.getElementById("bidimage").value.substring(document.getElementById("bidimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("bidimage").value)=="")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload product image";

		document.getElementById("bidimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "";

	}else{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("bidimage").focus();

		return false;

	}



}



function chkuser()

{

	if(trim(document.getElementById("usern").value)=="")

	{

		document.getElementById("msg-un").innerHTML = "";

		document.getElementById("msg-un").className = "input-notification error png_bg";

		document.getElementById("msg-un").innerHTML = "Please input user name";

		document.getElementById("usern").focus();

		return false;

	}else{

		document.getElementById("msg-un").innerHTML = "";

		document.getElementById("msg-un").className = "";

	}

	

	if(trim(document.getElementById("userp").value)=="")

	{

		document.getElementById("msg-up").innerHTML = "";

		document.getElementById("msg-up").className = "input-notification error png_bg";

		document.getElementById("msg-up").innerHTML = "Please enter user password";

		document.getElementById("userp").focus();

		return false;

	}else{

		document.getElementById("msg-up").innerHTML = "";

		document.getElementById("msg-up").className = "";

	}

	

	var filter=/^[a-zA-Z][\w\_\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;

	 var filter2=/^[a-zA-Z\ ]+$/;

	if(trim(document.getElementById("email").value)=="")

	{

		document.getElementById("msg-email").innerHTML = "";

		document.getElementById("msg-email").className = "input-notification error png_bg";

		document.getElementById("msg-email").innerHTML = "Please enter emailid";

		document.getElementById("email").focus();

		return false;

	}if(!filter.test(trim(document.getElementById("email").value)))

	{

		document.getElementById("msg-email").innerHTML = "";

		document.getElementById("msg-email").className = "input-notification error png_bg";

		document.getElementById("msg-email").innerHTML = "Please enter valid email";

		document.getElementById("email").focus();

		return false;

	}

	else{

		document.getElementById("msg-email").innerHTML = "";

		document.getElementById("msg-email").className = "";

	}

	if(trim(document.getElementById("pno").value)=="")

	{

		document.getElementById("msg-phone").innerHTML = "";

		document.getElementById("msg-phone").className = "input-notification error png_bg";

		document.getElementById("msg-phone").innerHTML = "Please enter phone number";

		document.getElementById("pno").focus();

		return false;

	}else{

		document.getElementById("msg-phone").innerHTML = "";

		document.getElementById("msg-phone").className = "";

	}

	if(trim(document.getElementById("addres").value)=="")

	{

		document.getElementById("msg-address").innerHTML = "";

		document.getElementById("msg-address").className = "input-notification error png_bg";

		document.getElementById("msg-address").innerHTML = "Please enter address";

		document.getElementById("addres").focus();

		return false;

	}else{

		document.getElementById("msg-address").innerHTML = "";

		document.getElementById("msg-address").className = "";

	}	

	

}

function chkuser1()

{

	if(trim(document.getElementById("usern").value)=="")

	{

		document.getElementById("msg-oun").innerHTML = "";

		document.getElementById("msg-oun").className = "input-notification error png_bg";

		document.getElementById("msg-oun").innerHTML = "Please input user name";

		document.getElementById("usern").focus();

		return false;

	}else{

		document.getElementById("msg-oun").innerHTML = "";

		document.getElementById("msg-oun").className = "";

	}

	

	if(trim(document.getElementById("userp").value)=="")

	{

		document.getElementById("msg-oup").innerHTML = "";

		document.getElementById("msg-oup").className = "input-notification error png_bg";

		document.getElementById("msg-oup").innerHTML = "Please enter user password";

		document.getElementById("userp").focus();

		return false;

	}else{

		document.getElementById("msg-oup").innerHTML = "";

		document.getElementById("msg-oup").className = "";

	}

	

	var filter=/^[a-zA-Z][\w\_\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;

	 var filter2=/^[a-zA-Z\ ]+$/;

	if(trim(document.getElementById("email").value)=="")

	{

		document.getElementById("msg-oemail").innerHTML = "";

		document.getElementById("msg-oemail").className = "input-notification error png_bg";

		document.getElementById("msg-oemail").innerHTML = "Please enter emailid";

		document.getElementById("email").focus();

		return false;

	}

	if(!filter.test(trim(document.getElementById("email").value)))

	{

		document.getElementById("msg-oemail").innerHTML = "";

		document.getElementById("msg-oemail").className = "input-notification error png_bg";

		document.getElementById("msg-oemail").innerHTML = "Please enter valid email";

		document.getElementById("email").focus();

		return false;

	}else{

		document.getElementById("msg-oemail").innerHTML = "";

		document.getElementById("msg-oemail").className = "";

	}

	if(trim(document.getElementById("pno").value)=="")

	{

		document.getElementById("msg-ophone").innerHTML = "";

		document.getElementById("msg-ophone").className = "input-notification error png_bg";

		document.getElementById("msg-ophone").innerHTML = "Please enter phone number";

		document.getElementById("pno").focus();

		return false;

	}else{

		document.getElementById("msg-ophone").innerHTML = "";

		document.getElementById("msg-ophone").className = "";

	}

	if(trim(document.getElementById("addres").value)=="")

	{

		document.getElementById("msg-oaddress").innerHTML = "";

		document.getElementById("msg-oaddress").className = "input-notification error png_bg";

		document.getElementById("msg-oaddress").innerHTML = "Please enter address";

		document.getElementById("addres").focus();

		return false;

	}else{

		document.getElementById("msg-oaddress").innerHTML = "";

		document.getElementById("msg-oaddress").className = "";

	}

	

}

function chkcategory()

{

	if(trim(document.getElementById("catname").value)=="")

	{

		document.getElementById("msg-catn").innerHTML = "";

		document.getElementById("msg-catn").className = "input-notification error png_bg";

		document.getElementById("msg-catn").innerHTML = "Please enter your category name";

		document.getElementById("catname").focus();

		return false;

	}else{

		document.getElementById("msg-catn").innerHTML = "";

		document.getElementById("msg-catn").className = "";

	}

	

	

}

function chkcategory1()

{

	if(trim(document.getElementById("catname").value)=="")

	{

		document.getElementById("msg-ocatn").innerHTML = "";

		document.getElementById("msg-ocatn").className = "input-notification error png_bg";

		document.getElementById("msg-ocatn").innerHTML = "Please enter your category name";

		document.getElementById("catname").focus();

		return false;

	}else{

		document.getElementById("msg-ocatn").innerHTML = "";

		document.getElementById("msg-ocatn").className = "";

	}

	

	

}



function chksub()

{

	if(trim(document.getElementById("parent_id").value)=="")

	{

		document.getElementById("msg-parent").innerHTML = "";

		document.getElementById("msg-parent").className = "input-notification error png_bg";

		document.getElementById("msg-parent").innerHTML = "select your category";

		document.getElementById("parent_id").focus();

		return false;

	}else{

		document.getElementById("msg-parent").innerHTML = "";

		document.getElementById("msg-parent").className = "";

	}

	if(trim(document.getElementById("subname").value)=="")

	{

		document.getElementById("msg-sub").innerHTML = "";

		document.getElementById("msg-sub").className = "input-notification error png_bg";

		document.getElementById("msg-sub").innerHTML = "Please enter your subcategory name";

		document.getElementById("subname").focus();

		return false;

	}else{

		document.getElementById("msg-sub").innerHTML = "";

		document.getElementById("msg-sub").className = "";

	}

	

}

function chksub1()

{

	if(trim(document.getElementById("parent_id").value)=="")

	{

		document.getElementById("msg-oparent").innerHTML = "";

		document.getElementById("msg-oparent").className = "input-notification error png_bg";

		document.getElementById("msg-oparent").innerHTML = "select your category";

		document.getElementById("parent_id").focus();

		return false;

	}else{

		document.getElementById("msg-oparent").innerHTML = "";

		document.getElementById("msg-oparent").className = "";

	}

	

	

	if(trim(document.getElementById("subname").value)=="")

	{

		document.getElementById("msg-osub").innerHTML = "";

		document.getElementById("msg-osub").className = "input-notification error png_bg";

		document.getElementById("msg-osub").innerHTML = "Please enter your subcategory name";

		document.getElementById("subname").focus();

		return false;

	}else{

		document.getElementById("msg-osub").innerHTML = "";

		document.getElementById("msg-osub").className = "";

	}

	

	

}

function chkclub()

{

	

	if(trim(document.getElementById("clubo").value)=="")

	{

		document.getElementById("msg-clubo").innerHTML = "";

		document.getElementById("msg-clubo").className = "input-notification error png_bg";

		document.getElementById("msg-clubo").innerHTML = "Please enter club name";

		document.getElementById("clubo").focus();

		return false;

	}else{

		document.getElementById("msg-clubo").innerHTML = "";

		document.getElementById("msg-clubo").className = "";

	}

	

	if(trim(document.getElementById("clubP").value)=="")

	{

		document.getElementById("msg-clubp").innerHTML = "";

		document.getElementById("msg-clubp").className = "input-notification error png_bg";

		document.getElementById("msg-clubp").innerHTML = "Please enter club product";

		document.getElementById("clubP").focus();

		return false;

	}else{

		document.getElementById("msg-clubp").innerHTML = "";

		document.getElementById("msg-clubp").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "input-notification error png_bg";

		document.getElementById("msg-details").innerHTML = "Please enter club details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "";

	}

	

	var ext = document.getElementById("cimage").value.substring(document.getElementById("cimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("cimage").value)=="")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload club image";

		document.getElementById("cimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "";

	}else{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("cimage").focus();

		return false;

	}



}



function chkclub1()

{

	

	if(trim(document.getElementById("clubo").value)=="")

	{

		document.getElementById("msg-oclubo").innerHTML = "";

		document.getElementById("msg-oclubo").className = "input-notification error png_bg";

		document.getElementById("msg-oclubo").innerHTML = "Please enter club name";

		document.getElementById("clubo").focus();

		return false;

	}else{

		document.getElementById("msg-oclubo").innerHTML = "";

		document.getElementById("msg-oclubo").className = "";

	}

	

	if(trim(document.getElementById("clubP").value)=="")

	{

		document.getElementById("msg-oclubp").innerHTML = "";

		document.getElementById("msg-oclubp").className = "input-notification error png_bg";

		document.getElementById("msg-oclubp").innerHTML = "Please enter club product";

		document.getElementById("clubP").focus();

		return false;

	}else{

		document.getElementById("msg-oclubp").innerHTML = "";

		document.getElementById("msg-oclubp").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "input-notification error png_bg";

		document.getElementById("msg-odetails").innerHTML = "Please enter club details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "";

	}

	

/*	var ext = document.getElementById("cimage").value.substring(document.getElementById("cimage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("cimage").value)=="")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload club image";

		document.getElementById("cimage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "";

	}else{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("cimage").focus();

		return false;

	}*/



}





function chkcombo()

{

	

	if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-subcat").innerHTML = "";

		document.getElementById("msg-subcat").className = "input-notification error png_bg";

		document.getElementById("msg-subcat").innerHTML = "Please select your subcategory";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-subcat").innerHTML = "";

		document.getElementById("msg-subcat").className = "";

	}

	

	if(trim(document.getElementById("combo").value)=="")

	{

		document.getElementById("msg-combo").innerHTML = "";

		document.getElementById("msg-combo").className = "input-notification error png_bg";

		document.getElementById("msg-combo").innerHTML = "Please select your cluboffer";

		document.getElementById("combo").focus();

		return false;

	}else{

		document.getElementById("msg-combo").innerHTML = "";

		document.getElementById("msg-combo").className = "";

	}

	

}



function chkcombo1()

{

	

	if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-osubcat").innerHTML = "";

		document.getElementById("msg-osubcat").className = "input-notification error png_bg";

		document.getElementById("msg-osubcat").innerHTML = "Please select your subcategory";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-osubcat").innerHTML = "";

		document.getElementById("msg-osubcat").className = "";

	}

	

	if(trim(document.getElementById("combo").value)=="")

	{

		document.getElementById("msg-ocombo").innerHTML = "";

		document.getElementById("msg-ocombo").className = "input-notification error png_bg";

		document.getElementById("msg-ocombo").innerHTML = "Please select your cluboffer";

		document.getElementById("combo").focus();

		return false;

	}else{

		document.getElementById("msg-ocombo").innerHTML = "";

		document.getElementById("msg-ocombo").className = "";

	}

	

}



function chkhot()

{

	

	if(trim(document.getElementById("hoto").value)=="")

	{

		document.getElementById("msg-hoto").innerHTML = "";

		document.getElementById("msg-hoto").className = "input-notification error png_bg";

		document.getElementById("msg-hoto").innerHTML = "Please enter hot name";

		document.getElementById("hoto").focus();

		return false;

	}else{

		document.getElementById("msg-hoto").innerHTML = "";

		document.getElementById("msg-hoto").className = "";

	}

	

	if(trim(document.getElementById("hotP").value)=="")

	{

		document.getElementById("msg-hotP").innerHTML = "";

		document.getElementById("msg-hotP").className = "input-notification error png_bg";

		document.getElementById("msg-hotP").innerHTML = "Please enter hot price";

		document.getElementById("hotP").focus();

		return false;

	}else{

		document.getElementById("msg-hotP").innerHTML = "";

		document.getElementById("msg-hotP").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "input-notification error png_bg";

		document.getElementById("msg-details").innerHTML = "Please enter hot details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-details").innerHTML = "";

		document.getElementById("msg-details").className = "";

	}

	

	var ext = document.getElementById("himage").value.substring(document.getElementById("himage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("himage").value)=="")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload hot image";

		document.getElementById("himage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "";

	}else{

		document.getElementById("msg-image").innerHTML = "";

		document.getElementById("msg-image").className = "input-notification error png_bg";

		document.getElementById("msg-image").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("himage").focus();

		return false;

	}



}



function chkhot1()

{

	

	if(trim(document.getElementById("hoto").value)=="")

	{

		document.getElementById("msg-ohoto").innerHTML = "";

		document.getElementById("msg-ohoto").className = "input-notification error png_bg";

		document.getElementById("msg-ohoto").innerHTML = "Please enter hot name";

		document.getElementById("hoto").focus();

		return false;

	}else{

		document.getElementById("msg-ohoto").innerHTML = "";

		document.getElementById("msg-ohoto").className = "";

	}

	

	if(trim(document.getElementById("hotP").value)=="")

	{

		document.getElementById("msg-ohotP").innerHTML = "";

		document.getElementById("msg-ohotP").className = "input-notification error png_bg";

		document.getElementById("msg-ohotP").innerHTML = "Please enter hot price";

		document.getElementById("hotP").focus();

		return false;

	}else{

		document.getElementById("msg-ohotP").innerHTML = "";

		document.getElementById("msg-ohotP").className = "";

	}

	if(trim(document.getElementById("details").value)=="")

	{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "input-notification error png_bg";

		document.getElementById("msg-odetails").innerHTML = "Please enter hot details";

		document.getElementById("details").focus();

		return false;

	}else{

		document.getElementById("msg-odetails").innerHTML = "";

		document.getElementById("msg-odetails").className = "";

	}

	

	/*var ext = document.getElementById("himage").value.substring(document.getElementById("himage").value.lastIndexOf('.') + 1);

	if(trim(document.getElementById("himage").value)=="")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload hot image";

		document.getElementById("himage").focus();

		return false;

	}else if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")

	{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "";

	}else{

		document.getElementById("msg-oimage").innerHTML = "";

		document.getElementById("msg-oimage").className = "input-notification error png_bg";

		document.getElementById("msg-oimage").innerHTML = "Please upload only jpg or gif image";

		document.getElementById("himage").focus();

		return false;

	}*/



}

function chkhotoffer()

{

	

	if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-subcat").innerHTML = "";

		document.getElementById("msg-subcat").className = "input-notification error png_bg";

		document.getElementById("msg-subcat").innerHTML = "Please select your subcategory";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-subcat").innerHTML = "";

		document.getElementById("msg-subcat").className = "";

	}

	

	if(trim(document.getElementById("hoto").value)=="")

	{

		document.getElementById("msg-hoto").innerHTML = "";

		document.getElementById("msg-hoto").className = "input-notification error png_bg";

		document.getElementById("msg-hoto").innerHTML = "Please select your hotoffer";

		document.getElementById("hoto").focus();

		return false;

	}else{

		document.getElementById("msg-hoto").innerHTML = "";

		document.getElementById("msg-hoto").className = "";

	}

	

}



function chkhotoffer1()

{

	

	if(trim(document.getElementById("subcategory").value)=="")

	{

		document.getElementById("msg-osubcat").innerHTML = "";

		document.getElementById("msg-osubcat").className = "input-notification error png_bg";

		document.getElementById("msg-osubcat").innerHTML = "Please select your subcategory";

		document.getElementById("subcategory").focus();

		return false;

	}else{

		document.getElementById("msg-osubcat").innerHTML = "";

		document.getElementById("msg-osubcat").className = "";

	}

	

	if(trim(document.getElementById("hoto").value)=="")

	{

		document.getElementById("msg-ohoto").innerHTML = "";

		document.getElementById("msg-ohoto").className = "input-notification error png_bg";

		document.getElementById("msg-ohoto").innerHTML = "Please select your hotoffer";

		document.getElementById("hoto").focus();

		return false;

	}else{

		document.getElementById("msg-ohoto").innerHTML = "";

		document.getElementById("msg-ohoto").className = "";

	}

	

}



function chkpass()

{

	if(trim(document.getElementById("oldpass").value)=="")

	{

		document.getElementById("msg-oldpass").innerHTML = "";

		document.getElementById("msg-oldpass").className = "input-notification error png_bg";

		document.getElementById("msg-oldpass").innerHTML = "Please enter your old password";

		document.getElementById("oldpass").focus();

		return false;

	}else{

		document.getElementById("msg-oldpass").innerHTML = "";

		document.getElementById("msg-oldpass").className = "";

	}
	if(trim(document.getElementById("newpass").value)=="")

	{

		document.getElementById("msg-newpass").innerHTML = "";

		document.getElementById("msg-newpass").className = "input-notification error png_bg";

		document.getElementById("msg-newpass").innerHTML = "Please enter your new password";

		document.getElementById("newpass").focus();

		return false;

	}else{

		document.getElementById("msg-newpass").innerHTML = "";

		document.getElementById("msg-newpass").className = "";

	}

	if(trim(document.getElementById("newpass").value)!=trim(document.getElementById("conpass").value))

	{

		document.getElementById("msg-conpass").innerHTML = "";

		document.getElementById("msg-conpass").className = "input-notification error png_bg";

		document.getElementById("msg-conpass").innerHTML = "Please enter your confirm password";

		document.getElementById("conpass").focus();

		return false;

	}else{

		document.getElementById("msg-conpass").innerHTML = "";

		document.getElementById("msg-conpass").className = "";

	}

	

}

function GetXmlHttpObject()

{

var xmlHttp=null;

try

  {

  // Firefox, Opera 8.0+, Safari

  xmlHttp=new XMLHttpRequest();

  }

catch (e)

  {

  // Internet Explorer

  try

    {

    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");

    }

  catch (e)

    {

    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");

    }

  }

return xmlHttp;

}