<?php


$grade = 100;

switch($grade) {
    case($grade >= 90):
        echo "You got an A";
        
    case($grade >=80 && $grade < 89):
        echo "You got a B+";
        
    case($grade >=70 && $grade < 79):
        echo "You got a B";
        
    case($grade >=60 && $grade < 69):
        echo "You got a B-";
            
    case($grade >=50 && $grade < 59):
        echo "You got a C+";
    
    default:
    echo "You have Failed";
    
                
}

      







?>