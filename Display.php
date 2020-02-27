<!DOCTYPE html>
<html lang="en">
<head>
 </head>
<body 
<?php 
                     require_once("db_connect.php");
                     if(isset($_GET['success']))
                     {
 
                     
                     $viewquery = " select * from images";
                     $result = mysqli_query($connection,$viewquery);
 
                     while($row=mysqli_fetch_assoc($result))
                     {
                         $display=$row['image'];
 
                        echo '  <div class="card-body">
                                    <img src="upload/'.$display.'" width="200" heigt="200" class="m-auto">;
                                </div>';                            
                     }
                    }
                    else
                    {
                        header("location: index.php");
                    }
 
                     
                     ?>
 </body>
</html>
