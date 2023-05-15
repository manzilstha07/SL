<?php
$server="localhost";
$username="root";
$password="";
$database="scripting_language";

$conn= new mysqli($server,$username,$password,$database);

if($conn)
    echo "Inserted succesfully.";
else
    echo "Insert failed.";
?>

