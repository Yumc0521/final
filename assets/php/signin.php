<?php
$e = $_POST["email"];
$d = $_POST["password"];

$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
$results = $conn->query("SELECT * FROM m_users WHERE email='$e' AND password='$d'");
						
$row = $results->fetch();


if (empty($d)){
	header("HTTP/1.1 400 Bad Request"); 
	echo "Password required.";
}

else if ($row==false)
{
	echo "Error.";
}
else 
{
	header("HTTP/1.1 200 OK"); 
	echo "Successful login<br>";
	echo "<p><a href='http://edward2.solent.ac.uk/~yzhang/final/index.html'>Home</a></p>";
}
?>
