<?php

	include 'dbconnection.php';


	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$year = $_POST['year'];
	$rating = $_POST['rating'];gi
	$publication_id = $_POST['publication_id'];
	
	// insert the book into the database or do any other processing here

    $sql="INSERT INTO `books`(`ISBN`, `Title`, `Category`, `Price`, `YearOfRelease`, `Rating`, `Pid`) VALUES ('$isbn','$title','$category','$price','$year','$rating','$publication_id')";

    $conn->query($sql);
?>
