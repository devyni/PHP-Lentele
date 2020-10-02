<?php

$value="";
If(isset($_GET['currency'])){
    if($_GET['currency']=='USD'){
        $value = convertToUsd();
    }
        if($_GET['currency']=='POUND'){
            $value = convertToPund();
        }
}

function convertToUsd(){
    return $_GET['amount']*0.93;

}
function convertToPund(){
    return $_GET['amount']*1.25;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
    <?php include "header.php"?>
    <container>
    <h1>News We' ve got currency converter!</h1>
    <form action="">
    <label for="currency">Currency:</label><br>
    <input type="text" name="currency"  value=""><br>
    <label for="amount">Amount</label><br>
  <input type="text" name="amount" value=""><br><br>
  <input type="submit" value="Skaiciuoti">
</form> 
<h1><?=$value?></h1>
    </container>
    <?php include "footer.php"?>
</body>
</html>