<? include "./partials/header.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
        foreach ($people as $person) {
            if($person->id==$p) { ?>
            <h1><?=$person->name?></h1>
        <? }
        }
        ?>
<ul>
        <?php 
            foreach ($people as $person) {
                if($person->id==$p) { ?>
            <li><h2>Employee ID</h2><?=$person->id?></li>
            <li><h2>Age</h2><?=$person->age?></li>
            <li><h2>Salary</h2><?=$person->salary?></li>
        <?php  } 
            } ?>
</body>
</html>