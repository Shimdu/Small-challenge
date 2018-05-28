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
function mapDistance($start,$end,$obstacle){
    $i=0;
}
?>