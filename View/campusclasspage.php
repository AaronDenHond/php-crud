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

<form action="" method="post">
        
        Name: <input type="text" name="className" id="className"><br>
        Location: <input type="text" name="location" id="location"><br>
        Teacher ID: <input type="number" name="teacherId" id="teacherId"><br>
        <input type="submit">
    </form>
   
</section>
<?php require 'includes/footer.php' ?>