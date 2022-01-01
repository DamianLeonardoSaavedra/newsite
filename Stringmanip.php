<?php 
    $title = "String Manipulation";
    include 'includes/header.php' 
?>



    <h1>PHP String Manipulation</h1>

    <?php
    //Concatenation of Strings
        $phrase1 = "Student to came late";
        $phrase2 = "In class, stand with Rock";
        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br/>';

        echo '<hr/>';
        // String Transformation
        $name = "damian saavedra";

        echo 'Uppercase first letter : ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: ' . strtoupper($name).'<br/>';
        echo 'Lower case: ' . strtolower('THIS WAS ALL UPPERCASE!!').'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>';

        echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';

        //Returns position
        echo 'Get position of string: ' . strpos($name, 'v').'<br/>';

        //echo 'Get position of the string: ' . strpos($conbine, 'z') . '<br/>';
        echo 'Find character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find character "e": ' . strchr($name, 'e').'<br/>';

        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>'; 

    ?>
    
    <?php require 'includes/footer.php'; ?>