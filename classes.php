<?php
class LanArtHtmlGenerator {

    public $canvas = array(
         '1' => ''
        ,'2' => ''
        ,'3' => ''
        ,'4' => ''
        ,'5' => ''
        ,'6' => ''
        ,'7' => ''
        ,'8' => ''
        ,'9' => ''
    );

    public function validate($array){

        return (array_unique($array) == $array);
    }

    public function prepare($array){
        $res = explode(',',($array[0]['cells'].','.$array[1]['cells']));
        if($this->validate($res)){
            foreach ($res as $key => $val){

                $this->canvas[$val] = 1;
            }
            return true;
        } else return false;
    }
}