<?php
function age_calc($year){
    return idate("Y") - $year;
}

function is_Voter($age){
    if($age>=18){
        return "You are a voter";
    }
    else{
        return "You are not of voting age";
    }
}

function is_Senior($age){
    if($age>=60){
        return "You are a senior citizen";
    }
    else{
        return "You are not a senior citizen";
    }
}
#Get input from CLI
try {
    $name = $argv[1];
    $year = $argv[2];
} catch (\Throwable $th) {
    echo "Did not input Name or Birth Year";
}



#Age Calculation
$age = age_calc($year);
#Output
echo "Your name is $name, and your age is $age years old \n";
echo is_Voter($age)."\n";
echo is_Senior($age)."\n";
?>