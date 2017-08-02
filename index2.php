<?php
$enter = array(
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
        , 'bgcolor' => 'FFFFFF'));


$res = explode(',',($enter[0]['cells'].','.$enter[1]['cells']));

var_dump($res);

function   isUnique($array)
    {
        return   (array_unique($array) == $array);
    }

    if(isUnique($res)){
        echo 'unique';
    } else echo 'not';