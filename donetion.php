<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       <form action="up.php" method="post">
              <label for="mony">insert the mony you needed</label>
              <input type="number" id="mony" name="mony" min="1" max="1000" required>$<br>
              <label for="">Enter your GBA</label>
              <input type="number" id="mony" name="GBA" min="1" max="100" required>%<br>
              <label for="description">insert the description for your case</label>
              <textarea name="description" id="description" cols="30" rows="10"required></textarea>
       <button name="up" >Submit</button>
       </form>
</body>
</html>
