<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    My Php website
    <?php
    define ('PI', 3.14);
        echo "Hello I am from php";
        echo "<br>";
        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;

        // Arithmetic Operators 
        echo "<br>";
        echo "The value of varible1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of varible1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of varible1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of varible1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";

        // Comparison Operators
        // echo "<h1> Comparison Operators </h1>";
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        // Increment/Decrement Operators 
        // echo $variable1++;
        // echo $variable1--;
        // echo ++$variable1;
        echo --$variable1;
        echo "<br>";
        echo $variable1;

        // Logical Operator
        // and (&&)
        // or (||)
        // xor 
        // !

        // $myVar = (true and true);
        // $myVar = (false and true);
        // $myVar = (false and false);
        // $myVar = (true and false);
        // $myVar = (true or false);

        // $myVar = (true xor true);
        // $myVar = (false and true);
        // $myVar = (false xor false);
        $myVar = (true and false);
        echo "<br>";
        echo var_dump($myVar);
    ?>

    <?php
        // Data Types in PHP 
        // 1. String 
        // 2. Integer
        // 3. Float 
        // 4. Bolean 
        // 5. Array 
        // 6. Object 

        echo "<br> Data Types <br>";
        $var = "this is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.2;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        echo PI;

    ?>
</body>
</html>