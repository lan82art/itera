<?php
require_once 'classes.php';

$canv = new LanArtHtmlGenerator();
var_dump($canv->canvas);
?>
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
</div>

</body>
</html>