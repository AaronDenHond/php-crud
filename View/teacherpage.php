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
    <form action="" method="post" id='form1'> 
        
        Name: <input type="text" name="name" id="name"><br>
        E-mail: <input type="text" name="email" id="email"><br>
       
    </form>
    <button type="submit" form="form1" value="create"> Create teacher </button>
</section>
<?php require 'includes/footer.php' ?>