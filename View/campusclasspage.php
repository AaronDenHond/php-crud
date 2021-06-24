<?php require 'includes/header.php' ?>
<section>
    <h4>Campus Class Page</h4>

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
            <?php } ?>
        </table>


        <p>Class Name:</p> <input type="text" name="className" id="className"><br>
        <p>Location:</p> <input type="text" name="location" id="location"><br>
        
        <p>Teacher Name:</p> 
            <select name ='teacherId'>
            <?php foreach ($allTeachers as $teacher) { ?>
                <option  value ='<?php echo $teacher->getId()?>'> <?php echo $teacher->getName(); ?> </option>
            <?php } ?>
            </select>

    </form>
    <button type="submit" form="form1" name='create' > Create campus class </button>
</section>
<br>
<?php require 'includes/footer.php' ?>