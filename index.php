<?php
/**
 * Array
*/
$infoUser = array(
    'Mitchel',
    'Meskes',
    's1205722',
    's1205722@student.windesheim.nl',
    'Almere',
    '20',
);

/**
 * Multidimensional Array
 */
$infoAllUsers = [
    ['Mitchel','Meskes','s1205722','s1205722@student.windesheim.nl','Almere','20'],
    ['Renas','khalil','s1149006','s1149006@student.windesheim.nl','Almere','21'],
    ['Sadek','Al mouaswi','s1192769','s1192769@student.windesheim.nl','Almere','21']
];

/**
 * for-loop
 */
for ($row = 0; $row < count($infoAllUsers); $row++) { 
    for ($col = 0; $col < 6; $col++) { 
        echo '<br>' . $infoAllUsers[$row][$col] . '<br>';
    }
}

/**
 * foreach-loop
 */
$classmateInfo = [
    "Student 1" => [
        "name" => "Mitchel Meskes",
        "age" => "20",
        "studentnumber" => "s1205722",
        "email" => "s1205722@student.windesheim.nl",
    ],
    "Student 2" => [
        "name" => "Renas khalil",
        "age" => "23",
        "studentnumber" => "s1149006",
        "email" => "s1149006@student.windesheim.nl",
    ],
    "Student 3" => [
        "name" => "Sadek Al mouaswi",
        "age" => "21",
        "studentnumber" => "s1192769",
        "email" => "s1192769@student.windesheim.nl",
    ]
];
 
// Printing all the keys and values one by one
$keys = array_keys($classmateInfo);
for($i = 0; $i < count($classmateInfo); $i++) {
    echo $keys[$i] . "<br>";
    foreach($classmateInfo[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}

/**
 * Haal de presentatie van een variabele binnen
 */
