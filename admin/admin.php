 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin area</title>
    <style>
    .container-add{
    max-width: 100%;
    display: flex;
    flex-direction: row;    
    box-sizing: border-box;
    justify-content:space-around;
    }
    .btn{
        flex:1;
        padding:6px;
    }

    </style>
</head>
<body>
<div class="container">
    <div class="container-add">
    <a href="lifestyle_admin.php"><button class="btn">Add lifestyle</button></a>
    <a href="lifestyle-edit_admin.php"><button class="btn">Edit lifestyle</button></a>
    <a href="learning_admin.php"><button class="btn">Add Learning</button></a>
    <a href="learning-edit_admin.php"><button class="btn">Edit learning</button></a>
    <a href="travel_admin.php"><button class="btn">Add travel</button></a>
    <a href="travel-edit_admin.php"><button class="btn">Edit travel</button></a>

    </div>  
    <?php 

    echo"
    <div class='container-detail'>    
    
    
    
    </div>"; 
    ?>


</div>
    
</body>
</html>