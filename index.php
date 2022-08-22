<?php
//echo "Hello World!"
echo "My name is Mwas\r\n";

$x = 2;
$y = 3;
$grade = 100;
echo $grade;
echo $x**$y;
echo(round(0.5));
echo "The square root of $grade is\n";
echo(sqrt($grade));
echo "<P>Follow me on Instagram. And my grade is $grade</p>";
echo "<h2>Big Man Ting ye?</h2>";

echo strlen("blackeyedpuppy");
echo strrev("blackeyedpuppy");
echo str_word_count("blackeyedpuppy");

$cat = "sonya";
echo "my cat is called " .$cat;
$firstname = "Rose";
$lastname = "Mwazi";
$fullname = $firstname . $lastname;
echo $fullname;
$grade = 30;
if($grade>90){
    echo "You have an A";
}

$password = "Veronica123";

if (strlen($password)<8){
    echo "Password is too short";
}elseif(strlen($password)==8){
    echo "Password is fair";
}else{
    echo "strong";
} 

$grade = 80;
$attendance = 90;

if ($grade > 90 or $attendance > 80){
    echo "Pass";
}




$grade = 70;

switch($grade) {
    case($grade >= 90):
        echo "You got an A";
        break;
    case($grade >=80 && $grade < 89):
        echo "You got a B+";
        break;
    case($grade >=70 && $grade < 79):
        echo "You got a B";
        break;
    case($grade >=60 && $grade < 69):
        echo "You got a B-";
        break;    
    case($grade >=50 && $grade < 59):
        echo "You got a C+";
        break;
    default:
    echo "You have Failed";
    
                
}

$favcolor = "red";

switch ($favcolor){
    case 'blue':
        echo "Your favourite color is Blue";
        break;

    case 'red':
        echo "Your favourite color is red";
        break;    

    case "green":
        echo "Your favourite color is green";
        break;
        
    default:
    echo "Your favourite color is neither blue, red nor green";






}
  

$parent = "both";
  
    switch ($parent){
       case 'both':
        echo "You love Mom and Dad";
        break;
       case 'Mom':
        echo "You love Mom only";
        break;
        case 'Dad':
        echo "You love Dad only";
        break;    
        default:
        echo "You don't love neither of them";
        break;
  }
  
  $day = "Wednesday";
  
  switch ($day) {
      case 'Sunday':
          echo "Have a blessed Sunday :)";
          break;
  
      case "Monday":
          echo "Wake up and go for that bag bro!";
          break;
      case 'Tuesday':
          echo "Don't quit. You can do it";
          break;
      case "Wednesday":
          echo "2 days to Friday. Have a good day.";
          break;    
      case "Thursday":
          echo "Perfect.";
          break;
      case "Friday":
          echo "Go Have fun. You deserve it";
          break;
      case "Saturday":
          echo "WAKE UP AND GO WALK YOUR DAWGS";
           break;
      default:
          echo "That's not a day bro";
           break;
  }  

  $user = "admin";

  switch ($user) {
      case "admin":
          echo "Hello Admin. Welcome back.";
          break;
      case "Patient":
          echo "Hello. Please book an appointment with your doctor";
          break;
      case "Doctor":
          echo "Hello. Check the latest appointment booking and confirm it";
          break;
      
      default:
          echo "Incorrect value";
          break;
  }


 

//$kWh = 201;

// switch ($kWh) {
//    case($kWh >= 201 && $kWh < 300 ):
//        $bill = $kWh *  300;
//        echo "your bill is $bill";
//        break;
//    case($kWh >= 101 && $kWh < 200):
//        $bill = $kWh * 200;
//        echo "your bill is $bill";
//        break;
//    case($kWh >= 51 && $kWh < 100):
//        $bill = $kWh * 150;
//        echo "your bill is $bill";
//        break;
//    case($kWh >= 0 && $kWh < 50):
//        $bill = $kWh * 100;
//        echo "Your bill is $bill";
//        break;                
//    default:
//        echo "Incorrect value";
//        break;
//}

//$consumption = 301;

//if ($consumption >= 201 && $consumption < 300) {
   // $bill = $consumption * 300;
   // echo "your bill is $bill";
//}elseif ($consumption >= 101 && $consumption < 200) {
   // $bill = $consumption * 200;
   // echo "your bill is $bill";
//}elseif ($consumption >= 51 && $consumption < 100 ){
   // $bill = $consumption * 150;
   // echo "your bill is $bill";
//}elseif ($consumption >= 0 && $consumption < 50) {
   // $bill = $consumption * 100;
   // echo "your bill is $bill";

//}else {
  //  echo "invaid Number";
//}
 
//$shit = "Brendah";


// 90 - 100 = 100sh
// 80 - 89 = 89sh
// 70 - 79 = 79sh


$fish = 100;

switch ($fish) {
    case ($fish >= 90 && $fish = 100):
        $bill = $fish * 100;
        echo "your bill is $bill";
        break;
    case ($fish >= 80 && $fish < 89):
        $bill = $fish * 89;
        echo "your bill is $bill";
        break;    
    
    default:
        echo "invalid number";
        break;
}


// 500000 - 99999 = Group A
// 99998 - 80000 = Group B
// 79999 - 60000 = Group C
// 59999 - 50000 = Group D

$Group = "A";

if ($Group = "A") {
    $amt = 
}






//array assingment

 $data = array();
$data[] = "Daniel";
echo $data[0];
?>
