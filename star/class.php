<?php
class Star {
    public function pyramids($num){
        
        /*
            
        |  *
        | ***
        |*****
        
        */
        
        for ($i=1;$i<=$num;$i++){
            
            //Print space
            for ($k=1;$k<=($num-$i);$k++){
                echo "&nbsp;";
            }
            
            //print *
            for ($j=1;$j<=(2*$i-1);$j++){
                echo "*";
            }
            echo "<br>";
        }
    }
}

class Compute {
    function calculate($num1,$num2,$oper){

        if($oper=="+"){
            return $num1 + $num2;
        }elseif($oper=="-"){
            return $num1 - $num2;
        }elseif($oper=="*"){
            return $num1 * $num2;
        }else{
            return $num1 / $num2;
        }
    }
    
    function Area($num){
        
        return 3.14*$num*$num;
    }
}