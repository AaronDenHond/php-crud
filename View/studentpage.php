<?php require 'includes/header.php' ?>
<section>
    <h4>Student Page</h4>

    <p><a href="index.php">Back to homepage</a></p>
    <div><?php
    //allStudents declared in controller! here we just echo/do simple foreach nothing else
    foreach ($allStudents as $student) {
                echo '<tr>';
                echo '<td>' . $student->getId() . '</td>';
                echo '<br>';
                echo '<td>' . $student->getName() . '</td>';
                echo '<br>';
                echo '<td>' . $student->getEmail() . '</td>';
                echo '</tr>';
                echo '<br>';
                echo '<br>';
            }

            ?>
    </div>

</section>
<?php require 'includes/footer.php' ?>