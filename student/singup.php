<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>sing up form</title>
</head>
<body>

<form action="insert.php" method= "post" enctype="multipart/form-data" >

<label for="name"> The name:</label>

<input type="text" name= "name" id="name" required><br>

<label for="email"> Email address: </label>

<input type="email" name= "email" id="email"required><br>

<label for="id_number"> Number of id-card: </label>

<input type="text" name="id_number" id="id_number" maxlength="16" placeholder="xxxx-xxxx-xxxx-xxxx"><br>

<label for="img">Select image for your id-card:</label>

<input type="file" id="img" name="img" accept="image/*" required><br>

<select name="user_case" required style="display:none">
<option value="doner">doner</option>
</select>

<label for="password"> password: </label>

<input type="password" id="password" name="password" minlength="8" maxlength="20"required><br>

<label for="confairm-password">confairm password </label>

<input type="password" name= "confairm-password" id="confairm-password" minlength="8" maxlength="20" required><br>
<label for="gba">Enter your university average </label>

<input type="number" id="gba" name="gba" min="1" max="100"> %

<button type="submit" name="singup">Sing up</button>

<p>already have account <a href="login.php">Login</a><br>
</form>

</body>
</html>