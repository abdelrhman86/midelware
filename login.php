<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Login</title>
</head>
<body>
<form action="log.php" method="post">

       <input type="email" name="email">
       
       <input type="password" name="password" >

       <select name="user_case">
       <option value="">Select your case</option> 
       <option value="doner">doner</option>
       <option value="student">student</option>
       </select>

       <button name="login">Login</button>

       <p>Don't have account <a href="singup.php">Sing up</a></p>
<p> <a href="#"> Do you forget your password </a></p>

</form>     
</body>
</html>