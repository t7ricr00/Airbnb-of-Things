<?php
include("db.php");

session_start();
$id = (int)$_GET["id"];

$delete = "DELETE from items where itemid = ". $id;
if (mysqli_query($db,$delete))
  {
  $_SESSION['message'] = "Database updated successfully";
  header("location: myitem.php");
  }
else
  {
  $_SESSION['message'] = "An error occurred: " . mysqli_error($db);
  header("location: myitem.php");
  }
?>
