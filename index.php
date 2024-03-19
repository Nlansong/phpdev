<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Form Handling in PHP</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">First Name  </label>
            <input id="firstname" type="text" name="firstname" placeholder="enter your firstname"  /> <br>
             <label for="lastname" >  Last Name</label>
             <input id="lastname" type="text" name="lastname" placeholder="enter your lastname"   /> <br>
            <label>  Favourite Pet </label>
             <select id="favouritepet" name="favouritepet" >
                <option value="none"> None</option>
                <option value="Cat"> Cat</option>
                <option value="Dog"> Dog</option>
                <option value="Goat"> Goat</option>
             </select> <br>
             <button  type="submit" >Submit</button>
        </form>
    </main>
</body>
</html>

<?php
// Logical Operators in php
$a = 4;
$b = 4;

$c = 1;
$d = 6;

if($a==$b || $a==$c && $b==$d){
    echo "The statement is true";
}
?>


<h1>  Simple Calculator written in php</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<input id='number1' name='number1' placeholder='enter number' required  /> <br>
<select name='operator'>
    <option value='add'> + </option>
    <option value='subtract'> - </option>
    <option value='multiply'> * </option>
    <option value='devide'> / </option>
</select>
<input id='number2' name='number2' placeholder='enter  another  number' required  /> <br>

<button> Calculate </button>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    //GRAB THE DATA

    $number1 = filter_input(INPUT_POST, 'number1', FILTER_SANITIZE_NUMBER_FLOAT);
    $number2 = filter_input(INPUT_POST, 'number2', FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST['operator']);

    $error = false;
    if(empty($number1) || empty($number2) || empty($operator)){
        echo '<p> You must fill all the fields</p>';
        $error = true;
    }

    if(!is_numeric($number1) || !is_numeric($number2)){
        echo '<p> All fields must be numeric </p>';
        $error = true;
    }

    if(!$error){
        $value = 0;
        switch($operator){
            case 'add':
                $value = $number1 + $number2;
                break;
            case 'subtract':
                $value = $number1 - $number2;
                break;
            case 'multiply':
                $value = $number1 * $number2;
                break;
            case 'devide':
                $value = $number1 / $number2;
                break;
            default:
                echo '<p> Something went wrong </p>';
        }
        echo "<p> Result: ". $value ."</p>";
    }
}
?>