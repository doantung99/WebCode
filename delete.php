<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($db, "DELETE FROM targets WHERE TargetID=$id");

header("Location:index.php");
?>