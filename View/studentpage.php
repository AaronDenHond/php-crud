<?php require 'includes/header.php' ?>
<section>
    <h4>Student Page</h4>

    <p><a href="index.php">Back to homepage</a></p>
    <table>
        <?php
        //allStudents declared in controller! here we just echo/do simple foreach nothing else
        foreach ($allStudents as $student) { ?>
            <tr>
                <td><?php echo  $student->getId() ?></td>
                <td><?php echo $student->getName() ?></td>
                <td><?php echo $student->getEmail() ?></td>
                <td><?php echo $student->getClassId() ?> </td>

                <td><button name="delete" id="delete" value="<?php echo $student->getId()?>">Delete</button>
                </td>
                <td><button name="update" value="<?php echo $student->getId()?>">Update</button>
                </td>
            </tr>
            <?php } ?>;
    </table>
    <form action="" method="post" id='form1'>

        Name: <input type="text" name="name" id="name"><br>
        E-mail: <input type="text" name="email" id="email"><br>
        Class ID: <input type="number" name="classId" id="classId"><br>

    </form>
    <button type="submit" form="form1" value="create"> Create student </button>



</section>
<?php require 'includes/footer.php' ?>