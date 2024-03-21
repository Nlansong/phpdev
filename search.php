<?php
if($SERVER['REQUEST_METHOD']=='POST'){
    $usersearch = $_POST['usersearch'];

    try {
        require_once 'includes/db,inc,php';
        $query = "SELECT * FROM comments WHERE username= :usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":usersearch", $usersearch);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        $pdo = null;
        die();
    } catch (PDOException $e) {
        echo 'Connection failed '.$e->getMessage();
    }
}
?>




<h1>How to show data in mysql database to website using php<h1>
<form action="search.php" method="post">
    <label for="search">Search for</label>
    <input id='search' name='usersearch' type='text'  placeholder='search user' /> <br>
    <button>Search</button>
</form>