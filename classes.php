<?php
class LanArtHtmlGenerator {

    protected $row = 3;
    protected $col = 3;

    protected $canvas = array();

    public $grid = array();
    public $result = '';

    public function __construct(){
        $mul = $this->row * $this->col;
        for($i=1;$i<=$mul;$i++){
            $this->grid[$i]='<td width="30%">'.$i.'</td>';
        }

        $column = 1;
        for ($i=1;$i<=$this->row;$i++){
            for ($j=1;$j<=$this->col;$j++){
                $this->canvas[$column] = $i;
                $column++;
            }
        }
    }

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

                foreach ($arr as $value){
                    if($value == $min){

                        $this->grid[$value] = '<td class="cell" colspan="'.$weight.'" rowspan = "'.$height.'" bgcolor="#'.$val['bgcolor'].'" align = "'.$val['align'].'" valign = "'.$val['valign'].'" style="color: #'.$val['color'].';">'.$val['text'].'</td>';
                    } else $this->grid[$value] = '<!-- empty -->';
                }
            }
            return $this->grid;
        } else return false;
    }

    public function render($array){

        if($arr = $this->prepare($array)){
        echo '<tr>';
        foreach ($arr as $key => $val){
            if ($key!= 9 && ($key%3) == 0){
                echo $val.'</tr><tr>';
            } else echo $val;
        }
        echo '</tr>';
        } else echo 'Enter correct array';
    }
}