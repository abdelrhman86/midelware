<<<<<<< HEAD
<?php 
require_once("..\confirm.php");
$query = $conn->query("SELECT * FROM cases");
$data = mysqli_fetch_all($query,MYSQLI_ASSOC);
echo JSON_encode($data);
header("Content-Type: JSON");
?>
=======

       <?php 
       require_once("..\confirm.php");
        $query = $conn->query("SELECT * FROM cases");
       $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
       echo JSON_encode($data);
       header("Content-Type: JSON");
       ?>
>>>>>>> afbfe6f54fd817956bf19fc2919dac0b095d1039
