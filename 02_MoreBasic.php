<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<style>
    * {
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        max-width:80%;
        background-color: rgb(222, 195, 195);
        margin:auto;
        padding: 23px;

    }
</style>

<body>
    <div class="container">
        <h1>Let's Learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php
            $age = 6;
            if($age>18){
                echo "You can go to the party";
            }
            else if($age==7){
                echo "You are 7 years old";
            }
            else if($age==6){
                echo "You are 6 years old";
            }
            else{
                echo "You can not go to the party";
            } 

            // Arrays in php
            $languages = array("Python", "C++", "php", "NodeJs"); 
            // echo count($languages);   
            // echo $languages[0]; 
            
            // Loops in PHP
            $a = 0;
            while ($a <= 10) {
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            }

             // Iterating arrays in PHP using while loop
            $a = 0;
            while ($a < count($languages)) {
                echo "<br>The value of language is: ";
                echo $languages[$a];
                $a++;
            }

             // Do while loop
            $a = 200;
            do {
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            } while ($a < 10);

            // For loop
            for ($a=60; $a < 10; $a++) { 
                echo "<br>The value of a from the for loop is: ";
                echo $a;
            }
            
            foreach ($languages as $value) {
                echo "<br>The value from foreach loop is ";
                echo $value;
            }


            function print_number($number){
                echo "<br>Your number is ";
                echo $number;
            }
            print_number(20);

            

        ?>

        <?php
            $str = "This this this";
            echo $str. "<br>";
            $lenn = strlen($str);
            echo "The length of this string is ". $lenn . ". Thank you <br>";
            echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
            echo "The reversed string is ". strrev($str) . ". Thank you <br>";
            echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
            echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
            // echo $lenn;
        ?>
    </div>
</body>
</html>