<?php

//init a map
function map(){
    $map = array();
    
    //The first row
    echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"4\" width='600' height='500' id='map' onClick=\"colorChange(this)\"><tr><td></td>";
    for($j=65;$j<79;$j++){
        echo "<td>".strtoupper(chr($j))."</td>";
        if($j==78){echo "</tr>";}
    }
    
    //The table body
    for($i=1;$i<12;$i++){
        echo "<tr><td width='6.66%'>".$i."</td>";
        for($j=65;$j<79;$j++){
            $arr = array($i,strtoupper(chr($j)));
            array_push($map,$arr);
            echo "<td width='6.66%' id=\"".$arr[0].", ".$arr[1]."\"> </td>";
            if($j==78){echo "</tr>";}
        }
    }
    echo "</table>";
}

//calculate the distance
function mapDistance($start,$end,$obstacle){
    
    //Judge whether the given points are in obstacles
    if(in_array($start,$obstacle)){
        $count="The starting point cannot be in an obstacle!";
    }elseif(in_array($end,$obstacle)){
        $count="The end point cannot be in an obstacle!";
    }else{
        $x_y = 0;//0 => x move; 1 => y move;
        $count = 0;
        $i=0;
        while($start[0]!=$end[0] || $start[1]!=$end[1]){
            if($count>=50){
                $count = "The number is too big!";
                return $count;
            }
            if($x_y==0){
                if($start[0]<$end[0]){
                    $start[0]+=1;
                    if(in_array($start,$obstacle)){
                        $start[0]-=1;
                    }else{
                        $count++;
                    }
                }elseif($start[0]>$end[0]){
                    $start[0]-=1;
                    if(in_array($start,$obstacle)){
                        $start[0]+=1;
                    }else{
                        $count++;
                    }
                }else{
                    $i++;
                }
                $x_y=1;
            }else{
                if($start[1]<$end[1]){
                    $start[1]+=1;
                    if(in_array($end,$obstacle)){
                        $end[0]-=1;
                    }else{
                        $count++;
                    }
                }elseif($start[1]>$end[1]){
                    $start[1]-=1;
                    if(in_array($end,$obstacle)){
                        $end[0]+=1;
                    }else{
                        $count++;
                    }
                }else{
                    $i++;
                }
                $x_y=0;
                if ($i>1000){
                    $count = "Endless loop!";
                    break;
                    return $count;
                }
            }
        }
    }
    return $count;
}
?>