<?php

//Indexed arrays

$numbers = [1,2,3,4,5];

$people = array("Sandesh","Bibek" , "Bijay");

echo $numbers[0];

echo $people[1];

print_r($numbers);   //print readable -> to print entire array in readable format
print_r($people);

//adding new value to the array

$numbers[] = 6;    //Method 1
array_push($numbers,7); //Method 2


//removing last value from array

array_pop($numbers);


print_r($numbers);

echo count($numbers);

$people3 = array_merge($numbers , $people);

print_r($people3);







?>