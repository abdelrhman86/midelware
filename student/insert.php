<?php
require_once ('..\confirm.php');

if(isset($_POST['singup'])){
       // get users info
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $confairm_password = $_POST['confairm-password'];
       $id_card = $_POST['id_number'];
       $user_case = $_POST['user_case'];
      // Get file info 
       $fileName = basename($_FILES["img"]["name"]); 
       $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
      // Allow certain file formats 
$allowTypes = array('jpg','png','jpeg','gif'); 
// validate password
if($password !=$confairm_password){
       echo "password dont match";
}if(!in_array($fileType, $allowTypes)){ 
       $statusMsg = "File upload failed, please try again."; 
       }else{
       $image = $_FILES['img']['tmp_name']; 
              $imgContent = addslashes(file_get_contents($image));      
       }
       // check if the email used before or no
       $result = $conn->query("SELECT * FROM student where email ='$email' ");
       if($result->num_rows >=1){
              echo "email already used";
       }
              
       if($password == $confairm_password && $result->num_rows < 1 && in_array($fileType, $allowTypes)){
               // Insert the content into database 
              $hash = password_hash($password,PASSWORD_DEFAULT);
              $conn->query("INSERT INTO student( name , email ,password , id_number , img , user_case ,time)values ('$name','$email','$hash','$id_card','$imgContent','$user_case',NOW())");
              // Define the session 
              session_start();
              header("location:..\index.php");
       }
}