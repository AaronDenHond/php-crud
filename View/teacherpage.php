<?php require 'includes/header.php' ?>
<section>
    <h4>Teacher Page</h4>

    <p><a href="index.php">Back to homepage</a></p>


    <?php foreach ($allTeachers as $teacher) {
        echo '<tr>';
        echo '<td>' . $teacher->getId() . '</td>';
        echo '<br>';
        echo '<td>' . $teacher->getName() . '</td>';
        echo '<br>';
        echo '<td>' . $teacher->getEmail() . '</td>';
        echo '</tr>';
        echo '<br>';
        echo '<br>';
    }
    ?>

</section>
<?php require 'includes/footer.php' ?>