<?php

session_start();
if(isset($_SESSION["user_id"]))
{
	$mysqli = require __DIR__ . "/database.php";
	$sql="SELECT * FROM user 
		  WHERE id={$_SESSION["user_id"]}";
		  $result=$mysqli->query($sql);
		  $user=$result ->fetch_assoc();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I am a tourist in</title>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Quicksand:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="welcomeStyle.css">
</head>

<body>
    <?php if(isset($user)): ?>
    <h1>I am a tourist in City-Name ! </h1>
    <form id="explorationForm" method="post" action="process_selection.php">
        <div class="dropdown-group">
            <select id="Country" name="Country" size="1">
                <option value="" selected="selected"> Select Country </option>
            </select>

            <select id="City" name="City" size="1">
                <option value="" selected="selected"> Select City </option>
            </select>
        </div>
        <div><button id="button" type="button">Let's explore</button></div>
    </form>
    <script src="welcomeJs.js"> </script>
    <?php else: ?>
    <h1>Sign up <a href="signup.html">here </a> to get started </h1>
    <?php endif; ?>
</body>

</html>