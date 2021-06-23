<?php require 'includes/header.php' ?>
<section>
    <h4>Campuss Class Page</h4>

    <p><a href="index.php">Back to homepage</a></p>
    <form action="" method="post" id='form1'>
        <table>
            <?php
            //allStudents declared in controller! here we just echo/do simple foreach nothing else
            foreach ($allClasses as $campusclass) { ?>
                <tr>
                    <td><?php echo $campusclass->getClassId() ?></td>
                    <td><?php echo $campusclass->getClassName() ?></td>
                    <td><?php echo $campusclass->getLocation() ?></td>
                    <td><?php echo $campusclass->getTeacherId() ?> </td>
                    
                    <td><button name="delete" value="<?php echo $campusclass->getClassId() ?>">Delete</button>
                    </td>
                    <td><button name="update" value="<?php echo $campusclass->getClassId() ?>">Update</button>
                    </td>
                </tr>
                <?php } ?>;
        </table>


        Class Name: <input type="text" name="className" id="className"><br>
        Location: <input type="text" name="location" id="location"><br>
        teacherId: <input type="number" name="teacherId" id="teacherId"><br>

    </form>
    <button type="submit" form="form1" name='create' value=""> Create campus class </button>
</section>
<?php require 'includes/footer.php' ?>