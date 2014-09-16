<?php
if(isset($_REQUEST['submit_login']))
{
$datas = $probj -> Login(PFO_REGISTER,ADMIN_MAIL,SITE_NAME,SITE_LOGO,PRO_TITLE);
}
if(isset($_COOKIE['pfoname']) && isset($_COOKIE['pfopassword']))
{
$_SESSION['Session_email']=$_COOKIE['pfoname'];
$_SESSION['password']=$_COOKIE['pfopassword'];
}
//$cat = Select(PFO_CAT);
$cat = SelectOrderBy(PFO_CAT,'category');
//$style = Select(PFO_STYLE);
$style = SelectOrderBy(PFO_STYLE,'style');

$cartid = $_SESSION['pfo_userid'];
$qry = mysql_query("SELECT * FROM `pfo_cart` WHERE `user_id` = '$cartid' ");
$ccount = mysql_num_rows($qry);
if($ccount>0)
{
$cartc = $ccount;
}
else
{
$cartc = 0;
}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="67%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="82%" align="left" valign="middle"><a href="index.php"><img src="images/<?php echo SITE_LOGO; ?>" width="232" height="49" class="logo" border="0" /></a></td>
            <td width="18%" align="right" valign="bottom"><img src="images/customersupt.jpg" width="133" height="30" class="logo" /></td>
          </tr>
        </table></td>
        <td width="33%" rowspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right">
            <div class="topnavlink">
            <ul>
            <li><a href="index.php">Home</a></li>
             <li>.</li>
             <li><a href="aboutus.php"> About us</a></li> 
             <li>.</li>
			<li><a href="contactus.php"> Contact us</a></li> 
             <li>.</li>             
             <li><a href="faq.php"> FAQ </a></li> 
             <li>.</li>
             <li><a href="enquiry.php">  Enquiry</a></li> 
             <li>.</li>
             <li><a href="help.php"> Help</a></li> 
            </ul>
            </div>            </td>
          </tr>
          
        </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px">
            <tr>
              <td width="32%" align="center" valign="top" style="padding-bottom:5px">
<div id="craftysyntax" style="padding-left:5px;">
<!--<script type="text/javascript" src="http://pfo.udhayanidhi.com/livechat/livehelp_js.php?eo=1&department=1&amp;serversession=1&amp;pingtimes=15"></script>
<script type="text/javascript" src="http://2daybiz.com/products/businesscard/livechat/livehelp_js.php?eo=1&department=1&amp;serversession=1&amp;pingtimes=15"></script>-->


<!-- BEGIN Comm100 Live Chat Button Code --><a href="http://livechat.comm100.com/" target="_blank" onclick="comm100_152563.openChatWindow(event,64,-1);return false;"><img style="border:0px" id="comm100_ButtonImage" src="https://chatserver.comm100.com/BBS.aspx?siteId=152563&amp;planId=64&amp;partnerId=-1" alt="Live Chat"/></a><script src="https://chatserver.comm100.com/js/LiveChat.js?siteId=152563&amp;planId=64&amp;partnerId=-1" type="text/javascript"></script><br /><span id="comm100_track" style="font-family: Arial; font-size: 10px; font-weight:normal; color: Gray; line-height: 12px;"><a href="http://livechat.comm100.com/" style="text-decoration: none; color: Gray; font-weight: bold;" target="_blank"></a></span><!-- End Comm100 Live Chat Button Code -->


</div>

