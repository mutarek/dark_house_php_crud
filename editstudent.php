<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Students</h2>
    <?php 
    $student_id = $_GET['student_id'];
    $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
    $namanor_query = "SELECT * FROM student INNER JOIN course ON student.s_course = course.c_id WHERE s_id = $student_id";
    $amader_object = mysqli_query($db,$namanor_query) or die(mysqli_error());
    $amader_data = mysqli_fetch_assoc($amader_object);
    ?>
    <form class="post-form" action="functions/updatestudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="hidden" name="s_id" value="<?php echo$amader_data['s_id']; ?>" />
            <input type="text" name="sname" value="<?php echo$amader_data['s_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" value="<?php echo$amader_data['s_number']; ?>" />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="student_course">
                <option value=""selected disabled><?php echo $amader_data['c_name']; ?></option>
                <?php
                $course_query = "SELECT * FROM course";
                $result = mysqli_query($db,$course_query) or die(mysqli_error());
                if (mysqli_num_rows($result) > 0 ) {
                    while ($course =mysqli_fetch_assoc($result) ) {
                   
                ?>
                <option value="<?php echo$course['c_id']; ?>"><?php echo$course['c_name']; ?></option>
            <?php }  } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
