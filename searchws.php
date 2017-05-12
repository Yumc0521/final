
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monologue </title>
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
        <div class="topnav">
            <div class="row">
              <div class="large-4 columns"><h3><img src="assets/img/logoimg.png"></img><a href="index.html">Monologue.com </a></h3></div>
              <div class="large-4 columns"><a href="post.html"><b><u>Write your story</u></b></a></div>
              <div class="large-4 columns"><a href="signin.html"><u>Sign in / sign up</u></a>
            </div>
        </div>
      <hr>

      <div class="row">
      <div class="large-12 columns">
        <div class="search">
          <div class="search-box">
            <div class="row">
              <div class="large-12 columns">
               <div class="primary callout">
    				  	<form method="POST" action="assets/php/searchws.php">
    						<img src="assets/img/logoimg.png">
    						<hr>
							<?php
								$ty = $_GET["type"];
								$t = $_GET["title"];
								$connection = curl_init();
								curl_setopt($connection, CURLOPT_URL, "http://edward2.solent.ac.uk/~yzhang/final/assets/php/search.php?type=$ty&title=$t");
								curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
								curl_setopt($connection,CURLOPT_HEADER, 0);
								$response  = curl_exec($connection);
								curl_close($connection);
								$data = json_decode($response);
									for($i=0; $i<count($data); $i++)
										{
										echo "Title: " . $data[$i]->title . "<br/>";
										echo "Type: " . $data[$i]->type . "<br/>";
										echo "Story: " . $data[$i]->information . "<br/>";
										echo "<hr>";
									}
							?>
    					</form>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
      </div>

    <script src="assets/js/app.js"></script>
  <script>
function myFunction() {
    var x = document.getElementById("thetopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
  </script>
  </body>
</html>