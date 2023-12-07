<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONTROL TASK</title>
</head>

<body>
    <?php

    // 1) Write a program to count 5 to 15 using PHP loop ?

    echo "<h2>Write a program to count 5 to 15 using PHP loop :</h2>" . "</br>";

    $countNumbers = function ($minNumber, $maxNumber) {
        for ($i = $minNumber; $i <= $maxNumber; $i++) {
            echo "$i ";
        }
    };

    $countNumbers(5, 15);

    //2) Write a factorial program using for loop in php

    echo "<h2>Write a factorial program using for loop in php :</h2>" . "</br>";

    $factorial = function ($number) {
        $factnumber = 1;
        while ($number > 1) {
            $factnumber *= $number--;
        }
        echo $factnumber . "</br>";
    };

    $factorial(5);

    //3) Write a program to create Chess board in PHP using for loop

    echo "<h2>Write a program to create Chess board in PHP using for loop :</h2>" . "</br>";

    echo '<table width="240px" border="1px">';

    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($column = 1; $column <= 8; $column++) {
            $sum = $row + $column;
            if ($sum % 2 == 0) {
                echo "<td height=30px width=30px bgcolor=#FFF></td>";
            } else {
                echo "<td height=30px width=30px bgcolor=#000></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";

    //4) Write a Program to create given pattern with * using for loop
    echo "<h2>Write a Program to create given pattern with * using for loop :</h2>" . "</br>";

    $starpattern = function ($input_number) {
        for ($i = 1; $i <= $input_number; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "</br>";
        }
    };

    $starpattern(6);

    //5) Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.

    echo '<h2>Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag. :</h2>' . "</br>";

    echo '<table border="1px" cellpadding="3px">';
    for ($row = 1; $row <= 6; $row++) {
        echo '<tr>';
        for ($column = 1; $column <= 5; $column++) {
            $total = $row * $column;
            echo "<td>" . "$row * $column = $total" . "</td>";
        }
        echo '</tr>';
    }
    echo "</table>";

    //6) Write a PHP program to print alphabet pattern 'P'.

    echo '<h2>Write a PHP program to print alphabet pattern \'P\'.'."</br>"."</br>";

    function printLetter()
    {
        for ($i = 1; $i <= 7; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                if ($i == 1 && $j <= 4 || $i <= 4 && $j == 4 || $i == 4 && $j <= 4 || $i <= 7 && $j == 1) {
                    echo "*";
                } else {
                    echo '&nbsp;&nbsp;';
                }
            }
            echo "</br>";
        }
    };

    printLetter();
    ?>
</body>

</html>