<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favoritepet = htmlspecialchars($_POST['favouritepet']);
      
    if(empty($firstname)){
        die('fill all fields');
        header('Location:../index.php');
    }

    echo "These are the information that you submitted";
    echo '<br>';
    echo $firstname;
    echo '<br>';
    echo $lastname;
    echo '<br>';
    echo $favoritepet;
    header('Location:../index.php');
}else{
        header('Location:../index.php');
    }