<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Course</h2>
    <?php 
    $course_id = $_GET['courseid'];
    $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
    $my_query = "SELECT * FROM course WHERE c_id = $course_id";
    $course_object = mysqli_query($db,$my_query) or die(mysqli_error());
    $course_data = mysqli_fetch_assoc($course_object);

    ?>
    <form class="post-form" action="functions/addcoursedata.php" method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="cname" value="<?php echo$course_data['c_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="c_trainer">
                <option value=""selected disabled>Select Trainer</option>
                <?php
                 $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());
                 $fetch_query = "SELECT * FROM trainer";
                 $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
                 while ($trainer = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $trainer['t_id']; ?>"><?php echo $trainer['t_name']; ?></option>
            <?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Course Price</label>
            <input type="number" name="cprice" value="<?php echo$course_data['c_price'] ?>" />
        </div>
         <div class="form-group">
            <label>Course Durations</label>
            <input type="number" name="cduration" value="<?php echo$course_data['c_duraion'] ?>"/>
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
