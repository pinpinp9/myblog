<?php
require_once('../admin/sql.php');
session_start();


function GetHomepage(){
    global $conn;
    if(!isset($_GET['learning_id']) || isset($_GET['lifestyle_id']) || isset($_GET['travel'])) {
        $sql="SELECT * FROM lifestyle where lifestyle_id = 3 and 4";
        $stmt= mysqli_query($conn,$sql);
        while($row= mysqli_fetch_array($stmt)){
            $en_topic= htmlentities($row['en_topic']);
            $image = $row['image'];
            $en_desc = htmlentities($row['en_desc']);
            $lifestyle_id =$row['lifestyle_id'];
        echo"             
        <div class='content-col'>   
    
                <div class='content'> 
                <a href='product.php?lifestyle_id=$lifestyle_id'><img class='content-img' src='../pic/$image' width='180px' height='150'></a>
                </div>
            
            <div class='content-col2'>
                <div class='topic'>
                    <h3 class='topic-h3'> $en_topic </h3> 
                </div>
                <div class='paragraph'></div>
                <a href='lifestyle-desc.php?lifestyle_id=$lifestyle_id'><p> $en_desc</p></a>
                 </div>
            </div>
    </div>";}
    
    $sql="SELECT * FROM learning where learning_id = 3 and 4 and 5";
    $stmt= mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($stmt)){
        $en_topic= htmlentities($row['en_topic']);
        $image = $row['image'];
        $en_desc = htmlentities($row['en_desc']);
        $lifestyle_id =$row['learning_id'];
    echo"             
    <div class='content-col'>   
    
            <div class='content'> 
            <a href='product.php?learning_id=$learning_id'><img class='content-img' src='../pic/$image' width='180px' height='150'></a>
            </div>
        
        <div class='content-col2'>
            <div class='topic'>
                <h3 class='topic-h3'> $en_topic </h3> 
            </div>
            <div class='paragraph'></div>
            <a href='lifestyle-desc.php?learning_id=$learning_id'><p> $en_desc</p></a>
             </div>
        </div>
    </div>";}
    $sql="SELECT * FROM travel where travel_id = 2 and 3 and 5";
    $stmt= mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($stmt)){
        $en_topic= htmlentities($row['en_topic']);
        $image = $row['image'];
        $en_desc = htmlentities($row['en_desc']);
        $lifestyle_id =$row['travel_id'];
    echo"             
    <div class='content-col'>   
    
            <div class='content'> 
            <a href='product.php?travel_id=$travel_id'><img class='content-img' src='../pic/$image' width='180px' height='150'></a>
            </div>
        
        <div class='content-col2'>
            <div class='topic'>
                <h3 class='topic-h3'> $en_topic </h3> 
            </div>
            <div class='paragraph'></div>
            <a href='lifestyle-desc.php?travel_id=$travel_id'><p> $en_desc</p></a>
             </div>
        </div>
    </div>";}  
    
    }
}


function GetLifestyle(){
  global $conn;
  if(isset($_GET['lifestyle_id'])){                           
    $lifestyle_id = $_GET['lifestyle_id'];
    $sql= "SELECT * from lifestyle WHERE lifestyle_id ='$lifestyle_id'";
    $stmt = mysqli_query($conn,$sql);  
   while ($row = mysqli_fetch_array($stmt)){
    $en_topic= htmlentities($row['en_topic']);
    $image = $row['image'];
    $en_desc = htmlentities($row['en_desc']);
    $ch_topic= htmlentities($row['ch_topic']);
    $ch_desc = json_encode(htmlentities($row['ch_desc']));
    $th_topic= htmlentities($row['th_topic']);
    $th_desc = htmlentities($row['th_desc']);
    echo" 
 <div class='wrapper'>
    <div class='wrappper-topic'>                                
         <h1 id='topic' > $en_topic </h1>             
         <div class='language'><span id='eng'>EN </span> |  <span id='chinese'>CH </span>  |  <span id='thai'>TH </span>  
         </div>    
    </div>
    <div class='wrapper-content'>
        <div class='content-img'>
        <img class='image' src='../pic/$image' width='350px' height='280px' >
        </div>           
        <div class='desc'>";
        echo" <p id='paragraph'>";
       echo"$en_desc";
       echo"</p>";
        echo"</div> 
    </div>
</div>";
}}}

function GetLearning(){
    global $conn;
    if(isset($_GET['learning_id'])){                           
      $learning_id = $_GET['learning_id'];
      $sql= "SELECT * from learning WHERE learning_id ='$learning_id'";
      $stmt = mysqli_query($conn,$sql);  
     while ($row = mysqli_fetch_array($stmt)){
      $en_topic= htmlentities($row['en_topic']);
      $image = $row['image'];
      $en_desc = htmlentities($row['en_desc']);
      $ch_topic= htmlentities($row['ch_topic']);
      $ch_desc = htmlentities($row['ch_desc']);
      $th_topic= htmlentities($row['th_topic']);
      $th_desc = htmlentities($row['th_desc']);
      echo" 
   <div class='wrapper'>
      <div class='wrappper-topic'>                                
           <h1 id='topic' > $en_topic </h1>             
           <div class='language'><span id='eng'>EN </span> |  <span id='chinese'>CH </span>  |  <span id='thai'>TH </span>  
           </div>    
      </div>
      <div class='wrapper-content'>
          <div class='content-img'>
          <img class='image' src='../pic/$image' width='350px' height='280px' >
          </div>           
          <div class='desc'>
          <p id='paragraph'> $en_desc </p>
          </div> 
      </div>
  </div>";
  }}}

  function GetTravel(){
    global $conn;
    if(isset($_GET['travel_id'])){                           
      $travel_id = $_GET['travel_id'];
      $sql= "SELECT * from travel WHERE travel_id ='$travel_id'";
      $stmt = mysqli_query($conn,$sql);  
     while ($row = mysqli_fetch_array($stmt)){
      $en_topic= htmlentities($row['en_topic']);
      $image = $row['image'];
      $en_desc = htmlentities($row['en_desc']);
      $ch_topic= htmlentities($row['ch_topic']);
      $ch_desc = htmlentities($row['ch_desc']);
      $th_topic= htmlentities($row['th_topic']);
      $th_desc = htmlentities($row['th_desc']);
      echo" 
   <div class='wrapper'>
      <div class='wrappper-topic'>                                
           <h1 id='topic' > $en_topic </h1>             
           <div class='language'><span id='eng'>EN </span> |  <span id='chinese'>CH </span>  |  <span id='thai'>TH </span>  
           </div>    
      </div>
      <div class='wrapper-content'>
          <div class='content-img'>
          <img class='image' src='../pic/$image' width='350px' height='280px' >
          </div>           
          <div class='desc'>
          <p id='paragraph'> $en_desc</p>
          </div> 
      </div>
  </div>";
  }}}
