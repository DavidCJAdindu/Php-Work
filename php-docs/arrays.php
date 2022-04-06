<?php
/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/


// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];
// Simple array of strings
$colors = ['red', 'blue', 'green'];


// Using the array function to create an array of seasons
$seasons = array("winter", "spring", "autumn", "summer");

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
print_r($numbers);
var_dump($numbers);



/* ------ Associative Arrays ----- */
/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
// echo $colors[1];

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
// echo $hex['red'];
// var_dump($hex);



/* ---- Multi-dimensional arrays ---- */
/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Array of people
$people = [
  [
    'first_name' => 'David',
    'last_name' => 'A',
    'email' => 'David@gmail.com',
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'John@gmail.com',
  ],
];
var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];


// Encode to JSON
var_dump(json_encode($people));


// Decode from JSON
$jsonobj = '{"first_name":"David","last_name": "Ad","email":"david@gmail.com"}';
var_dump(json_decode($jsonobj));