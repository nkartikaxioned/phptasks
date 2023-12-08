<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAY TASK</title>
</head>

<body>
    <?php
    /*1) Write a script which will display the following string.
   $color = array('white', 'green', 'red', 'blue', 'black'); */

    echo '<h2>Write a script which will display the following string.
    $color = array(\'white\', \'green\', \'red\', \'blue\', \'black\');</h2>';

    $colors = array('white', 'green', 'red', 'blue', 'black');
    foreach ($colors as $color) {
        echo $color . '</br>';
    }

    //2) Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

    echo '<h2>Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.</h2>';

    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

    foreach ($ceu as $country => $capital) {
        echo "The capital of " . $country . " is " . $capital . "</br>";
    }

    //3) Write a PHP script which decodes the following JSON string.

    echo '<h2>Write a PHP script which decodes the following JSON string.</h2>' . "</br>";

   $jsonString = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }}';

   $decodedJson = json_decode($jsonString,true);
//    print_r($decodedJson);
   if($decodedJson !== null){
    foreach($decodedJson as $key => $value){
        if(is_array($value)){
            foreach($value as $keydata => $data){
                echo $keydata." : ".$data.'</br>';
            }
        } else {
            echo $key." : ".$value.'</br>';
        }
    }
   }

   /*4) Write a PHP script that inserts a new item in an array in any position. Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5 */

echo '<h2>Write a PHP script that inserts a new item in an array in any position.</h2>' . "</br>";

$numericalArray = array(1,2,3,4,5);
$randomNumber = rand(0,sizeof($numericalArray));
$addDataa = function($numericalArray, $randomNumber, $elementsRemove = 0, $itemToInsert = "%"){
    array_splice($numericalArray, $randomNumber, $elementsRemove, $itemToInsert);
    print_r($numericalArray)."</br>";
};

$addDataa($numericalArray, $randomNumber, 0, "%");

/* 5) Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays : 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output : 
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED */ 

echo '<h2>Write a PHP function to change the following array\'s all values to upper or lower case.
Sample arrays :</h2>' . "</br>";

$Colors1 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach($Colors1 as $colorKey => $colorValue){
    $Colors1[$colorKey] = strtoupper($colorValue);
};

print_r($Colors1);

/*6) Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4. */

echo '<h2>Write a PHP script to get the shortest/longest string length from an array. :</h2>' . "</br>";

$SampleArrays = array("abcd","abc","de","hjjj","g","wer");
    foreach($SampleArrays as $element){
        $maxLength = strlen($SampleArrays[0]);
        if(strlen($element) > $maxLength){
            $maxLength = strlen($element);
        }
    }
    echo 'The longest array length is '.$maxLength.'</br>';

    //7) Write a PHP function to search a specified value within the values of an associative array.

    echo '<h2>Write a PHP function to search a specified value within the values of an associative array. :</h2>' . "</br>";

    $Colors2 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

    $searchValue = function($arrays, $searchValue) {
         foreach($arrays as $arrayKey => $arrayValue){
            if(strtoupper($searchValue) == strtoupper($arrayValue)){
                return 'contains value : '.$searchValue.'</br>';
            }
         }
         return 'do not contain value : '.$searchValue.'</br>';
    };

    echo($searchValue($Colors2,"green"));

    //8)  Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.

    echo '<h2>Write a PHP script to combine (using one array for keys and another for its values) the following two arrays. :</h2>' . "</br>";

    $letters = array('a','b','c','d','e','f');
    $fruits = array('apple','mango','banana','pineapple','custardapple','plum');

    $arrayCreate = function($arrayFirst,$arraySecond){
        return array_combine($arrayFirst,$arraySecond);
    };

    $newCombinedArray = $arrayCreate($letters,$fruits);
    print_r($newCombinedArray);

    /* 9)
    Write a PHP program to create a range like the following array.
Array 
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
)
    */

    echo '<h2> Write a PHP program to create a range like the following array. :</h2>' . "</br>";

    $rangeArray = array_combine(range(20,25),range(2,7));
    print_r($rangeArray);


    //10) Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.

    echo '<h2> rite a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. :</h2>' . "</br>";

    $numberArray = range(200,250);


$sortedArray = array_filter($numberArray,function($numberArray){
         return $numberArray % 4 === 0;
});

print_r($sortedArray);

/*11) $x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
Sample Output : 
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
*/

echo '<h2> Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. :</h2>' . "</br>";

$x = array(1, 2, 3, 4, 5);

unset($x[2]);
$x = array_values($x);
print_r($x);


/*12)$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white */

echo '<h2> Write a PHP script to get the first element of the above array. :</h2>' . "</br>";

$waterColor = array(4 => 'white', 6 => 'green', 11=> 'red');

$firstElement = reset($waterColor);
echo $firstElement;

/*13) Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85, */

echo '<h2>  Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures. :</h2>' . "</br>";

$recordedTemperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// $sortLowestTemp = function($tempArray,$startValue,$endValue){
// if(is_array($tempArray)){
//     $newTempratures = array_unique($tempArray);
//     $sortedTemp = sort($newTempratures);
//     print_r($sortedTemp);
//     // print_r(array_slice($newTempratures,$startValue,$endValue));
// }else {
//     echo "Pass Valid Array";
// }

// };
// $sortLowestTemp($recordedTemperatures,0,5);

$newTempratures = array_unique($recordedTemperatures);
sort($newTempratures);
// print_r($newTempratures);
$fiveLowestTemperature = array_slice($newTempratures,0,5);
print_r($fiveLowestTemperature);
$fiveHighestTemperature = array_slice($newTempratures,-5);
// print_r($fiveHighestTemperature);

/*14) Write a PHP program to merge (by index) the following two arrays.
Sample arrays : 
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 
Expected Output :

Array  
(      
[0] => Array          
(              
[0] => w3resource              
[1] => 77              
[2] => 87          
)        
[1] => Array          
(              
[0] => com              
[1] => 23              
[2] => 45          
)    
) */

echo '<h2>  Write a PHP program to merge (by index) the following two arrays. :</h2>' . "</br>";

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 

// $combinedArray = array_merge($array1,$array2);
// print_r($combinedArray);

$mergedArray = array();

foreach ($array1 as $key => $subArray) {
    array_unshift($subArray, $array2[$key]);
    $mergedArray[] = $subArray;
}
print_r($mergedArray);
    ?>
</body>

</html>