<html>
<head>
<title>Admin Portal</title>
<style>
.height{
min-height:400px;
}
</style>
</head>
<body>
<?php include('config.php'); ?>
<div class="admin-home height">
</div>
<div class="add height">
<h1>Add</h1>
<div class="addform">
<?php
if($_POST['add-submit']){
$productname = $_POST['productname'];
$productcity = $_POST['productcity'];
$productdate = $_POST['productdate'];
$productimage = file_get_contents($_FILES['productimage']['tmp_name']);
$productimage = mysql_real_escape_string($productimage);
$sql="Insert into project (productname,productcity,productimage,productdate) VALUES ('$productname','$productcity','$productimage','$productdate')";
$addproduct = mysql_query($sql,$link);
if($addproduct){
echo "<script>alert('Added Successfully');</script>";
}else{
echo "<script>alert('Failed to Added');</script>";
}
mysql_close($link);
}
 ?>
<form action="admin.php" method="post" enctype="multipart/form-data">
<p>Product Name : <input name="productname" id="productname" type="text"/></p>
<p>Product City : <input name="productcity" id="productcity" type="text"/></p>
<p>Product Date : <input name="productdate" id="productdate" type="date"/></p>
<p>Image : <input name="productimage" id="productimage" type="file" /></p>
<input type="submit" name="add-submit" value="Add" />
</form>
</div>
</div>
<div class="modify height">
<h1>Edit Details</h1>
<div class="editform">
<?php
if($_POST['edit-submit']){
$productname = $_POST['productname'];
$productcity = $_POST['productcity'];
$productdate = $_POST['productdate'];
$productimage = file_get_contents($_FILES['productimage']['tmp_name']);
$productimage = mysql_real_escape_string($productimage);
$sql="Update project (set productname = $productname,productcity = $productcity,productimage = $productimage,productdate = $productdate)";
$editproduct = mysql_query($sql,$link);
if($editproduct){
echo "<script>alert('Updated Successfully');</script>";
}else{
echo "<script>alert('Failed to Added');</script>";
}
mysql_close($link);
}
 ?>
<form action="admin.php" method="post" enctype="multipart/form-data">
<p>Product Name : <input name="productname" id="productname" type="text" value=""/></p>
<p>Product City : <input name="productcity" id="productcity" type="text" value=""/></p>
<p>Product Date : <input name="productdate" id="productdate" type="date" value="" /></p>
<p>Image : <input name="productimage" id="productimage" type="file" /></p>
<input type="submit" name="edit-submit" value="Update" />
</form>
</div>

</div>
<div class="view height"></div>
</body>
</html>
