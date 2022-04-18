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
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $query = "select password from userLoginInfo where login='{$_POST['login']}'";
    $result = $mysqli->query($query);
    if($row = $result->fetch_assoc()){
        if($row['password']==$_POST['password']){
            $_SESSION['user_name'] = $_POST['login'];
            header('Location: index.php');
        }
    }else{
        $error = "Could not find given login and password in the database";
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

    <form action="login.php" method="post">
        Login:<input type="text" name="login"><br>
        Password:<input type="password" name="password"><br>
        <input type="submit">
        <br>
        <p>New here? <a href="signup.php">Create account</a></p>
        <?php
        if(isset($error)){
        echo "<p style = 'color:red'>{$error}</p>";
        }
        ?>
    </form>
</body>

</html>