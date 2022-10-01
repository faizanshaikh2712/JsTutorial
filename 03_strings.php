<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <?php
    //String
    $str = "This is a String";
    echo $str . "<br>";
    $length = strlen($str);
    echo "The lenght of String is: ";
    echo $length;
    echo "<br>";
    echo "The number of words in the String is: " . str_word_count($str);
    $variable1 = true;
    echo var_dump($variable1);
    echo "<br>";
    echo "The reverse of String is: " . strrev($str);
    echo "<br>";
    echo "Search for is word is in " . strpos($str, "is");
    ?>
</body>
</html>