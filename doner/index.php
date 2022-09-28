<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       <div>
       <?php 
       require_once("..\confirm.php");
        $query = $conn->query("SELECT * FROM cases");
       $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
       echo JSON_encode($data);
       header("Content-Type: JSON");
       ?>
</div> 
       <!-- <div>secound case</div>
       <div>therd case</div>
       <div>fourth case</div> -->
</body>
</html>