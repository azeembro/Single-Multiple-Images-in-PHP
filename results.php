<?php
include_once ('database.php');
session_start();
?>

 <table>
<?php
 $query="select * from images" ;
 $result=mysqli_query($conn,$query);
       if ($result->num_rows > 0){ 
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $singleimage = $row['singleimage'];   
               $multiimage = $row['multiimage'];     
               $multiimage = trim($multiimage);        
               $images = explode(',',$multiimage);
               
             ?>
    <tr>
        
    <td>Your ID:</td>
    <td><?php
         if(!empty($id)){ 
                   echo $id;
         }?>
    </td>

    <td>Your Attachment:</td>
    <td><?php
         if(!empty($singleimage)){ 
       ?>
        <img class="images" src="uploads/<?=$singleimage;?>" alt="" width="200px" height="100px">
        <?php }?>
    </td>


    <td>Your Multiple Attachment:</td>
    <td><?php 
    foreach($images as $image){
            ?>
        <img class="images" src="multi/<?=$image;?>" alt="" width="200px" height="200px">
        <?php         
    }
        ?>
    </td>

   </tr>
    <table> 

    <?php
           }
        }
    ?>