<?php
define("SMARTY_DIR","c:/Users/User/Desktop/ContentManagementSystem/libs/");
session_start();
$db_host = "localhost:801";
$db_user = "cmsAltanBex";
$db_name = "contentManagement";
$db_pass = "AltanBex";
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($mysqli->connect_error){
    die("connection failed");
}
$query = "Select username,avatar from userdata where username= '". $_SESSION['user_name'] . "'";
$result = $mysqli->query($query);
require_once(SMARTY_DIR . "Smarty.class.php");
$smarty = new Smarty();
$row = $result->fetch_row();
$smarty->assign('name',$row[0]);
$smarty->assign('image',$row[1]);
$query = "Select subscriptionname,subscriptionlink from usersubscriptions where username = '". $_SESSION['user_name'] . "'";    
$result = $mysqli->query($query);
$row = $result->fetch_row();
$smarty->assign('subscription',"<a href = ' " . $row[1] . "'" . ">" . "'" . $row[0] . "'" . "</a>" );
$smarty->display("personalPage.tpl");
?>