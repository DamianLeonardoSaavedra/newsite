<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php'
?>

    <h1> <?php echo $title?> </h1>
    <?php
    // a variable
        $num = 3;

        // a array
        // Only one datatype is stored 'Homogenous array'
        $numbers = array(1,2,3,4,5,6,7,8,9,101,11,12,13,14,15,16);
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
        
    ?>
<?php require 'includes/footer.php'; ?>