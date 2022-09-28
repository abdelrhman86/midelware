<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>sing up form</title>
</head>
<body>

<form action="insert.php" method= "post" >
<select name="user_case" required>
<option value="">Select your case</option>
<option value="doner">doner</option>
<option value="student">student</option>

<label for="name"> The name: </label>

<input type="text" name= "name" id="name" required><br>

<label for="email"> Email address: </label>

<input type="email" name= "email" id="email"required><br>

<label for="credit-card"> Number of credit-card: </label>

<input id="credit-card" name= "credit-card" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">

<select name="user_case" required style="display:none">
<option value="student">student</option>
</select>

<label for="password"> password:</label>

<input type="password" id="password" name="password" minlength="8" maxlength="20"required><br>

<label for="confairm-password">confairm password </label>

<input type="password" name= "confairm-password" id="confairm-password" minlength="8" maxlength="20" required><br>

<button type="submit" name="singup">Sing up</button>

<p>already have account <a href="login.php">Login</a><br>
</form>

</body>
</html>