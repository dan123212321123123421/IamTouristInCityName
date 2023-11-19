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
$pdo = new PDO('mysql:host=localhost;dbname=login_db', 'root', '');
$timestamp = date('Y-m-d H:i:s');
$message = $_POST['message'] ?? '';
if (!empty($message)) {
    
    $sql = "INSERT INTO messages (message, created_at) VALUES (:message, '$timestamp')";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trimite mesaj</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php if(isset($user)): ?>
    <h1>Submit a Message</h1>
    <form id="messageForm" method="post">
	<div>
	<label for="message">Submit your idea</label>
	<input type="text" id="message" name="message">
	</div>
      <button type="submit">Submit</button>
</form>
  <script src="script.js"></script>	

<?php else: ?>
	<p>Let's get you started <a href="Login-Profile/login.php">here </a> </p>
<?php endif; ?>

</body>
</html>
