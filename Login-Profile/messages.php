<?php
$pdo = new PDO('mysql:host=localhost;dbname=login_db', 'root', '');
$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$stmt = $pdo->query($sql);

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submitted Messages</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="message-board">
    <h1>Submitted Messages</h1>
    <ul id="messageList"><?php 
    foreach($messages as $message){
        print"<li>".$message['message']."</li>";

    }
    ?></ul>

  </div>

  <script src="scripts.js"></script>
</body>
</html>