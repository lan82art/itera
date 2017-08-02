<?php
require_once 'classes.php';

$array = array(
    array( 'text' => 'Текст красного цвета'
    , 'cells' => '1,2,4,5'
    , 'align' => 'center'
    , 'valign' => 'center'
    , 'color' => 'FF0000'
    , 'bgcolor' => '0000FF')

, array( 'text' => 'Текст зеленого цвета'
    , 'cells' => '8,9'
    , 'align' => 'right'
    , 'valign' => 'bottom'
    , 'color' => '00FF00'
    , 'bgcolor' => 'FFFFFF')
);

$canv = new LanArtHtmlGenerator();
$canv->prepare($array);
//var_dump($canv->canvas);
?>
&nbsp;
<!DOCTYPE html>
<html>
<head>
    <link href="css/style.css" rel="stylesheet">
    <title>Itera</title>
</head>
<body>

<div class="row">
    <div class="col2"><h1>1</h1></div>
    <!--<div class="col"><h1>2</h1></div>-->
    <div class="col"><h1>3</h1></div>
    <!--<div class="col"><h1>4</h1></div>
    <div class="col"><h1>5</h1></div>-->
    <div class="col"><h1>6</h1></div>
    <div class="col"><h1>7</h1></div>
    <div class="col3"><h1>8</h1></div>
    <!--<div class="col"><h1>9</h1></div>-->
    <div style="clear: both;"></div>
</div>

</body>
</html>