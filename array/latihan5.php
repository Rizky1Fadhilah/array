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

    <?php for($i=0; $i< count($angka); $i++ ) { ?>
<div><?php echo $angka[$i];?></div>
   <?php } ?>
    </body>
</html>