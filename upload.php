<?php
    if(!empty($_FILES['file'])){
        $ext = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
                $image = $_FILES['file']['name'];
                move_uploaded_file($_FILES["file"]["tmp_name"], 'img/'.$image);
        echo $image." successfully uploaded";
    }else{
        echo "Invalid File or Empty File";
    }
    //echo '<a href="imagedisplay.php">Display image</a>';

?>