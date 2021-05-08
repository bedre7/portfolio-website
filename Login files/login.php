<style>
<?php include_once 'login.css';?>
</style>
<?php include_once 'process.php';?> 
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../script.js" defer> </script>
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Login</title>
</head>
<body>
<?php include '../navbar.php'; ?>

<section class = "login">
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
</section>
    

    
</body>
</html>