<?php
require_once ('confirm.php');

if(isset($_POST['singup'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $confairm_password = $_POST['confairm-password'];
       $credit_card = $_POST['credit-card'];
       // valdate password and confarirm password
       if($password !=$confairm_password){
       echo "password dont match";
       }
       // check if the email used before or no
       $result = $conn->query("SELECT * FROM users where email ='$email' ");
       if($result->num_rows >=1){
              echo "email already used";
       }
       if($password == $confairm_password && $result->num_rows < 1) {
              $hash = password_hash($password,PASSWORD_DEFAULT);
              $hash_credit =password_hash($credit_card,PASSWORD_DEFAULT);
              $conn->query("INSERT INTO users( name , email ,password , credit_card)values ('$name','$email','$hash','$hash_credit')");
       }
}
