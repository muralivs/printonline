// JavaScript Document

function RegValidation()
{
	doc = document.form_reg;
if(doc.reg_firstname.value == "" )
    {
	alert("First Name Should Not be Blank");
	doc.reg_firstname.focus();
	return false;
	}
if(doc.reg_lastname.value == "" )
    {
	alert("Last Name Should Not be Blank");
	doc.reg_lastname.focus();
	return false;
	}
if(doc.reg_address1.value == "" )
    {
	alert("Address Line 1 Should Not be Blank");
	doc.reg_address1.focus();
	return false;
	}
if(doc.reg_country.value == "" )
    {
	alert("Select Country");
	doc.reg_country.focus();
	return false;
	}
if(doc.reg_state.value == "" )
    {
	alert("State Should Not be Blank");
	doc.reg_state.focus();
	return false;
	}
if(doc.reg_city.value == "" )
    {
	alert("City Should Not be Blank");
	doc.reg_city.focus();
	return false;
	}
	
// --------------------- Zip Code Validation Starts here ---------------	
	function validateZipCode(elementValue){
    var zipCodePattern = /^\d{6}$|^\d{5}$|^\d{5}-\d{4}$/;
     return zipCodePattern.test(elementValue);
	}
	
	if (validateZipCode(doc.reg_zip.value)==false){
		alert("Please Enter a Valid Zip Code")
		doc.reg_zip.value=""
		doc.reg_zip.focus()
		return false
	}
if(doc.reg_zip.value == "" )
    {
	alert("Zip Code Should Not be Blank");
	doc.reg_zip.focus();
	return false;
	}
	
// --------------------- Zip Code Validation Ends here ---------------	

/*if(doc.reg_address2.value == "" )
    {
	alert("Address Line 2 Should Not be Blank");
	doc.reg_address2.focus();
	return false;
	}*/
/*if(doc.reg_phone.value == "" )
    {
	alert("Phone Number Should Not be Blank");
	doc.reg_phone.focus();
	return false;
	} */
	
//-----------  Phone number Validation Starts here  ------------------
	
	
	// Declaring required variables
	var digits = "0123456789";
	// non-digit characters which are allowed in phone numbers
	var phoneNumberDelimiters = "()- ";
	// characters which are allowed in international phone numbers
	// (a leading + is OK)
	var validWorldPhoneChars = phoneNumberDelimiters + "+";
	// Minimum no of digits in an international phone no.
	var minDigitsInIPhoneNumber = 10;

	function isInteger(s)
	{   var i;
		for (i = 0; i < s.length; i++)
		{   
			// Check that current character is number.
			var c = s.charAt(i);
			if (((c < "0") || (c > "9"))) return false;
		}
		// All characters are numbers.
		return true;
	}
	function trim(s)
	{   var i;
		var returnString = "";
		// Search through string's characters one by one.
		// If character is not a whitespace, append to returnString.
		for (i = 0; i < s.length; i++)
		{   
			// Check that current character isn't whitespace.
			var c = s.charAt(i);
			if (c != " ") returnString += c;
		}
		return returnString;
	}
	function stripCharsInBag(s, bag)
	{   var i;
		var returnString = "";
		// Search through string's characters one by one.
		// If character is not in bag, append to returnString.
		for (i = 0; i < s.length; i++)
		{   
			// Check that current character isn't whitespace.
			var c = s.charAt(i);
			if (bag.indexOf(c) == -1) returnString += c;
		}
		return returnString;
	}

	function checkInternationalPhone(strPhone){
	var bracket=3
	strPhone=trim(strPhone)
	if(strPhone.indexOf("+")>1) return false
	if(strPhone.indexOf("-")!=-1)bracket=bracket+1
	if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false
	var brchr=strPhone.indexOf("(")
	if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
	if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
	s=stripCharsInBag(strPhone,validWorldPhoneChars);
	return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
	}
	if ((doc.reg_phone.value==null)||(doc.reg_phone.value=="")){
		alert("Please Enter your Phone Number")
		doc.reg_phone.focus()
		return false
	}
	if (checkInternationalPhone(doc.reg_phone.value)==false){
		alert("Please Enter a Valid Phone Number")
		doc.reg_phone.value=""
		doc.reg_phone.focus()
		return false
	}
	
//-----------  Phone number Validation Ends here  ------------------	
	
/*if(doc.reg_fax.value == "" )
    {
	alert("Fax Should Not be Blank");
	doc.reg_fax.focus();
	return false;
	}
if(doc.reg_mobile.value == "" )
    {
	alert("Mobile Number Should Not be Blank");
	doc.reg_mobile.focus();
	return false;
	}*/

if(doc.reg_email.value == "" )
    {
	alert("Email Should Not be Blank");
	doc.reg_email.focus();
	return false;
	}
else if(!echeck(doc.reg_email.value))
    {
	alert("Invalid Email Address");
	doc.reg_email.focus();
	return false;
	}
	
	
//------------------------- Password Validation Starts here ----------------------------------


var invalid = " "; // Invalid character is a space
var minLength = 6; // Minimum length
var pw1 = doc.reg_pass.value;
var pw2 = doc.reg_repass.value;
// check for a value in both fields.
if (pw1 == '' || pw2 == '') {
alert('Please enter your password twice.');
doc.reg_pass.focus();
return false;
}
// check for minimum length
if (pw1.length < minLength) {
alert('Your password must be at least ' + minLength + ' characters long. Try again.');
doc.reg_pass.focus();
return false;
}
// check for spaces
if (pw1.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
doc.reg_pass.focus();
return false;
}
else {
if (pw1 != pw2) {
alert ("Confirm Password Should be Same as New Password.");
doc.reg_repass.focus();
return false;
}
 }




//-------------------   Password Validation Ends here ---------------------------	
	
	
/*if(doc.reg_pass.value == "" )
    {
	alert("Password Should Not be Blank");
	doc.reg_pass.focus();
	return false;
	}
if(doc.reg_repass.value == "" )
    {
	alert("Confirm Password Should Not be Blank");
	doc.reg_repass.focus();
	return false;
	}
else if(doc.reg_pass.value != doc.reg_repass.value)
    {
	alert("Confirm Password Should be Same as Password");
	doc.reg_repass.focus();
	return false;
	}*/
if(doc.code.value == "" )
    {
	alert("Captcha Should Not be Blank");
	doc.code.focus();
	return false;
	}
if(doc.checkbox.checked == false )
    {
	alert("Please Check Terms and Conditions");
	doc.checkbox.focus();
	return false;
	}
}
function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   //alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   //alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    //alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    //alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    //alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    //alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    //alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
}

