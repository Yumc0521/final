<?php
header("Content-type: application/json");
$t = $_GET["title"];
$ty = $_GET["type"];

// Research both title and type
if(!empty($t) && !empty($ty))
{
$conn = new PDO("mysql:host=localhost;dbname=yzhang;",
                "yzhang","nothinah");
	$tesults = $conn->query("select * from blog where type='$ty' AND title='$t'");
	$allResults = array();
	while($tow=$tesults->fetch(PDO::FETCH_ASSOC))
	{
		$allResults[] = $tow;
	}
}

// Research type
else if (!empty($ty))
{
$conn = new PDO("mysql:host=localhost;dbname=yzhang;",
                "yzhang","nothinah");
    $tesults = $conn->query("select * from blog where type='$ty'");
	$allResults = array();
	while($tow=$tesults->fetch(PDO::FETCH_ASSOC))
	{
	$allResults[] = $tow;
	}

}

// Research title
else if (!empty($t))
{
$conn = new PDO("mysql:host=localhost;dbname=yzhang;",
                "yzhang","nothinah");
	$tesults = $conn->query("select * from blog where title='$t'");
	$allResults = array();
	while($tow=$tesults->fetch(PDO::FETCH_ASSOC))
	{
		$allResults[] = $tow;
	}
}

//showing the all result
else
{
$conn = new PDO("mysql:host=localhost;dbname=yzhang;",
                "yzhang","nothinah");
	$tesults = $conn->query("select * from blog");
	$allResults = array();
	while($tow=$tesults->fetch(PDO::FETCH_ASSOC))
	{
		$allResults[] = $tow;
	}

}

echo json_encode($allResults);
?>