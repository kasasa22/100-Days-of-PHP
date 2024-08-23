<?php
//0 1 0 1 1 0 1 1 1 0 1 1 1 1 0 1 1 1 1 1 0

class Binary {
    public function binary($num){
        $i = 0;
        $j = 0;
        $k = 2;
        $numsArray = array();

        while($i < $num){

            if ($i == $j){
                $numsArray[] = 0;
                $j = $j +$k;
                $k += 1;


            }else{
                $numsArray[] = 1;
            }
            $i +=1;
        }
        print_r($numsArray);

    }
}

$sol = new Binary();
$sol->binary(30);