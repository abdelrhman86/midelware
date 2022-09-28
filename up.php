<?php

session_start();
require_once("confirm.php");
if(isset($_POST['up'])){
       $mony =$_POST['mony'];
       $description =$_POST['description'];
       $GBA =$_POST['GBA'];
$conn->query("INSERT INTO cases( mony, description, GBA) values('$mony','$description','$GBA')");
header("location:index.php");
}