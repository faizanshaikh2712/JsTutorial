<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>
</head>
       <style>
        .container{
            max-width: 80%;
            background-color: pink;
            margin: auto;
            padding: 25px;
        }
        </style>
        <body>
        <div class="container">
            <h1>lets learn about PHP</h1>
            <p>Your Party Status is Here: </p>


        <?php

        //Conditional Statement (if-else)
        $age = 34;
        if($age>18)
        {
            echo "You can go to party";
        }
        else {
            echo "You cannot go to party";
        }
        echo "<br>";

        //Conditional Statement (else-if)
        $age = 10;
        if($age>18)
        {
            echo "You can go to party";
        }
        else if($age==10) {
            echo "You are only 10 years old";
        }
        else {
            echo "You cannot go to party";
        }
        echo "<br>";

        //Arrays in PHP
        $languages = array("Python", "C++", "php", "NodeJs");

        echo $languages[0];
        echo "<br>";

        echo $languages[1];
        echo "<br>";

        echo $languages[2];
        echo "<br>";

        echo $languages[3];
        echo "<br>";

        echo count($languages); // count number of elements in array
        echo "<br>";


        //Loops in PHP (while, do-while, for, for-each)
        // while loop
       $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }

        $a = 0;
        while ($a < count($languages)) {
            echo "<br>The value of Languages is:";
            echo $languages[$a];
            $a++;
        }


        //do-while
        $a = 200;
        do {
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }
        while ($a < 10);


        //For-loop
        for ($i=0; $i < 10; $i++) { 
            echo "<br>The value of i is";
            echo $i;
        }


        //For-each Loop
        foreach ($languages as $value)
        {
            echo "<br>The value is";
            echo $value;
        }
        echo "<br>";


        // Functions in PHP
        function print5()
        {
            echo "FIVE";
        }
        print5();
        print5();
        print5();
        print5();
        print5();
        echo "<br>";

        function print_number($number)
        {
            echo "<br> Your Number is: ";
            echo $number;
        }
        print_number(45);
        print_number(13);
        print_number(42);
        print_number(64);

        ?>
    </div>
</body>
</html>