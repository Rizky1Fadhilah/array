<?php
//pengulangan php
//for / foreach

$angka = [12,13,14,15,16,17,18];
?>

<!DOCTYPE html>
<html>
    <head>

<title>Latihan pengulangan</title>
<style>
    div{

width: 50px;
height: 50px;
background-color: cyan;
text-align: center;
line-height: 50px;
margin: 3px;
float: left;
    }
</style>
    </head>
    <body>

    <?php foreach ($angka as $key) : ?>
<div><?php echo $key ;?></div>
   <?php endforeach; ?>
    </body>
</html>