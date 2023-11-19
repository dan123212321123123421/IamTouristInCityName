<?php
session_start();
if(isset($_SESSION["user_id"]) && isset($_POST['Country']) && isset($_POST['City'])) {
    $Country = $_POST['Country'];
    $City = $_POST['City'];
    $mysqli = require __DIR__ . "/database.php";

    var_dump($_POST);
    
    $sql = "UPDATE user SET Country=?, City=? WHERE id=?";
    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssi", $Country, $City,$_SESSION["user_id"]);
    $stmt->execute();
    
    $stmt->close();
    $redirectURL = urlencode($City . '.php');
    $cityFilePath = '../cities/' . $redirectURL; 
    header("Location: $cityFilePath");
    exit();
} else {
    header("Location: error.php");
    exit();
}
?>