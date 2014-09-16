function Admin_Login()
{
	doc = document.form_alogin;
if(doc.admin_uname.value=="")
	{
		alert("User Name Should Not be Blank");
		doc.admin_uname.focus();
		return false;
	}
if(doc.admin_pass.value=="")
	{
		alert("Password Should Not be Blank");
		doc.admin_pass.focus();
		return false;
	}
}

function HelpUpdate()
{
	doc = document.form_edit;
if(doc.help_question.value=="")
	{
		alert("Question Should Not be Blank");
		doc.help_question.focus();
		return false;
	}
if(doc.help_answer.value=="")
	{
		alert("Answer Should Not be Blank");
		doc.help_answer.focus();
		return false;
	}
}

function FaqUpdate()
{
	doc = document.form_edit;
if(doc.faq_question.value=="")
	{
		alert("Question Should Not be Blank");
		doc.faq_question.focus();
		return false;
	}
if(doc.faq_answer.value=="")
	{
		alert("Answer Should Not be Blank");
		doc.faq_answer.focus();
		return false;
	}
}

function SettingsUpdate()
{ 
	doc = document.form_set;
if(doc.title.value=="")
	{
		alert("Title Should Not be Blank");
		doc.title.focus();
		return false;
	}
if(doc.pro_title.value=="")
	{
		alert("Project Title Should Not be Blank");
		doc.pro_title.focus();
		return false;
	}
if(doc.site_name.value=="")
	{
		alert("Site Name Should Not be Blank");
		doc.site_name.focus();
		return false;
	}
if(doc.admin_mail.value=="")
	{
		alert("Admin Mail Should Not be Blank");
		doc.admin_mail.focus();
		return false;
	}

if(doc.site_logo1.value=="")
{
if(doc.site_logo.value=="")
	{
		alert("Site Logo Should Not be Blank");
		doc.site_logo.focus();
		return false;
	}
}

if(doc.site_logo.value!="")
	{
		var logo = doc.site_logo.value;
		var lo = logo.split(".");
		
		if(lo[1]!='jpg' && lo[1]!='JPG' && lo[1]!='jpeg' && lo[1]!='JPEG' && lo[1]!='PNG' && lo[1]!='png' && lo[1]!='gif' && lo[1]!='GIF' )
		{
		alert("Site Logo Should be JPG or GIF or PNG");
		doc.site_logo.focus();
		return false;
		}
	}


if(doc.paypal_id.value=="")
	{
		alert("Paypal Id Should Not be Blank");
		doc.paypal_id.focus();
		return false;
	}
}

function AddCat()
{
	doc = document.form_cat;
if(doc.category.value=="")
	{
		alert("Category Should Not be Blank");
		doc.category.focus();
		return false;
	}
}

function AddProduct()
{
	doc = document.form_product;
if(doc.prod_title.value=="")
	{
		alert("Product Title Should Not be Blank");
		doc.prod_title.focus();
		return false;
	}
if(doc.selcat.value=="")
	{
		alert("Select Category");
		doc.selcat.focus();
		return false;
	}
if(doc.selsubcat.value=="")
	{
		alert("Select Sub Category");
		doc.selsubcat.focus();
		return false;
	}
if(doc.selstyle.value=="")
	{
		alert("Select Style");
		doc.selstyle.focus();
		return false;
	}
if(doc.fimage.value=="")
	{
		alert("Select Product Front Image");
		doc.fimage.focus();
		return false;
	}
if(doc.fimage.value!="")
	{
		var str = doc.fimage.value.substring(doc.fimage.value.indexOf('.'));
	if((str!=".jpg") && (str!=".png") && (str!=".gif")){
		alert("Invalid file.Only jpg,gif,png Files are Allowed");
		doc.fimage.value="";
		doc.fimage.focus();
		return false;
		
	}
	}
if(doc.bimage.value=="")
	{
		alert("Select Product Back Image");
		doc.bimage.focus();
		return false;
	}
if(doc.bimage.value!="")
	{
		var str = doc.bimage.value.substring(doc.bimage.value.indexOf('.'));
	if((str!=".jpg") && (str!=".png") && (str!=".gif")){
		alert("Invalid file.Only jpg,gif,png Files are Allowed");
		doc.bimage.value="";
		doc.bimage.focus();
		return false;
		
	}
if(doc.normal_ship.value=="")
	{
		alert("Enter Normal Shipping Charges");
		doc.normal_ship.focus();
		return false;
	}
	if(doc.standard_ship.value=="")
	{
		alert("Enter Standart Shipping Charges");
		doc.standard_ship.focus();
		return false;
	}
}
}

