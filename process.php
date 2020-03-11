<?php
     require_once("db_connect.php");
    if(isset($_POST['upload']))
    {
        $username = $_POST['username'];
        $Image = $_FILES['pictures']['name'];
        $Type = $_FILES['pictures']['type'];
        $Temp = $_FILES['pictures']['tmp_name'];
        $size = $_FILES['pictures']['size'];
        
        $ImageExt = explode('.',$Image);
        $ImgCorrectExt = strtolower(end($ImageExt));
        $Allow = array('jpg','jpeg','png');
        $target = "upload/".$Image;
 
        if(in_array($ImgCorrectExt,$Allow))
        {
            if($size<1000000)
            {
                
                $query = "INSERT INTO `student`(`username`, `image`) VALUES ('$username','$target')";
                mysqli_query($connection,$query);
                move_uploaded_file($Temp,$target);
                echo ' You have Successfully Uploaded Image on Database';
                header("location: Display.php?success");
            }
            else
            {
                echo 'File size Too Large';
            }
        }
        else
        {
            echo ' You Cannot upload image';
        }
 
    }
    else
    {
        header("location:index.php");
    }
?>
