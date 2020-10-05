
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if(isset($_GET['update'])){ ?>
     
    <h1>Update</h1><br>
    <form action="contacts.php">
            <label for="ufname">Vardas:</label>
            <input type="text"  name="fname" value="<?=$_SESSION['people'][$_GET['update']]['Vardas']?>">
            <label for="lname">Pavarde:</label>
            <input type="text"  name="lname" value="<?=$_SESSION['people'][$_GET['update']]['Pavarde']?>">
            <label for="adress">Adresas:</label>
            <input type="text"  name="adress" value="<?=$_SESSION['people'][$_GET['update']]['Adresas']?>">
            <input type="hidden" name="update" value=<?=$_GET['update']?>>
            <input type="submit" value="Submit">
    </form>
    
<?php } ?>


</body>
</html>