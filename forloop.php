<?php 
    $title = "Forloop";
    include 'includes/header.php' ?>


    <h1>FOR Loops Statements</h1>

    <?php
        // For Loops
        for($count = 0; $count < 10; $count++) {
            echo '<p>Hello Dami!!</p>';
        }

        for($count = 0; $count < 10; $count++) {
            echo "<p>The Count is: $count </p>";
        }
    ?>
<?php require 'includes/footer.php'; ?>