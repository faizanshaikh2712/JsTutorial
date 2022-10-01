<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my First PHP Website <br>
<!-- Syntax -->
        <?php
        echo "Hello World";
        

    // Variable
        $variable1 = 34; 
        $variable2 = 45; 
        echo $variable1; 
        echo $variable2; 

        echo $variable1 + $variable2;


    //Operators In PHP
     
    // Arithmetic Operators
    echo "<br>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1 + $variable2;

    echo "<br>";
        echo "The value of variable1 - variable2 is ";
        echo $variable1 - $variable2;

    echo "<br>";
        echo "The value of variable1 * variable2 is ";
        echo $variable1 * $variable2;

    echo "<br>";
        echo "The value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
       

    // Assignment Operators
    echo "<br>";
    $variable3 = $variable1;
    //$variable3 += 2;
    //$variable3 -= 2;
    //$variable3 *= 2;
    $variable3 /= 2;
    echo "The new value of variable is";
    echo $variable3;
    echo "<br>";


    // Comparision Operators (Returns Boolean) (True/False)
    // var_dump dumps information about 1 or more variable
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";


    // Increment/Decrement Operators
    echo $variable1++;
    echo "<br>";
    echo $variable1;

    echo $variable1--;
    echo "<br>";
    echo $variable1;

    echo ++$variable1;
    echo "<br>";
    echo $variable1;

    echo --$variable1;
    echo "<br>";
    echo $variable1;


    // Logical Operators 
    
    //and(&&)
    $myVar = (true and true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false and true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false and false);
    echo "<br>";
    echo var_dump($myVar);


    //or(||)
    $myVar = (true or true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (true or false);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false or true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false or false);
    echo "<br>";
    echo var_dump($myVar);


    //xor
    $myVar = (true xor true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (true xor false);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false xor true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false xor false);
    echo "<br>";
    echo var_dump($myVar);

    echo "<br>";



    // DATA TYPES
    //1. String ()
    //2. Integer (Number)
    //3. Float (Decimal Number)
    //4. Boolean
    //5. Array 
    //6. Object

    //String
    $variable1 = "This is a string";
    echo var_dump($variable1);
    echo "<br>";

    $variable1 = 67;
    echo var_dump($variable1);
    echo "<br>";

    $variable1 = 67.5;
    echo var_dump($variable1);
    echo "<br>";

    $variable1 = true;
    echo var_dump($variable1);
    echo "<br>";
       

    //Constant
    define('pi', 3.14);
    echo pi;
       ?>

    </div>
</body>
</html>