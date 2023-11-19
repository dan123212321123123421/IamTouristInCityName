<?php

session_start();
if(isset($_SESSION["user_id"]))
{
	$mysqli = require __DIR__ . "../database.php";
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
    <title>Document</title>
   <link rel="stylesheet" href="styless.css"> 
</head>
<body>
<?php if(isset($user)): ?>
    <h1> Hello <?php htmlspecialchars ($user["name"]) ?>
    <header>
    <ul class="ButoaneNAV">
        <li class="ButNAV">Home</li>
        <li class="ButNAV">Map</li>
        <li class="ButNAV">Locations</li>
        <li class="ButNAV">Events</li>
        <li class="ButNAV">Trail</li>
        <li class="ButNAV"> <a href="/IamAtouristInCityName\Login-Profile/indexPROFILE"> Profile </a> </li>
    </ul>
    </header>
    
    
    <div class="INToras">
        <h1 style="color: rgb(255, 255, 255);">Welcome to Timisoara</h1>
        <p style="color: rgb(255, 255, 255);">Explore the beauty and culture of this vibrant Romanian city</p>
        
    </div>
    <img src="photos/Piața_Victoriei_Timișoara.jpg" alt="Cityscape" class="header-image">
 
   <br>
   
    <section>
        <h2>About Timisoara</h2>
        <p>Timisoara is a city located in western Romania. It is known for its rich history, diverse culture, and
            architectural beauty. The city has played a significant role in Romanian history and is often referred to
            as the "Little Vienna" due to its stunning architecture.</p>
    </section>

    <section>
        <h2>Landmarks</h2>
        <p>Timisoara boasts a variety of landmarks, including the Union Square, Metropolitan Cathedral, Memorial Museum
            of the 1989 Revolution, and more. Each landmark has its own unique story and contributes to the city's
            charm.</p>
    </section>

    <section>
        <h2>Events and Festivals</h2>
        <p>Throughout the year, Timisoara hosts numerous events and festivals celebrating music, arts, and culture. Be
            sure to check the local calendar for upcoming festivities during your visit.</p>
    </section>
   <br>
        <div style="text-align: center;">
    
    

    <footer>
        <p></p>
    </footer>
<?php endif ?>
</body>
</html>