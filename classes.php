<?php
class LanArtHtmlGenerator {

    public $canvas = array(
         '1' => 0
        ,'2' => 0
        ,'3' => 0
        ,'4' => 0
        ,'5' => 0
        ,'6' => 0
        ,'7' => 0
        ,'8' => 0
        ,'9' => 0
    );


    public $array = array(
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

    public function validate($array){

        return (array_unique($array) == $array);
    }




}