</td>
              <td width="68%" align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="viewcartbg">
                <tr>
                  <td width="20%" height="58" align="center" valign="middle" style="padding:5px"><img src="images/cartimg.jpg" width="33" height="27" />                    </td>
                  <td width="53%" align="left" valign="top" class="mycart_txt" style="padding:5px">My Cart Details<br />
                   <span class="mycart_txt_normal"> You currently have 
                    (<?php echo $cartc; ?>) items in your cart</span></td>
                  <td width="27%" align="left" valign="middle">
                   
                      <input type="image" name="imageField" id="imageField" src="images/cart_btn.jpg" onclick="window.location='display_cart.php' " />                  </td>
                </tr>
              </table></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="10%" align="center" valign="middle" class="mainnavbg"><a href="categories.php" class="mainnav_link">Categories</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /> </td>
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="14%" align="center" valign="middle" class="mainnavbg"><a href="portfolio.php" class="mainnav_link">My Portfolio</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
              <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="9%" align="center" valign="middle" class="mainnavbg"><a href="product.php" class="mainnav_link">Products</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="11%" align="center" valign="middle" class="mainnavbg"><a href="services.php" class="mainnav_link">Services</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="11%" align="center" valign="middle" class="mainnavbg"><a href="images.php" class="mainnav_link">My Images</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
           <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="15%" align="center" valign="middle" class="mainnavbg"><a href="bookmark.php" class="mainnav_link">My Bookmarks</a></td>
            <td width="1%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
            
             <td width="1">&nbsp;</td>
              <td width="1%"><img src="images/Tab_leftlink.jpg" width="7" height="27" /></td>
            <td width="25%" align="center" valign="middle" class="mainnavbg"><a href="orderhistory.php" class="mainnav_link">Order History</a></td>
            <td width="2%" align="right" valign="top" class="mainnavbg"><img src="images/tab_rightlink.jpg" width="6" height="27" /></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="selectbg">
          <tr>
            <td width="50%" colspan="4" align="left" valign="middle" >
			<form name="form_search" method="post" action="categories.php">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" class="category_boxbg">
                  <select name="selcat" class="category_boxbg_txt" >
                                        <option value="">Select your profession</option>
										<?php for($c=0; $c<count($cat); $c++) { ?>
										<option value="<?php echo $cat[$c]['cat_id']; ?>" <?php if($cat[$c]['cat_id']==$_REQUEST['selcat']) echo "selected"; ?>><?php echo $cat[$c]['category']; ?></option>
										<?php } ?>
                                       
                                    </select>               </td>
                <td width="2%">&nbsp;</td>
                <td width="31%" class="category_boxbg">
                 <select name="selstyle" class="category_boxbg_txt" >
                                        <option value="">Select your style</option>
										<?php for($s=0; $s<count($style); $s++) { ?>
										<option value="<?php echo $style[$s]['sty_id']; ?>" <?php if($style[$s]['sty_id']==$_REQUEST['selstyle']) echo "selected"; ?>><?php echo $style[$s]['style']; ?></option>
										<?php } ?>
                                    </select>             </td>
                <td width="45%" style="padding-left:10px">
                  <input type="image" src="images/but_go.jpg" name="prodsearch" value="Submit" />               </td>
              </tr>
            </table>
			</form>
			</td>
            <td width="2%" style="padding-left:5px">&nbsp;</td>
			<?php if(isset($_SESSION['pfo_userid'])) { ?>
            <td width="12%" align="left" valign="middle"  style="padding-left:2px;">&nbsp;</td>
              <td width="12%" align="left" valign="middle">&nbsp;</td>
               
              <td width="1%">&nbsp;</td>
              <td width="1%" style="padding-left:5px">&nbsp;</td>
           <td width="31%" align="right" valign="top" style="padding-top:20px;padding-right:20px" class="Welcome_txt">Welcome <?php echo $_SESSION['pfo_username']; ?> / 
             <a href="logout.php" class="Logout_link">Logout</a></td>
			  <?php } else { ?>
			  <td width="32%" colspan="3" align="left" valign="middle"  style="padding-left:2px;">
			<form name="form_login" method="post" action="login.php">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="22%" class="category_boxbg"><input name="login_email" type="text" class="username_txt" id="textfield32" onfocus="if(this.value=='User name') this.value='';" onblur="if(this.value=='') this.value='User name';" value="<?php if($_SESSION['Session_email']!=''){ echo $_SESSION['Session_email']; } else {?>User name<?php } ?>" /></td>
                <td width="2%">&nbsp;</td>
                <td width="31%" class="category_boxbg"><input name="login_pass" type="password" class="username_txt" id="textfield33" onfocus="if(this.value=='Password') this.value='';" onblur="if(this.value=='') this.value='Password';" value="<?php if($_SESSION['Session_email']!=''){ echo $_SESSION['password']; } else {?>Password<?php } ?>" /></td>
                <td width="45%" style="padding-left:10px"><input type="submit" name="submit_login" id="button222" value="Go" class="go_btn" onClick="javascript:return LoginValidation();"/>                </td>
              </tr>
            </table>
			</form>
			</td>
            <td width="1%" style="padding-left:5px"><img src="images/linkmainnav_divider.jpg" /></td>
            <td width="15%" align="center" valign="top" style="padding-top:7px"><a href="forgot_pass.php" class="forgot_txtlink">Forgot Password?</a><br />
              <a href="registration.php" class="forgot_txtlink"> New User Signup Here</a></td>
			  <?php } ?>
			  
          </tr>
          
        </table></td>
        </tr>
		<?php if($page == 'index') { ?>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="65%"><img src="images/banner.jpg" width="620" height="224" /></td>
            <td width="35%"><img src="images/custombusi.jpg" width="340" height="224" /></td>
          </tr>
        </table></td>
      </tr>
	  <?php }  ?>
      
    </table>