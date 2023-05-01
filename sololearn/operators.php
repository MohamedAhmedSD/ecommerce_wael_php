<html>
    <head>
        <title>PHP: Operators</title>
    </head>
    <body>
        <?php 
        //* [Arithmetic Operators]
        $num1 = 8;
        $num2 = 6;
     
        echo "<br>";
        echo $num1 + $num2;
        echo "<br>";
        echo $num1 - $num2;
        echo "<br>";
        echo $num1 * $num2;
        echo "<br>";
        echo $num1 / $num2;
        echo "<br>";
        echo $num1 % $num2;
        echo "<br>";
        echo $num1/ 2;
        echo "<br>";

        echo "======================================";
        echo "<br>";


        //* Increment & Decrement
        /*
         * $x++; // equivalent to $x = $x+1;
         * $x--; // equivalent to $x = $x-1;  
         * 
         * $x++; // post-increment 
         * $x--; // post-decrement 
         * ++$x; // pre-increment 
         * --$x; // pre-decrement
         * 
         * $a  = 2; $b = $a++; // $a=3,  $b=2
         * $a  = 2; $b = ++$a; // $a=3,  $b=3
         */
        $a  = 2; $b = $a++;
        echo $a;        //3
        echo "<br>";
        echo $b;        //2
        echo "<br>";
        echo "======================================";
        echo "<br>";

        $a  = 2; $b = ++$a;
        echo $a;        //3
        echo "<br>";
        echo $b;        //3
        echo "<br>";

        echo "======= [ minus ] ========";
        echo "<br>";

        $a  = 2; $b = $a--;
        echo $a;        //1
        echo "<br>";
        echo $b;        //2
        echo "<br>";
        echo "======================================";
        echo "<br>";

        $a  = 2; $b = --$a;
        echo $a;        //1
        echo "<br>";
        echo $b;        //1
        echo "<br>";

 
        //* [Assignment Operators]
        $x = 50;
        $x += 100;
        echo $x;
        echo "<br>";
        $a = 7; $b = 3; 
        $a += $b;
        echo $a;



        //* [Comparison Operators]
        /*
        * Comparison operators compare two values (numbers or strings).
        * Comparison operators are used inside conditional statements, 
        * and evaluate to either TRUE or FALSE.

        * ==, === , != , <>, !==, >, >= , <, <=
        */



        //* [Logical operators]
        /*
         * Logical operators are used to combine conditional statements. 
         * and , &&, or, ||, xor
         */

        ?>

</body>
</html>