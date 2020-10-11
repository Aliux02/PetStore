<?php include "category.php" ?>
<?php include "names.php" ?>
<?php include "typeTime.php" ?>
<?php require __DIR__."/Pet.php"?>

<?php
session_start();
session_unset();

//////
if(isset($_SESSION)){
    $_SESSION['category']=$category;
    $_SESSION['lifeTime']=$typeTime;
}

////// rand gyvuno generavimas
foreach ($_SESSION['category'] as $key => $value) {
    $pet = new Pet($names[array_rand($names)],array_rand($typeTime),array_rand($category));
    if ($key=$pet->category){
        array_push($_SESSION['category'][$key], $pet);
    }
}


//var_dump($_SESSION['life']);
echo '<br>';
//var_dump($_SESSION['category']['reptiles']);
echo '<br>';
var_dump($_SESSION['category']);
echo '<br>';
//var_dump($key);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainnnnnnn.css">
    <title>Pet store</title>
</head>
<body>
    <?php include "header.php" ?>
    
    <div class="reptiles">Ropliai
    
        <table>
            <tr>
                <th>Kategorija</th>
                <th>Rusis</th>
                <th>Vardas</th>
                <th>Maitinti</th>
                <th>Parduoti</th>
                <th>Sotumas</th>
            </tr>
            
            <tr>
                <td><?=$pet->category?></td>
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