function Forgot_Validation()
{
	doc = document.form_forgot;
if(doc.email.value == "" )
    {
	alert("Email Should Not be Blank");
	doc.email.focus();
	return false;
	}
else if(!echeck(doc.email.value))
    {
	alert("Invalid Email Address");
	doc.email.focus();
	return false;
	}
}

function LoginValidation()
{
	doc = document.form_login;
if(doc.login_email.value == "" )
    {
	alert("Email Should Not be Blank");
	doc.login_email.focus();
	return false;
	}
if(doc.login_email.value == "User name" )
    {
	alert("Enter Your Email Id");
	doc.login_email.focus();
	return false;
	}
else if(!echeck(doc.login_email.value))
    {
		
	alert("Invalid Email Address");
	doc.login_email.focus();
	return false;
	}
if(doc.login_pass.value == "Password" )
    {
	alert("Enter Your Password");
	doc.login_pass.focus();
	return false;
	}
}

function LoginValidation1()
{
	doc = document.frm_login;
if(doc.login_email.value == "" )
    {
	alert("Enter Your Email Id");
	doc.login_email.focus();
	return false;
	}
else if(!echeck(doc.login_email.value))
    {
		
	alert("Invalid Email Address");
	doc.login_email.focus();
	return false;
	}
if(doc.login_pass.value == "" )
    {
	alert("Enter Your Password");
	doc.login_pass.focus();
	return false;
	}
}

function EnquiryValidation()
{
	doc = document.form_enquiry;
if(doc.enq_name.value == "" )
    {
	alert("Name Should Not be Blank");
	doc.enq_name.focus();
	return false;
	}
if(doc.enq_email.value == "" )
    {
	alert("Email Should Not be Blank");
	doc.enq_email.focus();
	return false;
	}
else if(!echeck(doc.enq_email.value))
    {
	alert("Invalid Email Address");
	doc.enq_email.value='';
	doc.enq_email.focus();
	return false;
	}
if(doc.enq_subject.value == "" )
    {
	alert("Subject Should Not be Blank");
	doc.enq_subject.focus();
	return false;
	}
if(doc.enq_message.value == "" )
    {
	alert("Message Should Not be Blank");
	doc.enq_message.focus();
	return false;
	}

}
function FaqValidate()
{
	doc = document.form_faq;
if(doc.faq_question.value == "" )
    {
	alert("Question Should Not be Blank");
	doc.faq_question.focus();
	return false;
	}
}
function ProfilePhoto()
{
if(document.form_photo.file.value == "" )
    {
	alert("Select Your Photo");
	document.form_photo.file.focus();
	return false;
	}	
}
function ChangePass()
{
	doc = document.form_pass;
	
   //------------------------- Password Validation Starts here ----------------------------------


var invalid = " "; // Invalid character is a space
var minLength = 6; // Minimum length
var pw1 = doc.old_pass.value;
var pw2 = doc.new_pass.value;
var pw3 = doc.con_pass.value; 
// check for a value in all fields.
if (pw1 == '' ) {
alert('Enter Old Password');
doc.old_pass.focus();
return false;
}
if (pw2 == '' ) {
alert('Enter New Password');
doc.new_pass.focus();
return false;
}
if (pw3 == '' ) {
alert('Enter Confirm Password');
doc.con_pass.focus();
return false;
}
// check for minimum length
if (pw2.length < minLength) {
alert('Your password must be at least ' + minLength + ' characters long. Try again.');
doc.new_pass.value="";
doc.new_pass.focus();
return false;
}
// check for spaces
if (pw2.indexOf(invalid) > -1) {
alert("Sorry, spaces are not allowed.");
doc.new_pass.value="";
doc.new_pass.focus();

return false;
}
else {
if (pw2 != pw3) {
alert ("Confirm Password Should be Same as New Password.");
doc.con_pass.value="";
doc.con_pass.focus();
return false;
}
 }




//-------------------   Password Validation Ends here ---------------------------		
/*	
if(doc.old_pass.value=="")
	{
	alert("Enter Old Password");
	doc.old_pass.focus();
	return false;
	}
if(doc.new_pass.value=="")
	{
	alert("Enter New Password");
	doc.new_pass.focus();
	return false;
	}
if(doc.con_pass.value=="")
	{
	alert("Enter Confirm Password");
	doc.con_pass.focus();
	return false;
	}
else if(doc.new_pass.value!=doc.con_pass.value)
	{
	alert("Confirm Password Should be Same as New Password");
	doc.con_pass.value = "";
	doc.con_pass.focus();
	return false;
	} */
}
function ChangeEmail()
{
	doc = document.form_email;
if(doc.new_email.value=="")
	{
	alert("Enter Email Id");
	doc.new_email.focus();
	return false;
	}
}

