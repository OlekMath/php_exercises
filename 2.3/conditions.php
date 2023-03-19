<?php 

// $result = 1 >= 3; //true
$first_name = 'Oleksandr';
$last_name = "Sosnovskyi";

/* if($first_name == 'oleksandr' || $last_name == "Sosnovskyi") {
    echo "The condition is true";
} else {
    echo "The condition is false";
}

echo " ";

if($first_name == 'oleksandr' && $last_name == "Sosnovskyi") {
    echo "The condition is true";
} else {
    echo "The condition is false";
} */
 
if ($first_name == 'oleksandr' || $last_name == "sosnovskyi") {
    echo "The first condition is true";
} else if ($first_name != 'Oleksandr' && $last_name == "Sosnovskyi") {
    echo "The second condition is true";
} else {
    echo "The conditions are false";
}