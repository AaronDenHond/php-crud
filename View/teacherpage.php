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
    <form action="" method="post">
        ID: <input type="text" name="id"><br>
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</section>
<?php require 'includes/footer.php' ?>