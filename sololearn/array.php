<html>
    <head>
        <title>PHP: Array</title>
    </head>
    <body>
        <?php 
        //* [Indexed Array]
        /*
         * Numeric Arrays
         * Numeric or indexed arrays associate a numeric index with their values.
         * The index can be assigned automatically (index always starts at 0), like this:
         * You can have integers, strings, and other data types together in one array.

         */
        
        $names = array("David", "Amy", "John");
        //* As an alternative, you can assign your index manually.
        $names[3] = "Don";
        $names[4] = "Ahmed";
        $names[5] = "Jonathan";
        $names[6] = "is";
        $names[7] = 21;
        $names[8] = "he know PHP";

        echo $names[4];
        echo "<br>";
        echo "$names[4] is $names[7] and $names[8]";
        echo "<br>";
        echo "$names[2] is 30 and $names[8]";
        echo "<br>";


        //* Associative Arrays
        /*
         *  Associative arrays are arrays that use named keys that you assign to them.
         * There are two ways to create an associative array:
         */
        $people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
        // or
        $people2 = array();
        $people2['David'] = "27";
        $people2['Amy'] = "21";
        $people2['John'] = "42";

        echo $people["Amy"];
        echo "<br>";


        //* Multi-Dimensional Arrays
        /*
        * A multi-dimensional array contains one or more arrays.
        * The dimension of an array indicates the number of indices you would need to select an element.
        * - For a two-dimensional array, you need two indices to select an element
        * - For a three-dimensional array, you need three indices to select an element
        * Arrays more than three levels deep are difficult to manage. 
         */

         //! Let's create a two-dimensional array that contains 3 arrays:
         //? key == string & value == array

        $people3 = array(
            'online'=>array('David', 'Amy'),
            'offline'=>array('John', 'Rob', 'Jack'),
            'away'=>array('Arthur', 'Daniel')
         );
         /*
          * Now the two-dimensional $people array contains 3 arrays, and it has two indices: 
          * row and column.
          * To access the elements of the $people array, we must point to the two indices. 
        */

        echo $people3["online"][1];
        echo "<br>";
        echo $people3["away"][0];
        echo "<br>";

        $cars = array (
            'BMW' => array('X5', 'red', '2013'),		
            'AUDI' => array ('A4', 'white', '2008')        
          );
        echo $cars["BMW"][1];
        echo "<br>";

        $array[0] = "the mall";
        $array[1] = "David";
        $array[2] = "brother";
        $array[3] = "the store";
        $array[4] = "Rob";
        echo "$array[1] went to $array[3]";

        ?>

</body>
</html>