function ChangeAddress()
{
	doc = document.frmshipp;
	
	if(doc.sfname.value=="")
	{
	doc.sfname.value = doc.cfname.value;
	}
	else
	{
	doc.sfname.value = "";	
	}
	if(doc.slname.value == "")
	{
	doc.slname.value = doc.clname.value;
	}
	else
	{
	doc.slname.value = "";	
	}
	if(doc.semail.value == "")
	{
	doc.semail.value = doc.cemail.value;
	}
	else
	{
	doc.semail.value = "";	
	}
	if(doc.sadd1.value == "")
	{
	doc.sadd1.value = doc.cadd1.value;
	}
	else
	{
	doc.sadd1.value = "";	
	}
	if(doc.sadd2.value=="")
	{
	doc.sadd2.value = doc.cadd2.value;
	}
	else
	{
	doc.sadd2.value = "";	
	}
	if(doc.scountry.value=="")
	{
	doc.scountry.value = doc.ccountry.value;
	}
	else
	{
	doc.scountry.value = "";	
	}
	if(doc.sstate.value=="")
	{
	doc.sstate.value = doc.cstate.value;
	}
	else
	{
	doc.sstate.value = "";	
	}
	if(doc.scity.value=="")
	{
	doc.scity.value = doc.ccity.value;
	}
	else
	{
	doc.scity.value = "";	
	}
	if(doc.szip.value == "")
	{
	doc.szip.value = doc.czip.value;
	}
	else
	{
	doc.szip.value = "";	
	}
	if(doc.sphone.value == "")
	{
	doc.sphone.value = doc.cphone.value;
	}
	else
	{
	doc.sphone.value = "";	
	}
	if(doc.sfax.value == "")
	{
	doc.sfax.value = doc.cfax.value;
	}
	else
	{
	doc.sfax.value = "";	
	}
	if(doc.smobile.value == "")
	{
	doc.smobile.value = doc.cmobile.value;
	}
	else
	{
	doc.smobile.value = "";	
	}
}
function ShippingValidate()
{
	doc = document.frmshipp;
	if(doc.sfname.value=="")
	{
		alert('First Name Should not be Blank');
		doc.sfname.focus();
		return false;
	}
	if(doc.slname.value=="")
	{
		alert('Last Name Should not be Blank');
		doc.slname.focus();
		return false;
	}
	if(doc.semail.value=="")
	{
		alert('Email Should not be Blank');
		doc.semail.focus();
		return false;
	}
	else if(!echeck(doc.semail.value))
	{
		alert('Invalid Email Id');
		doc.semail.focus();
		return false;
	}
	if(doc.sadd1.value=="")
	{
		alert('Address Line 1 Should not be Blank');
		doc.sadd1.focus();
		return false;
	}
	if(doc.scountry.value=="")
	{
		alert('Please Select Country');
		doc.scountry.focus();
		return false;
	}
	if(doc.sstate.value=="")
	{
		alert('State Should not be Blank');
		doc.sstate.focus();
		return false;
	}
	if(doc.scity.value=="")
	{
		alert('City Should not be Blank');
		doc.scity.focus();
		return false;
	}
	if(doc.szip.value=="")
	{
		alert('Zip / Postal Code Should not be Blank');
		doc.szip.focus();
		return false;
	}
	if(doc.sphone.value=="")
	{
		alert('Phone Number Should not be Blank');
		doc.sphone.focus();
		return false;
	}
}