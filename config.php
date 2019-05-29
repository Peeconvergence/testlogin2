<?php
     session_start();
        
//if already logged IN
if(isset($_SESSION['loggedIN'] )){
    header('Location: hidden.php');
    exit();
}

     if(isset($_POST['login'])){
      require'connectdb.php';

        $email = $dbcon->real_escape_string($_POST['emailPHP']);
        $password = md5($dbcon->real_escape_string($_POST['passwordPHP']));

        $data =  $dbcon->query("SELECT id FROM users WHERE email='$email' AND password ='$password'");
        if($data->num_rows > 0){//everything ok,Let's Login
      
        
  
        $_SESSION['loggedIN'] ='1';//create varible resuesd anather page.
        $_SESSION['email'] = $email;
        
    
         exit;
        }else{
            exit('<font color="red">Please check your input....</font>');
        }
           
        exit($email . " = " . $password);//exit email and password
     }
