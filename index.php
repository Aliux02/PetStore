<?php include "category.php" ?>
<?php include "rusislaikas.php" ?>
<?php require __DIR__."/Pet.php"?>

<?php
session_start();
//session_unset();
if(isset($_SESSION)){
    $pet = new Pet('ilgakojis','gandras','birds');
    $_SESSION['category']=$pet->category;
    $_SESSION['category']=$pet;
    $_SESSION['life']=$rusislaikas;
}

/*for ($i=0; $i <count($_SESSION[0]) ; $i++) { 
    if($_SESSION['category'][$i]){

    }
}*/


var_dump($_SESSION['category']);
echo '<br>';
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainnnnnn.css">
    <title>Document</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="<?=$pet->category?>">Ropliai
        <table>
            <tr>
                <th>Rusis</th>
                <th>Vardas</th>
                <th>Maitinti</th>
                <th>Parduoti</th>
                <th>Sotumas</th>
            </tr>
            <tr>
                <td><?=$pet->type?></td>
                <td><?=$pet->name?></td>
                <td><input type="submit" value="Maitinti"></td>
                <td><input type="submit" value="Parduoti"></td>
                <td><div clas="progress"style="height:20px; width:100px; background-color:red"></div></td>
            </tr>
        </table>
    </div>
    <div class="birds">pauksciai</div>
    <div class="fourLegs">keturkojai</div>
    <div class="fishes">zuvys</div>
    <?php include "footer.php" ?>
</body>
</html>