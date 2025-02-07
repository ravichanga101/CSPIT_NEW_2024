
<?php
ob_start();
//session_start();

echo "";

include('config/general_config.php');
include "include/header.php";
include "include/main_menu.php";
 	$page = @$_REQUEST['v'];
	$page = explode("?",$page);
	if(!$page[0]) $page[0]="home";
	include "view/".$page[0].".php";
	
	//echo $page[0];

include "include/footer.php";
ob_flush();
?>
