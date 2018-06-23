<?php

//init a map
function map(){
    $map = array();
    
    //The first row
    echo "<table border=\"1\" width='500' height='500'><tr><td></td>";
    for($j=65;$j<79;$j++){
        echo "<td>".strtoupper(chr($j))."</td>";
        if($j==78){echo "</tr>";}
    }
    
    //The table body
    for($i=1;$i<12;$i++){
        echo "<tr><td width='20px'>".$i."</td>";
        for($j=65;$j<79;$j++){
            $arr = array($i,strtoupper(chr($j)));
            array_push($map,$arr);
            echo "<td value=\"".$arr[0].", ".$arr[1]."\"> </td>";
            if($j==78){echo "</tr>";}
        }
    }
    echo "</table>";
}

//calculate the distance
function mapDistance($start,$end){
    $x_y = 0;//0 => x move; 1 => y move;
    $count = 0;
    $i=0;
    while($start[0]!=$end[0] || $start[1]!=$end[1]){
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
                $i++;
            }
            $x_y=0;
            if ($i>1000){break;}
        }
    }
    return $count;
}
?>