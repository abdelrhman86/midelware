<?php
require_once ("confirm.php");
if(isset($_POST['login'])) {
      
$select = $conn->query("SELECT * FROM users WHERE email = '".$_POST['email']."'");
       if($select->num_rows == 1 ) {
               $password = $_POST['password'];
               $user = $select->fetch_assoc();
               $hash =$user['password'];
               if(password_verify($password,$hash)){
                     session_start();
                     $_SESSION['user_id'] =$user['id'];
                      header("location:index.php");
               }else{
                     echo" password is not correct";
               }
        }else {
             echo "email does not exist";
        }
}