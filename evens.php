<?php
function is_Even(){
    for($num=100; $num>=2; $num--){
        if(($num % 2) == 0){
            echo "$num \n";
        }
    }
}

echo is_Even();
?>