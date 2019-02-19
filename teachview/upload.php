<?php
$file = $_FILES["uploaded_file"];

move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

header ("location: modules.php")

 ?>
