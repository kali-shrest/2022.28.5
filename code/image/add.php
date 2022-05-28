<?php include 'header.php';
 include 'dbconfig.php'; 



?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="saveData.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="pname" />
        </div>
        <div class="form-group">
            <label>Catogory</label>
            <input type="text" name="pcategory"/>
        </div>
        <div class="form-group">
            <label>Action</label>
            <select name="status">
                <option value="" selected disabled>Select Acton</option>
                <?php
    $conn= mysqli_connect("localhost","root","","Grocery") or die("connection fail");
    $sql= "SELECT *FROM products";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){

        ?>

                <option value="1">Active</option>
                <?php } ?>
                <option value="2">Deactive</option>
            </select>
        </div>
        <!-- <div class="form-group"> -->
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>