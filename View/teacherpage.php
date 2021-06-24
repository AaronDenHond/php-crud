<?php require 'includes/header.php' ?>
<section>
    <h4>Teacher Page</h4>

    <p><a href="index.php">Back to homepage</a></p>
    <form action="" method="post" id='form2'>
        <table>
            <?php
            //allStudents declared in controller! here we just echo/do simple foreach nothing else
            foreach ($allTeachers as $teacher) { ?>
                <tr>
                    <td><?php echo  $teacher->getId() ?></td>
                    <td><?php echo $teacher->getName() ?></td>
                    <td><?php echo $teacher->getEmail() ?></td>
                    
                    
                    <td><button name="delete" value="<?php echo $teacher->getId() ?>">Delete</button>
                    </td>
                    <td><button name="update" value="<?php echo $teacher->getId() ?>">Update</button>
                    </td>
                </tr>
                <?php } ?>
        </table>

 
        <p>Name: <input type="text" name="name" id="name"><br></p>
        <p>E-mail: <input type="text" name="email" id="email"><br></p>
        

    </form>
    <button type="submit" form="form2" name='create' value="create"> Create teacher </button>
</section>
<br>
<?php require 'includes/footer.php' ?>