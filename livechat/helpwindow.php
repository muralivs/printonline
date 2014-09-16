<?php
//===========================================================================
//* --    ~~                Crafty Syntax Live Help                ~~    -- *
//===========================================================================
//           URL:   http://www.craftysyntax.com/    EMAIL: livehelp@craftysyntax.com
//         Copyright (C) 2003-2009 Eric Gerdes   (http://www.craftysyntax.com )
// ----------------------------------------------------------------------------
// Please check http://www.craftysyntax.com/ or REGISTER your program for updates
// --------------------------------------------------------------------------
// NOTICE: Do NOT remove the copyright and/or license information any files. 
//         doing so will automatically terminate your rights to use program.
//         If you change the program you MUST clause your changes and note
//         that the original program is Crafty Syntax Live help or you will 
//         also be terminating your rights to use program and any segment 
//         of it.        
// --------------------------------------------------------------------------
// LICENSE:
//     This program is free software; you can redistribute it and/or
//     modify it under the terms of the GNU General Public License
//     as published by the Free Software Foundation; 
//     This program is distributed in the hope that it will be useful,
//     but WITHOUT ANY WARRANTY; without even the implied warranty of
//     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//     GNU General Public License for more details.
//
//     You should have received a copy of the GNU General Public License
//     along with this program in a file named LICENSE.txt .
//===========================================================================
require_once("admin_common.php");
validate_session($identity);

?>
<html>
	<title> Help </title>
	<body bgcolor="#FFFFEE">
		<?php
		  if($UNTRUSTED['info']==1){ ?>
		  	
		  	<b>list of online Visitors and chaters refresh/ajax options</b><br>
		  	
		  	<ul><li><i>AJAX</i> -  This option uses very little refreshing 
		  		 of the page and makes ajax calls to update the list of visitors and chatters.
		  		 It is recommended that you select this option if needing to 
		  		 monitor chat sessions AND visitors </li>
		  		  
		  		  <li><i>Automatic</i> - This option offers the list of chatters with a 
		  		  	refresh of the users and only the visitors if a new visitor
		  		  	 arrives on the site. If hiding vistors and only 
		  		  	 viewing chat sesssions this option is recommended.</li>
		  		  
		  		  <li><i>10 seconds </i> - This option refreshes the list of
		  		  	chatters and visitors every 10 seconds ( not recommended ) </li>

		  		  <li><i>15 seconds </i> - This option refreshes the list of
		  		  	chatters and visitors every 15 seconds. Recommended if
		  		  	the number of visitors on the site at anyone time is over
		  		  	20 and the operator wants to view them.. add more time
		  		  	if more visitors to slow refreshing..  </li>

		  		  <li><i>20 seconds </i> - This option refreshes the list of
		  		  	chatters and visitors every 20 seconds </li>
		  		  	
 		  		  			  		  			  		  	 		  		  	 		  		  	 
		  		  	 </ul>
		  	
		  	
		  	
		  	<?php }
		  if($UNTRUSTED['info']==2){ print $lang['txt6'];  }
		  if($UNTRUSTED['info']==3){ print $lang['txt230'];  }		  
     ?>
</body>
<?php
if(!($serversession))
  $mydatabase->close_connect();
?>