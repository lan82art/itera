<?php
require_once 'classes.php';

$array = array(
    array( 'text' => 'Текст красного цвета'
    , 'cells' => '1,2'
    , 'align' => 'center'
    , 'valign' => 'center'
    , 'color' => 'FF0000'
    , 'bgcolor' => '0000FF')

, array( 'text' => 'Текст зеленого цвета'
    , 'cells' => '5,6'
    , 'align' => 'right'
    , 'valign' => 'bottom'
    , 'color' => '00FF00'
    , 'bgcolor' => 'FFFFFF')
);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/style.css" rel="stylesheet">
    <title>Itera</title>
</head>
<body>


    <table style="border:1px solid red; margin:auto; width:100%; height:100%;">
    <?php
        $canv = new LanArtHtmlGenerator();
        $canv->render($array);
    ?>
    </table>

</body>
</html>