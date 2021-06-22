<?php require 'includes/header.php' ?>
<section>
    <h4>Campus Class Page</h4>

    <p><a href="index.php">Back to homepage</a></p>
    <?php 
    
    foreach ($allClasses as $campusclass) {

        echo '<tr>';
        echo '<td>' . $campusclass->getClassId() . '</td>';
        echo '<br>';
        echo '<td>' . $campusclass->getClassName() . '</td>';
        echo '<br>';
        echo '<td>' . $campusclass->getLocation() . '</td>';
        echo '<br>';
        echo '<td>' . $campusclass->getTeacherId() . '</td>';
        echo '</tr>';
        echo '<br>';
        echo '<br>';
    }; ?>
   
</section>
<?php require 'includes/footer.php' ?>