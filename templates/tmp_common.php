<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo PRO_TITLE; ?></title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="js/FormValidation.js"></script>
</head>

<body>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<?php @include _PATH_TEMPLATE."header.php"; ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        
        <tr>
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="64%" align="left" valign="top" style="padding:10px 5px 5px 5px">
			  <?php include(_PATH_TEMPLATE.$page.".php"); ?>
			  </td>
				<?php if($page == 'index') { ?>
              <td width="1%" style="padding:10px 5px 5px 5px">&nbsp;</td>
              <td width="35%" align="left" valign="top" style="padding:10px 5px 5px 5px">
			  <?php @include _PATH_TEMPLATE."rightnavi.php"; ?>
			  </td>
			   <?php } else if(($page == 'product') || ($page == 'categories') ) { ?>
			  <td width="2%" style="padding:10px 5px 5px 5px">&nbsp;</td>
              <td width="24%" align="left" valign="top" style="padding:10px 5px 5px 5px">
			  <?php @include _PATH_TEMPLATE."rightnavi_prod.php"; ?>
			  </td>
			  <?php } else if(($page == 'lab') || ($page == 'display_cart')) { ?>
			 <!-- <td width="2%" style="padding:10px 5px 5px 5px">&nbsp;</td>-->
              <?php } else { ?>
			  <td width="2%" style="padding:10px 5px 5px 5px">&nbsp;</td>
              <td width="24%" align="left" valign="top" style="padding:10px 5px 5px 5px">
			  <?php @include _PATH_TEMPLATE."rightnavi_com.php"; ?>
			  </td>
			  <?php } ?>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom:5px; background-color:#D5D5DF">
              <tr>
                <td><?php @include _PATH_TEMPLATE."footer.php"; ?></td>
              </tr>
            </table></td>
        </tr>
    </table></td>
  </tr>
</table>

<map name="Map" id="Map"><area shape="rect" coords="91,277,176,300" href="#" /></map></body>
</html>
