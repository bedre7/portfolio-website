<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <section class="confirmation">
        <div class = "confirm">
            <div class="myheader lead" style="color:green; font-size:larger; font-weight:bold"><br>
                <h3>&nbsp &nbsp Your message has been sent!</h3><hr>
            </div>
            <div style="font-size:medium;">
                <div class="first">
                    &nbsp &nbsp Your name: <span id = "name"> &nbsp<?php echo $_POST['username']; ?></span>
                </div>
                <div class="second"><br>
                    &nbsp &nbsp Your email: <span id="email"> &nbsp<?php echo $_POST['email']; ?></span>
                </div>
                <div class="third"><br>
                    &nbsp &nbsp Your message: <span id="message"></span>
                </div><br>
                <textarea name="line" id="line" cols="40" rows="6" readonly><?php echo $_POST['message']; ?></textarea>
                <a class = "btn btn-success btn-lg" href = "../index.html" style="margin-left:50%; margin-top: 2%;">Return To Home</a>
            </div>
        </div>
    </section>
    
</body>
</html>