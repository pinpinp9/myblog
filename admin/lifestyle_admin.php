<?php
require_once('sql.php');
session_start();

    if(isset($_POST['cancel'])){
        header('Location:admin.php');
        return;
    }

    if(isset($_POST['submit'])){
    $en_topic = $_POST['en_topic'];
    $ch_topic = $_POST['ch_topic'];
    $th_topic = $_POST['th_topic'];

    $en_desc= trim(mysqli_real_escape_string($conn,$_POST['en_desc']));
    $ch_desc= trim(mysqli_real_escape_string($conn,$_POST['ch_desc']));
    $th_desc= trim(mysqli_real_escape_string($conn,$_POST['th_desc']));

    $writer = $_POST['writer'];

 //getting image
    $image= $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];            
    move_uploaded_file($image_tmp,"../pic/$image");
 
 $sql = "INSERT INTO lifestyle (en_topic,ch_topic,th_topic,en_desc,ch_desc,th_desc,`image`,writer
 ) VALUES('$en_topic','$ch_topic','$th_topic','$en_desc','$ch_desc','$th_desc','$image','$writer')";
 $insert_content = mysqli_query($conn,$sql);
  if($insert_content){
      echo "<script> alert('content inserted successfully!') </script>";
      echo "<script> window.open('admin.php?insert_lifestyle','_self') </script>"; 
    }  else {echo"Error insert value".mysqli_error($conn);}
}  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle admin area</title>
    <style>
    *{
        padding:0;
        margin:0;
    }
    .wrapper{
    max-width: 100%;
    display: flex;
    flex-direction: column;    
    box-sizing: border-box;
    justify-content:left;
    }
    #image{
    flex:1;
    }
    #writer{
    flex:1;
    }
    .container{
    max-width: 100%;
    display: flex;
    flex-direction: row;    
    box-sizing: border-box; 
    text-align:center;
    justify-content:center;
   
     }
     .add-learning-en{
    max-width: 100%;
    flex:1;
    background:lightpink;
     }
     .add-learning-ch{
    max-width: 100%;
    flex:1;
    background:yellow;

     }
     .add-learning-th{
    max-width: 100%;
    flex:1;
    background:lightblue;
     }
    h3{
    padding: 15px;
    text-align:center;
    }
    .submit,.cancel{
    padding:5px 10px;
    margin: 10px 0 0 10px;
    }
    </style>

</head>
<body>  
  <form class="form" action="lifestyle_admin.php" method="post" enctype='multipart/form-data' >
  <div class="wrapper">
  <h4 id="writer">writer: <input type="text" name="writer" id=""></h4>
  <h4 id="image">Image: <input type="file" name="image" id=""></h4> 
  </div>
  <div class="container"> 
  <div class="add-learning-en">
  <h3> Lifestyle English Version </h3>
  <h4>Topic:<input type="text" name="en_topic" size="48"></h4> 
  <h4>Description:</h4>
  <textarea name="en_desc" id="" cols="55" rows="50">
  </textarea>  
    </div>
  <div class="add-learning-ch">
  <h3> Lifestyle Chinese Version </h3>
  <h4>Topic:
  <input type="text" name="ch_topic" size="48"></h4>
  <h4>Description:</h4>
  <textarea name="ch_desc" id="" cols="55" rows="50">
  </textarea>  
    </div>

  <div class="add-learning-th">
  <h3> Lifestyle Thai Version </h3>
  <h4>Topic:
  <input type="text" name="th_topic"size="48"></h4>
  <h4>Description:</h4>
  <textarea name="th_desc" id="" cols="55" rows="50">
  </textarea>  
  </div>
  </div>
  <input class="submit" type="submit" name="submit" value="submit">
  <input class="cancel" type="submit" name="cancel" value="cancel">

  </form>   
  </body>
  </html>