<?php

// Function to sort the array by values in ascending order
function sortArrayAscending(&$array)
{
    asort($array);
}

// Function to sort the array by values in descending order
function sortArrayDescending(&$array)
{
    arsort($array);
}

// Function to sort the array by values without changing keys
function sortArrayValues(&$array)
{
    asort($array);
    $array = array_values($array);
}

// Function to find the intersection of two arrays
function findArrayIntersection($array1, $array2)
{
    return array_intersect($array1, $array2);
}

// Function to find the union of two arrays
function findArrayUnion($array1, $array2)
{
    return array_merge($array1, $array2);
}

// Menu options
$options = [
    "1. Sort the array by values (changing the keys) in ascending order",
    "2. Sort the array by values (changing the keys) in descending order",
    "3. Sort the array by values without changing the keys",
    "4. Find the intersection of two arrays",
    "5. Find the union of two arrays",
    "6. Exit"
];

// Associative arrays for testing
$array1 = ["a" => 5, "b" => 2, "c" => 9, "d" => 1];
$array2 = ["c" => 7, "d" => 3, "e" => 6];

// Display menu
echo "Menu:\n";
foreach ($options as $option) {
    echo $option . "\n";
}

// Process user input
while (true) {
    $choice = readline("Enter your choice (1-6): ");

    switch ($choice) {
        case 1:
            sortArrayAscending($array1);
            print_r($array1);
            break;
        case 2:
            sortArrayDescending($array1);
            print_r($array1);
            break;
        case 3:
            sortArrayValues($array1);
            print_r($array1);
            break;
        case 4:
            $intersection = findArrayIntersection($array1, $array2);
            print_r($intersection);
            break;
        case 5:
            $union = findArrayUnion($array1, $array2);
            print_r($union);
            break;
        case 6:
            echo "Exiting the program.";
            exit();
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}
?>
