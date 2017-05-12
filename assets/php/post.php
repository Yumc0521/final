<?php
$t = $_POST["title"];
$i = $_POST["information"]; 
$ty = $_POST["type"]; 

$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
$results = $conn->query("SELECT * FROM blog WHERE title='$a'");
						
$row = $results->fetch();


if (empty($t)){
	header("HTTP/1.1 400 Bad Request"); 
	echo "Title required.";
}

else 
{
	header("HTTP/1.1 200 OK"); 
	$results = $conn->query("INSERT INTO blog(title,information,type)
						VALUES('$t','$i','$ty')");
	echo "<p>Posting sucssful, back to <a href='http://edward2.solent.ac.uk/~yzhang/final/index.html'>home</a></p>";
}
?>
