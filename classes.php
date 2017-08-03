<?php
class LanArtHtmlGenerator {

    public $canvas = array(
         '1' => '1'
        ,'2' => '1'
        ,'3' => '1'
        ,'4' => '2'
        ,'5' => '2'
        ,'6' => '2'
        ,'7' => '3'
        ,'8' => '3'
        ,'9' => '3'
    );
    /*public $grid = array(
         '1' => '<div class="col">1</div>'
        ,'2' => '<div class="col">2</div>'
        ,'3' => '<div class="col">3</div>'
        ,'4' => '<div class="col">4</div>'
        ,'5' => '<div class="col">5</div>'
        ,'6' => '<div class="col">6</div>'
        ,'7' => '<div class="col">7</div>'
        ,'8' => '<div class="col">8</div>'
        ,'9' => '<div class="col">9</div>'
    );*/
    public $grid = array(
         '1' => '<td class="cell">1</td>'
        ,'2' => '<td class="cell">2</td>'
        ,'3' => '<td class="cell">3</td>'
        ,'4' => '<td class="cell">4</td>'
        ,'5' => '<td class="cell">5</td>'
        ,'6' => '<td class="cell">6</td>'
        ,'7' => '<td class="cell">7</td>'
        ,'8' => '<td class="cell">8</td>'
        ,'9' => '<td class="cell">9</td>'
    );
    public $result = '';

    public function validate($array){

        return (array_unique($array) == $array);
    }

    public function prepare($array){

        $str = '';
        $isFirst = true;
        foreach ($array as $val){
            if ($isFirst) {
                $str .= $val['cells'];
                $isFirst = false;
            } else $str .= ','.$val['cells'];
        }

        //$res = explode(',',substr($str, 0, -1));
        $res = explode(',',$str);

        //var_dump($res);

        if($this->validate($res)){

            foreach ($array as $val){

                $one = 0;
                $two = 0;
                $three = 0;

                $str = $val['cells'];
                $arr = explode(',',$str);


                foreach ($arr as $value){

                    if ($this->canvas[$value] == 1){
                        $one += 1;
                    } elseif ($this->canvas[$value] == 2){
                        $two += 1;
                    } elseif ($this->canvas[$value] == 3){
                        $three += 1;
                    }
                }

                $height = 0;
                $weight = 0;

                if ($one != 0){
                    $height += 1;
                    $weight = $one;
                }
                if ($two != 0){
                    $height += 1;
                    $weight = $two;
                }
                if ($three != 0){
                    $height += 1;
                    $weight = $three;
                }

                $min = min($arr);

                //$height = $height * 32;
                //$weight = $weight * 32;

                foreach ($arr as $value){
                    if($value == $min){
                        //$this->grid[$value] = '<div style="min-height: '.$height.'%; width: '.$weight.'%; text-align: '.$val['align'].'; display: table-cell; vertical-align:'.$val['valign'].'; color:'.$val['color'].'; background-color: '.$val['bgcolor'].'; float: left; ">'.$val['text'].'</div>';
                        $this->grid[$value] = '<td class="cell" colspan="'.$weight.'" rowspan = "'.$height.'" bgcolor="'.$val['bgcolor'].'" align = "'.$val['align'].'" valign = "'.$val['valign'].'" style="color: #'.$val['color'].';">'.$val['text'].'</td>';
                    } else $this->grid[$value] = '<!-- empty -->';
                }
            }
            return $this->grid;
        } else return false;
    }

    public function render($array){

        $arr = $this->prepare($array);
        echo '<tr>';
        foreach ($arr as $key => $val){
            if ($key!= 9 && ($key%3) == 0){
                echo $val.'</tr><tr>';
            } else echo $val;
        }
        echo '</tr>';
    }
}