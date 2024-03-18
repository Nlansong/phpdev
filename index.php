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