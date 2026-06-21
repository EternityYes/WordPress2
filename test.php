<?php
$link = mysqli_connect(‘database-1.cj2woy8yyf3t.eu-north-1.rds.amazonaws.com:3306’, ‘postgres’, ‘Tt15359575!’);
if (!$link) {
die(‘Could not connect: ‘ . mysqli_error());
}
echo ‘Connected successfully’;
mysqli_close($link);
?>
