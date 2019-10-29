<?php
include 'classes.php';

$dbObject = new DataBaseWork();
 $message = "";
if(isset($_POST['analyze'])){ 
  $timestamp = $_POST['timestamp']; 
  $timeshift = $_POST['timeshift'];
  $result = $dbObject->select($timestamp, $timeshift);

  $message = "<table><tr><th>ID</th><th>timestamp</th></tr>";
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $message = $message . "<tr><td>".$row["id"]."</td><td> ".$row["timestamp"]."</td></tr>";
  }
    $message = $message .  "</table>";
} else {
    $message = $message .  "0 results";
}

?>
<DOCTYPE html>
<html>
<head>

<style>

</style>
</head>
<body>
<form action="" method="POST">
<input type="text" name="timestamp" placeholder="timestamp" step="1">
</br>
<input type="number" name="timeshift" placeholder="shift" value="1" min="1" max="3600">
</br>
<input type="submit" name="analyze" value="Analyze">
</form>
<?php echo $message; ?>
</body>
</html> 

