<?php
	/*define("_HOSTNAME", "mysql25.opentransfer.com");
	define("_USERNAME", "vsjayan_Ubcard");
	define("_PASSWORD", "Bcard123");
	define("_DATABASE", "vsjayan_bcard"); */
	
    define("_HOSTNAME", "localhost");
	define("_USERNAME", "root");
	define("_PASSWORD", "");
	define("_DATABASE", "2daybiz_businesscard");
	
	/** Path to code */
	define("_PATH_CODE", "../code/admin/");
	
	/** Path to include files */
	define("_PATH_INCLUDE", "../includes/");

	/** Path to JavaScript files */
	define("_PATH_JAVASCRIPT", "../js/");
	
	/** Path to Ajax files */
	define("_PATH_AJAX", "../ajax/");
	
	/** Path to templates root */
	define("_PATH_TEMPLATE", "../templates/admin/tmp_");

	/** Path to cascading style sheet */
	define("_PATH_STYLESHEET", "../css/styles.css");	

	/** Path to images */
	define("_PATH_IMAGES", "../images/");

	/** Application Title */
	define("_APP_TITLE", "Business Card");
	define("_APP_PROJECT_TITLE", "Business Card");

	/** Set self url */
	define("_SELF_URL", basename($_SERVER['PHP_SELF']));

	/** Set site url */
	define("_SITE_URL", $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

	/** Set request url */
	define("_REQUEST_URL", $_SERVER['REQUEST_URI']);
	
	define("_CURRENT_WORKING_DIR",getcwd());

	/** Error Message **/
	define("_TMPFILE_ERROR", "<font color='red'>Template File Not Found</font>");
	define("_CODEFILE_ERROR", "<font color='red'>Code File Not Found</font>");
	
	define("_MAILNOTSENT_ERROR", "<font color='red'>Mail Not Sent</font>");
	define("_MAILSENT", "<font color='red'>Mail Sent Sucessfully</font>");
?>
