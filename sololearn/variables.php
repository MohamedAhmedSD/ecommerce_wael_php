<html>
    <head>
        <title>PHP: Variables</title>
    </head>
    <body>
        <?php 
        $name = "Btoo ";
        $age = 32;
        echo $name;
        echo "<br>";
        echo $age;
        echo "<br>";
      
         /*
         * Constants are similar to variables except that they cannot be 
         * changed or undefined after they've been defined.
         * Begin the name of your constant with a letter or an underscore.
         * To create a constant, use the define() function:
         */
        //! constant inside define must be all uppercase
        define("MSG","constant is msg and this it's value");
        echo MSG;
        echo "<br>";
        $string1 = "Btoo ";
        $int1 = 50;
        $string2 = "is a boy ";
        $int2 = - 10;
        $string3 = "40";
        $string4 = "60 books"; //! it give us 110 with warning 
        $string5 = "it 60 books"; //! it give us 110 with warning 
        echo $string1.$string2;
        echo "<br>";

        echo $int1 + $int2;
        echo "<br>";

        //* we can add string to int if have good base as number
        echo $string3 + $int1;
        echo "<br>";

        echo $string4 + $int1; 
        echo "<br>";
        /* Warning: A non-numeric value encountered in 
        C:\xampp\htdocs\ecommerce\sololearn\variables.php on line 39
        110
        */

        // echo $string5 + $int1; //! Fatal error: Uncaught TypeError: Unsupported operand types: string + int in
 
        $bool =true;
        $floatOrDouble = 12.44;
        echo $bool;                 //* 1 for true && 0 for false
        echo "<br>";
        echo $floatOrDouble; 
        echo "<br>";
        /*
        * PHP variables can be declared anywhere in the script.
        * PHP's most used variable scopes are local, global.
        * A variable declared outside a function has a global scope.
        * A variable declared within a function has a local scope, 
        * and can only be accessed within that function.
        *
        */
        $test = 3;
        $test2 = 5;
        //* should function write before its name
        function getTestValue(){
            // echo $test; //! we can n't use variable out from function
            // echo $test2;//* if with same name or different name to get its value, should make 
                        //* your inner variable

            //? we can solve it by use global before variable name
            global $test;
            echo $test;
            echo "<br>";

        }
        //! not see any result??==============================
        //* call your function first
        getTestValue();
        
        $num1 = 56;
        function  my_func() {
        $num1 = 89;
        echo $num1;
        echo "<br>";
        }
        my_func(); //* it back local variable value not global
   
        /*
        * $$a is a variable that is using the value of another variable,
        * $a, as its name. The value of $a is equal to "hello". 
        * The resulting variable is $hello, which holds the value "Hi!". 
        */

        $a = "hello"; //! here it case sensetaive => hello != Hello
        $hello = "Hi";
        echo $a;
        echo "<br>";  
        echo $$a;
        ?>
</body>
</html>