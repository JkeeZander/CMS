<?php
define("SMARTY_DIR","c:/Users/User/Desktop/ContentManagementSystem/libs/");
require_once(SMARTY_DIR . "Smarty.class.php");
$smarty = new Smarty();
session_start();
$db_host = "localhost:801";
$db_user = "cmsAltanBex";
$db_name = "contentManagement";
$db_pass = "AltanBex";
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($mysqli->connect_error){
    die("connection failed");
}

if(isset($_GET['user_name'])){
    $query = "Select * from userdata where username ='{$_GET['user_name']}'";
    $result = $mysqli->query($query);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $smarty->assign('name',$row['username']);
        $smarty->assign('image',$row['avatar']);
        
    }else{
        echo "User not found";
    }
}else{
$query = "Select username,avatar from userdata where username= '". $_SESSION['user_name'] . "'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$smarty->assign('name',$row['username']);
$smarty->assign('image',$row['avatar']);
$query = "Select subscriptionname,subscriptionlink from usersubscriptions where username = '". $_SESSION['user_name'] . "'";    
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$smarty->assign('subscription',"<a href = ' " . $row['subscriptionlink'] . "'" . ">" . "'" . $row['subscriptionname'] . "'" . "</a>" );
}
$smarty->display("personalPage.tpl");

?>