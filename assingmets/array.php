<?php
//1 dimensional array
$favcolor = array("red","black","purple", "blue");
echo "My fav color is ".$favcolor[1]."\n";
echo "and I have ".count($favcolor)." other colors in my list.\n";
$favcolor[2] = "White";
echo "My second favorite color must be snow ".$favcolor[2]."\n";
echo "<br";
//2 dimensional array
$gang = array(
    array("Max",19,2003),
    array("Jerry",18,2004),
    array("Brent",27,1995),
    array("Niko",23,1999)
);

echo "The youngest person is ".$gang[1][0]."and his age is".$gang[1][1]."\n";
//sort
echo"<br>";
sort($favcolor);
for ($i=0; $i <count($favcolor) ; $i++) { 
    echo "$favcolor[$i]\n";
    echo "<br>";
}


//rsort
echo "<br>";
$year = array(2001,2020,2018,2014);
rsort($year);
for ($z=0; $z < count($year) ; $z++) { 
    echo "$year[$z]\n";
    echo "<br>";
};








?>