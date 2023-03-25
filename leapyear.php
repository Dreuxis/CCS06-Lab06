<?php
function is_Leapyear(){
    for($year=4; $year<=2024; $year++){
        if(($year % 4) == 0){
            echo "$year \n";
        }
    }
}

echo is_Leapyear();
?>