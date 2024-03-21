<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'dbh.inc.php';
        $query = "INSERT INTO users(username, email, pwd) VALUES(?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $email, $pwd]);
        $pdo = null;
        $stmt = null;
        header('location:../index.php');
        die();
    } catch (PDOEception $e) {
        die("query failed: ".$e->getMessage());
    }
}else{
    header('location:../index.php');
}



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

