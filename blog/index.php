<?php
require_once('../admin/sql.php');
require_once('function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>lifestyle</title>
</head>
<body>
    <div class="holdingcontainer1">
            <div class="row1-col1">
            <span id="name">彬彬博客</span>
            </div>
            <div class="row1-col2">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="lifestyle.php">Lifestyle</a></li>
                    <li><a href="travel.php">Travel</a></li>   
                    <li><a href="learning.php">Learning</a></li>                 
            
                </ul>
            </div>
       
    </div>
    <div class="holdingcontainer2">
   
               <h2>BLOG</h2>
    
    </div>
    <div class="holdingcontainer3">  
        <div class="row3-col1">
            <img src="../pic/plant1.png" alt="pic1" width="280" height="240">
        </div>
        <div class="row3-col2">
            <img src="../pic/plant1.png" alt="pic1" width="280" height="240">
        </div> 
        <div class="row3-col3">
            <img src="../pic/plant1.png" alt="pic1" width="280" height="240">
        </div>
    </div>    

    <?php
     GetHomepage();
    ?>
        <?php
        GetTravel();
        GetLifestyle();
        GetLearning();
        
        ?>
<footer>
    
</footer>
      
</body>
</html>