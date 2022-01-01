<?php 
    $title = "While Do Loop";
    include 'includes/header.php' 
?>

    <h1>While Loop</h1>
    <?php
        $grade = 0;
        // Infinite loop.
        // while($grade < 10) {
        //     echo '<p>I AM LESS THAN 10!</p>';
        // }
        // Pre condition Loop
        while($grade < 10) {
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP!';
    ?>

    

    <h1>DO-While Loop</h1>
    <?php
        // Post condition Loop
        $grade = 0;
        do {
            echo '<p>I AM DO WHILE LOOP</P>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
    ?>

<?php require 'includes/footer.php'; ?>