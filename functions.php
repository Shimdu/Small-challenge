<?php

//init a map
function map(){
    $map = array();
    for($i=1;$i<12;$i++){
        for($j=65;$j<79;$j++){
            $arr = array($i,strtoupper(chr($j)));
            array_push($map,$arr);
        }
    }
    return $map;
}

//calculate the distance
function mapDistance($start,$end){
    $x_y = 0;//0 => x move; 1 y => move;
    $count = 0;
    $i=0;
    while($start[0]!==$end[0] || $start[1]!==$end[1]){
        if($count>=50){
            die('Stop!');
        }
        if($x_y==0){
            if($start[0]<$end[0]){
                $start[0]+=1;
                $count++;
            }elseif($start[0]>$end[0]){
                $start[0]-=1;
                $count++;
            }else{
                echo $i." ";
                $i++;
            }
            $x_y=1;
        }else{
            if($start[1]<$end[1]){
                $start[1]+=1;
                $count++;
            }elseif($start[1]>$end[1]){
                $start[1]-=1;
                $count++;
            }else{
                echo $i." ";$i++;
            }
            $x_y=0;
            if ($i>1000){exit("$count");}
        }
    }
    return $count;
}
?>