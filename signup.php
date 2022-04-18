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
try{
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $query = "Insert into userLoginInfo VALUES('{$_POST['login']}','{$_POST['password']}')";
        $result = $mysqli->query($query);
        if($result ==TRUE){
            $_SESSION['user_name'] = $_POST['login'];
            header("Location: index.php");
        }else{
            $error = "Could not create account with the given name";
        }
    }
}catch(Exception $e){
    echo "Error occured,maybe the login is already occupied!";
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
    <form action="signup.php" method="post">
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"> <br>
        <?php
            if(isset($error)){
                echo $error;
            }
        ?>
        <input type="submit">
    </form>
</body>

</html>