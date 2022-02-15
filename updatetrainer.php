<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Trainer</h2>
    <?php 
    $trainer_id = $_GET['t_id'];
    $db = mysqli_connect("localhost","root","","dark_house") or die(mysqli_error());

    $getdata = "SELECT * FROM trainer WHERE t_id =$trainer_id ";
    $currentobject = mysqli_query($db,$getdata) or die(mysqli_error());
    $currentdata = mysqli_fetch_assoc($currentobject);
    ?>
    <form class="post-form" action="functions/updatetrainerdata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="tid" value="<?php echo$currentdata['t_id'] ?>" />
            <input type="text" name="tname" value="<?php echo$currentdata['t_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="number" name="tnumber" value="<?php echo$currentdata['t_number'] ?>"/>
        </div>
        <div class="form-group">
            <label>Date Of Birth</label>
            <input type="Date" name="tdob" value="<?php echo$currentdata['t_dob'] ?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="taddress" value="<?php echo$currentdata['t_address'] ?>"/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
