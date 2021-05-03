<?php
include "./dati.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DIschi</title>
</head>

<body>
    <?php for ($i = 0; $i < count($dischi); $i++) : ?>
        <h1>disco numero <?= $i + 1?></h1>        
        <?php foreach ($dischi[$i] as $key => $value) : ?>
            <div>
                <span> <?= $key ?> = </span>
                <span> <?= $value ?> </span>
            </div>    
        <?php endforeach ?>
    <?php endfor ?>
</body>
</html>


