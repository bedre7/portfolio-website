<?php
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
?>

<style>
    <?php include_once 'contact.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head></head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact</title>
<link rel=stylesheet type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="script.js" defer></script>
<script src = "../script.js" defer> </script>
<link rel="shortcut icon" href="../img/favicon.png">
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include '../navbar.php'; ?>
    <section class="contact">
        <div class="mycontainer">
            <div class="header">
                <h2>Contact me</h2>
            </div>
            <form action="confirm.php" method="POST" class="myform" id="form" autocomplete="off" onsubmit="return validation()">
                <div class="form-controls">
                    <label>Name: </label>
                    <input type="text" placeholder="Your name here" name="username" id="username">
                    <small>Error message</small>
                </div>
                <div class="form-controls">
                    <label>Email: </label>
                    <input type="text" placeholder="Your email address" name="email" id="email">
                    <small>Error message</small>
                </div>
                <div class="form-controls">
                    <label class="newsletter">Do you want my news letter? </label>
                    <br><br>
                    <label class="news" for="yes">Yes, please</label>
                    <input type="checkbox" id="news" name="news" value="yes" checked>
                </div>
                <div class="form-controls message">
                    <label>Drop me a line: </label><br>
                    <textarea name="message" placeholder="Your message here" id="message" cols="40" rows="6"></textarea>
                    <br> <small>Error message</small>
                </div>
                <input type="submit" value="submit"></input>
                <input type="reset"></input>
            </form>
        </div>
    </section>
    <footer> <?php include '../footer.php'; ?></footer>
</body>

</html>