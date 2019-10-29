 <?php
include 'classes.php';

$dbObject = new DataBaseWork();

 
 
if (array_key_exists('userId', $_POST)  && array_key_exists('targetName', $_POST)) {

    $id = $_POST['userId'];
    $area = $_POST['targetName'];
    $dbObject->insert($id, $area);
}

?>