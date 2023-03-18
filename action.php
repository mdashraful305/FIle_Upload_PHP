<?php
include 'db.php';

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $image=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $path='uploads/'.$image;
    $sql="INSERT INTO `post`(`name`, `image`, `roll`) VALUES ('{$name}','{$image}','{$roll}')";
    $result=$con->query($sql);
    if($result){
        move_uploaded_file($tmp_name,$path);
        echo "SUbmitted";
    }else{
        echo "Not submitted";
    }
}