<?php
require_once ("confirm.php");

if(isset($_POST['login'])) {
      $user_case = $_POST['user_case'];
      // check if the user is doner
      if($user_case ===""){
            echo "you have to choose your case";
      }
      if($user_case ==="doner"){
      $select = $conn->query("SELECT * FROM doners WHERE email = '".$_POST['email']."'");
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
      }}
      // check if the user is student
      if($user_case ==="student"){
            $select = $conn->query("SELECT * FROM student WHERE email = '".$_POST['email']."'");
      if($select->num_rows == 1 ) {
            $password = $_POST['password'];
            $user = $select->fetch_assoc();
            $hash =$user['password'];
            if(password_verify($password,$hash)){
                  session_start();
                  $_SESSION['user_id'] = $user['id'];
                  header("location:index.php");
            }else{
                  echo" password is not correct";
            }
      }else {
            echo "email does not exist";
      }}
}