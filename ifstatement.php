<?php 
    $title = "Index";
    include 'includes/header.php' 
?>


    <h1>IF-Else Statements</h1>
    <?php
        // An if statement that will carry out an action based on the value of the variable.

        echo '<h2>if Statements</h2>';

        $grade = 30 + 20;

        if($grade >= 50) {
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else {
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }

        $grade = 'A';
        // if-Else IF-Else
        if($grade == 'A') {
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
        }
        elseif ($grade == 'B') {
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        else {
            echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
        }    



    ?>
    
    <?php require 'includes/footer.php'; ?>