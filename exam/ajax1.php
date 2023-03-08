<?php
// Include the database config file 
require_once 'db.php'; 
 
if(!empty($_POST["id"])){ 
    // Fetch city data based on the specific state
    $id=$_POST['id'];
    // echo $id;die;
    $query = "SELECT * FROM public.district where state_id='$id'"; 
    // echo $query;die;
    $result = pg_query($con,$query); 
   
     
    // Generate HTML of city options list 
    if(pg_num_rows($result) > 0){ 
        echo '<option value="">Select district</option>'; 
        while($row = pg_fetch_assoc($result)){  
            echo '<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
    
}

?>