function AddCat()
{
	doc = document.form_cat;
if(doc.category.value=="")
	{
		alert("Category Should Not be Blank");
		doc.category.focus();
		return false;
	}
}

function EditProduct()
{
	doc = document.form_eproduct;
if(doc.prod_title.value=="")
	{
		alert("Product Title Should Not be Blank");
		doc.prod_title.focus();
		return false;
	}
if(doc.selcat.value=="")
	{
		alert("Select Category");
		doc.selcat.focus();
		return false;
	}
if(doc.selsubcat.value=="")
	{
		alert("Select Sub Category");
		doc.selsubcat.focus();
		return false;
	}
if(doc.selstyle.value=="")
	{
		alert("Select Style");
		doc.selstyle.focus();
		return false;
	}
if(doc.fimage.value!="")
	{
		var str = doc.fimage.value.substring(doc.fimage.value.indexOf('.'));
	if((str!=".jpg") && (str!=".png") && (str!=".gif")){
		alert("Invalid file.Only jpg,gif,png Files are Allowed");
		doc.fimage.value="";
		doc.fimage.focus();
		return false;
		
	}
	}
if(doc.bimage.value!="")
	{
		var str = doc.bimage.value.substring(doc.bimage.value.indexOf('.'));
	if((str!=".jpg") && (str!=".png") && (str!=".gif")){
		alert("Invalid file.Only jpg,gif,png Files are Allowed");
		doc.bimage.value="";
		doc.bimage.focus();
		return false;
		
	}
if(doc.normal_ship.value=="")
	{
		alert("Enter Normal Shipping Charges");
		doc.normal_ship.focus();
		return false;
	}
	if(doc.standard_ship.value=="")
	{
		alert("Enter Standart Shipping Charges");
		doc.standard_ship.focus();
		return false;
	}
}
}

function ChangePass()
{
	doc = document.form_pass;
if(doc.oldpass.value=="")
	{
		alert("Old Password Should Not be Blank");
		doc.oldpass.focus();
		return false;
	}
if(doc.newpass.value=="")
	{
		alert("New Password Should Not be Blank");
		doc.newpass.focus();
		return false;
	}
if(doc.newcpass.value=="")
	{
		alert("Confirm Password Should Not be Blank");
		doc.newcpass.focus();
		return false;
	}
else if(doc.newpass.value!=doc.newcpass.value)
	{
		alert("Confirm Password Should be Same as New Password");
		doc.newcpass.value='';
		doc.newcpass.focus();
		return false;
	}

}

function OtherPriceValid()
{
 doc = document.form_oprice;
 
 if(doc.logo.value=="")
 	{
	 alert("Logo Price Should not be Blank");
	 doc.logo.focus();
	 return false;
	}
 if(doc.slow.value=="")
 	{
	 alert("Slow Shipping Price Should not be Blank");
	 doc.slow.focus();
	 return false;
	}
 if(doc.standard.value=="")
 	{
	 alert("Standard Shipping Price Should not be Blank");
	 doc.standard.focus();
	 return false;
	}
 if(doc.ship_disc.value=="")
 	{
	 alert("Shipping Discount Should not be Blank");
	 doc.ship_disc.focus();
	 return false;
	}
}