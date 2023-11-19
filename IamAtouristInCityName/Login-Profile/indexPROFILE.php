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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<?php if(isset($user)): ?>
<h1><?= htmlspecialchars($user["name"]) ?>'s Profile </h1>


<p>Hello <?= htmlspecialchars($user["name"]) ?></p>
<p>Email: <?= htmlspecialchars($user["email"]) ?></p>
<p>Are you a verified?
	<?php if($user["ValidToken"]!==NULL): ?>
	 <p><bold>YES <bold> </p>
	 
	 <?php if($user["Credit"]>0): ?>
		<p>Your Balance is:<?= htmlspecialchars($user["Credit"])?>
		<?php endif; ?>
	 <p>Wants to visit  <?= htmlspecialchars($user["City"]) ?> in <?= htmlspecialchars($user["Country"]) ?>
	 
	 <?php elseif($user["ValidToken"]===NULL): ?>
	 <p>  NO </p>
		<?php endif; ?>
</p>
 

<p><a href="indexHOME.php">Log out</a></p>
<?php else: ?>
	<p><a href="login.php">Log In</a> or <a href="signup.html">Sign up</a></p>
<?php endif; ?>

</body>
</html>
