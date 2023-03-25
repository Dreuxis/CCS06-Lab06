<?php
function is_Odd(){
    for($num=0; $num<100; $num++){
        if($num % 2){
            echo "$num \n";
        }
    }
}

echo is_Odd();
?>