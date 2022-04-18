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
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $query = "Insert into news values (null,'{$_POST['header']}','{$_POST['short-info']}','{$_POST['main-info']}','{$_SESSION['user_name']}')";
    echo $query;
    $mysqli->query($query);
    if($mysqli->query($query) == TRUE){
        
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="addcontent.php" method="post">
        Header: <input type="text" name="header"><br>
        Short-info: <input type="text" name="short-info"><br>
        Main-info: <input type="text" name="main-info"><br>
        <input type="submit">
    </form>
</body>

</html>