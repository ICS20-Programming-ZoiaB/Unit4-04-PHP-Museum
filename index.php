<!DOCTYPE html>
<html lang="en-ca">
 <head>
   
   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="Museum Pass Webpage">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="ZoiaB">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- Code for the favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_indexandroid-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
   <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
   
   <!-- Stylesheet -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />
   
   <!-- Title -->
   <title>Museum Pass</title>
 </head>
 <body>
   
   <!-- Link to js file -->
   <script src="./js/script.js"></script>
   
   <!-- Header -->
   <center>
   <?php
    echo "<h1>Museum Pass</h1>";
    echo "<h3>Welcome to the museum!</h3>";
    echo "<p>This web page will help you determine if you can get a discount for your museum price</p>"; ?>
     
   <!-- Form for user input -->
   <form action="./results.php" method="post" target="result">
     <label for="age">How old are you?</label>
     <input type="number" step="1" max="122" name="user-age" placeholder="Your age..."><br><br>
     <label for="day">What day of the week will you visit the museum?</label>
     <select id="day" name="day">
       <option value="Day of week">Day of week</option>
       <option value="Sunday">Sunday</option>
       <option value="Monday">Monday</option>
       <option value="Tuesday">Tuesday</option>
       <option value="Wednesday">Wednesday</option>
       <option value="Thursday">Thursday</option>
       <option value="Friday">Friday</option>
       <option value="Saturday">Saturday</option>
     </select><br><br>
     <input type="submit" id="button" value="Check">
   </form>
     
   <!-- Image -->
   <br>
   <img src="./images/museum.png" alt="Museum" width="400" length="400">
     
   <!-- Iframe -->
    <iframe id="result" name="result">
    </iframe>
   </div>
  </center>
 </body>
</html>