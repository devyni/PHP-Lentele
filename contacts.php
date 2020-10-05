<?php

session_start();
// $_SESSION['people']=[];
// $_SESSION['id']=0;
$person = array
    (
        'id'=>1,
        'Vardas'=>'Naglis',
        'Pavarde'=>'Judenis',
        'Adresas'=>'Vilnius'
    );
//     $_SESSION['people'][$_SESSION['id']]=$person;
//     $_SESSION['id']+=1;
//     $_SESSION['people'][$_SESSION['id']]=$person;
//     $_SESSION['id']+=1;
// array_push($_SESSION['people'], $person);
// print_r ($_SESSION['people']);

if(isset($_GET['fname'])){
    if($_GET['fname']!="" && $_GET['lname']!="" && $_GET['adress']!=""){
    $person['Vardas']=$_GET['fname'];
    $person['Pavarde']=$_GET['lname'];
    $person['Adresas']=$_GET['adress'];
    if(isset($_GET['id'])){
    $person['id']=$_GET['id'];
    }
    save($person);
}};
// TODO sutvarkyti permetamus numerius
function save($person){
    if(isset($person['id'])){
        $_SESSION['people'][$person['id']]=$person;
    }else{
    $_SESSION['people'][$_SESSION['id']]=$person;
    $_SESSION['id']+=1;

}}
if(isset($_GET['delete'])){
    unset($_SESSION['people'][$_GET['delete']]);
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>
<body>
    <?php include "header.php"?>
    <container>
    <h1>Contacts</h1>
    <form action="">
  <label for="fname">Vardas:</label>
  <input type="text"  name="fname" value="">
  <label for="lname">Pavarde:</label>
  <input type="text"  name="lname" value="">
  <label for="adress">Adresas:</label>
  <input type="text"  name="adress" value="">
  <input type="submit" value="Submit">
</form> 

    <table>
  <tr>
    <th>Id</th>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Adresas</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  
  <?php
  foreach ($_SESSION['people'] as $key => $person) {
    ?>
     
<tr>
    <td><?=$key?></td>
    <td><?=$person['Vardas']?></td>
    <td><?=$person['Pavarde']?></td>
    <td><?=$person['Adresas']?></td>
    <td><form action=''>
        <input type="hidden" name="delete" value="<?=$key?>">
        <input type="submit" value="Delete">
    </form></td>
    <td><form action='update.php'>
        <input type="hidden" name="update" value="<?=$key?>">
        <input type="submit" value="Update">
    </form></td>
</tr>
<?php
  }
?>
</table><br><br>
    </container>
    <?php include "footer.php"?>
</body>
</html>