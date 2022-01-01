<?php 
    $title = "Functions";
    include 'includes/header.php' 
?>


    <h1>PHP Primer Functions</h1>
    <?php

        /* Defining a Function */

        function writeMessage() {
            echo "You are a really nice person, have a nice time! <br/>";
        }

         /* Calling a Function */
         
        writeMessage();
        echo "<hr/>";
        writeMessage();

        /* Functions sith parameters */

        function addFuntion($num1, $num2) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num) {
            $num += 10;
        }

        $num = 500;
        addFuntion(10, 20);
        addFuntion(10, $num);
        addFuntion('200', '500');
        addFuntion('200', '3.14');

        changeNum($num);
        echo $num . '<br/>';

        /* Returning variables functions */

        function returnProduct($num1, $num2) {
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';

?>      

<?php require 'includes/footer.php'; ?>