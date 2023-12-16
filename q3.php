<?php
//Q3 1 to 10 loops
echo "<h1>Question 3 For loop 1 to 10:</h1><br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}

echo "<h1>and While loop 1 to 10:</h1><br>";
$i = 1 ;
do{
    echo "$i<br>";
    $i++;

}while($i <=10);

echo "<h1>For each fruit display</h1>";
$fruits = array("Lychee","Honeydew","Watermelon");

foreach($fruits as $value){

    echo "$value";
    echo"<br>";
}


?>