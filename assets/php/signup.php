<?php
$a = $_POST["title"];
$b = $_POST["firstname"];
$c = $_POST["surname"];
$d = $_POST["password"];
$e = $_POST["email"];

$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
$results = $conn->query("SELECT * FROM m_users WHERE title='$a'");
						
$row = $results->fetch();


if (empty($d)){
	header("HTTP/1.1 400 Bad Request"); 
	echo "Password required.";
}

else 
{
	header("HTTP/1.1 200 OK"); 
	$results = $conn->query("INSERT INTO m_users(Title,firstname,surname,password,email)
						VALUES('$a','$b','$c','$d','$e')");
	echo "Successful<br>";
	echo "<p><a href='http://edward2.solent.ac.uk/~yzhang/final/index.html'>Home</a></p>";
}
?>
