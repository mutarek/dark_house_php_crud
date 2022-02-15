<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Student</h2>
    <?php 
    $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
    $fetch_query = "SELECT * FROM student INNER JOIN course ON student.s_course = course.c_id 
    INNER JOIN trainer ON student.s_trainer = trainer.t_id";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
        # code...
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Course</th>
        <th>Trainer</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while ($student = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $student['s_id']; ?></td>
                <td><?php echo $student['s_name']; ?></td>
                <td><?php echo $student['s_number']; ?></td>
                <td><?php echo $student['c_name']; ?></td>
                <td><?php echo $student['t_name']; ?></td>
                <td>
                    <a href="editstudent.php?student_id=<?php echo $student['s_id']; ?>">Edit</a>
                    <a href="deletestudent.php?s_id=<?php echo $student['s_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>
