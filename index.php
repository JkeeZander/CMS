<?php
session_start();
$db_host = "localhost:801";
$db_user = "cmsAltanBex";
$db_name = "contentManagement";
$db_pass = "AltanBex";
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($mysqli->connect_error){
    die("connection failed");
}
$query = "Select * from news limit 3";
$result = $mysqli->query($query);
$news;

if($result->num_rows>0){
    $count = 0;
    while($row = $result->fetch_assoc()){
        $count++;
        
        $news[] = "<article class = 'main-article' style = 'grid-area:article{$count}'><header class='article-header'>{$row['header']}</header>{$row['short-info']}</article>";
    }
}
$subscription=null;

define("SMARTY_DIR","c:/Users/User/Desktop/ContentManagementSystem/libs/");
require_once(SMARTY_DIR . "Smarty.class.php");


$smarty = new Smarty();

if(isset($_SESSION['user_name'])){
    $query = "Select * from usersubscriptions where username = '{$_SESSION['user_name']}'";
    $smarty->assign("user",$_SESSION['user_name']);
$result = $mysqli->query($query);
if($result->num_rows>0){
    $count=0;
    while($row = $result->fetch_assoc()){
        $count++;
        $subscription[]=  "<a class = 'subscription-element' style ='grid-area:subscription{$count}' href = {$row['subscriptionlink']}>{$row['subscriptionname']}</a>";
    }
}
    $smarty->assign('login',"<a href = 'personalPage.php'>Profile</a>");
    $smarty->assign('subscription',$subscription);
}else{
    $smarty->assign('login',"<a href = 'login.php'>Log in</a>");
    $smarty->assign('subscription',"No subscriptions information");
}
$smarty->assign('date',date('l jS, F'));
$smarty->assign('news',$news);
$smarty->display("index.tpl");
?>