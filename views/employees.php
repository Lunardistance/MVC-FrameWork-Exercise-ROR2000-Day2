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
<h1>List of Employees</h1>

<ol>
        <?php foreach ($employees as $emp) { ?>
            <li><a href="./person.php?p=<?print $emp->id?>"><?=$emp->name?></a></li>
        <?php } ?>
</body>
</html>