<?php include 'header.php';


if(isset($_POST['deletebtn'])){
$pname = $_POST['products_name'];
$conn= mysqli_connect("localhost","root","","Grocery") or die("connection fail");
$sql= "DELETE *FROM products WHERE products_name = {$pname}";
$result=mysqli_query($conn,$sql);


header("location: crud.php");
 mysqli_close($conn);
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>NAME</label>
            <input type="text" name="products_name" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>