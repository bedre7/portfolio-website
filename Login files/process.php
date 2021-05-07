<?php

    $username = "b191210557";
    $password = "1234";
    $incorrect = "";

    $newURL = "https://google.com";
    $fail = "login.php";

    if(!empty($_POST['user']) && !empty($_POST['pass'])){

        if($_POST['user'] == $username && $_POST['pass'] == $password){        
            header('Location: '.$newURL);
        }
        else{
            $incorrect = "incorrect password";
            header('Location: '.$fail);
     
        }   
       }
       else{
           echo "Please fill all fields";
       }
   
  
    


?>