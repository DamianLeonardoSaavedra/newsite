<?php 
    $title = "Index";
    include 'includes/header.php' 
?>

    <!-- Basic HTML      -->
    <h1>Hello World! - PHP Primer</h1>
    <br/>
    <?php
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second line';
    
        // variables
        $name = 'Damian Saavedra';
        $age = 41;
        echo '<br/>';
        // Printing using echo
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My Name is: '.$name.' </h1>';
        echo "<h1>My Age is: $age </h1>";
    ?> 

    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" class="btn btn-danger">Heroku.com</a>

    <?php require 'includes/footer.php'; ?>



