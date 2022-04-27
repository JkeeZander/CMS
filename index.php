<?php
session_start();

define("SMARTY_DIR","c:/Users/User/Desktop/ContentManagementSystem/libs/");
require_once(SMARTY_DIR . "Smarty.class.php");

$smarty = new Smarty();
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

$news=null;
$subscription=null;

if($result->num_rows>0){
    $count = 0;
    while($row = $result->fetch_assoc()){
        $count++;
        
        $news[] = "<article class = 'main-article' style = 'grid-area:article{$count}'><header class='article-header'>{$row['header']}</header>{$row['short-info']}</article>";
    }
    
}
$smarty->assign('news',$news);

if(isset($_SESSION['user_name'])){
    $query = "Select * from news where author = (Select subscriptionname from usersubscriptions where username = '{$_SESSION['user_name']}')";
    $smarty->assign("user",$_SESSION['user_name']);
    $result = $mysqli->query($query);
    if($result->num_rows>0){
         $count=0;
         while($row = $result->fetch_assoc()){
            $count++;
            $subscription[]=  "<article class = 'subscription-element' style ='grid-area:subscription{$count}'><header class='article-header'>{$row['author']}</header>{$row['short-info']}</article>";
        }
    }
    $smarty->assign('login',"<a href = 'personalPage.php'>Profile</a>");
    $smarty->assign('subscription',$subscription);
}else{
    $smarty->assign('login',"<a href = 'login.php'>Log in</a>");
    $smarty->assign('subscription',"No subscriptions information");
}
    
$smarty->assign('date',date('l jS, F'));
$smarty->display("index.tpl");
?>