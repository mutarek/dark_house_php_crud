<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Available Course</h2>
    <?php 
    $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
    $fetch_query = "SELECT * FROM course INNER JOIN trainer ON course.c_trainer = trainer.t_id ORDER BY c_id";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Course</th>
         <th>Price</th>
        <th>Trainer</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while ($course = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td><?php echo $course['c_id']; ?></td>
                <td><?php echo $course['c_name']; ?></td>
                <td><?php echo $course['c_price']; ?></td>
                <td><?php echo $course['t_name']; ?></td>
                <td>
                    <a href="updatecourse.php?courseid=<?php echo $course['c_id']; ?>">Update</a>
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
