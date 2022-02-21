
<?php
if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   if($email == 'anoop33@gmail.com' && $password == 'admin@sms') {
    session_start();
       $_SESSION['login'] = true;
       header('Location: desboard.php');
       die();
   }
   else{
       echo 'Invalid Credentials';
   }
}
?>