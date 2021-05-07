<?php include_once '../header.php'; 
include_once 'process.php'; ?>
<style>
    <?php include_once 'login.css';
 ?>
</style>

<?php

/*
$host = "localhost";
$user = "root";
$password = "";
$dbh = "accessform";
$conn = mysqli_connect($host, $user, $password);

mysqli_select_db($conn, $dbh);

if(isset($_POST['user'])){
    $uname = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from loginform where user = '".$uname."' AND pass = '".$password."' limit 1";
    
    $result = mysqli_query($conn, $sql);
    $newURL = "https://google.com";
    $fail = "login.php";

    if(mysqli_num_rows($result) == 1){
        header('Location: '.$newURL);
        exit();
    }
    else{
        header('Location: '.$fail);
        exit();
    }
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class = "container-fluid center">
        <h1>Login</h1>
        <form action="process.php" method = "POST" autocomplete ="off">
            <div class = "txt_field">
                <input type="text" id = "user" name = "user" required />
                <span></span>
                <label for="">Username </label>
            </div>
            <div class = "txt_field">  
               <input type="password" id = "pass" name = "pass" required>
               <span></span>
               <label for="">Password </label>
               
            </div>
            <div class="pass">Forgot Password?
            <input type="submit" id = "btn" value = "Login">
            <span class = "msg"><?php echo $incorrect; ?></span>
            </div>
                
            
        </form>


    </div>

    
</body>
</html>