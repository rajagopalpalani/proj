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
<div class="admin-home height">

</div>
<div class="add height">
<h1>Add</h1>
<div class="addform">
<?php  ?>
<form action="admin.php" method="post" enctype="multipart/form-data">
  <p>Product Name : <input name="productname" id="productname" type="text"/></p>
  <p>Product City : <input name="productcity" id="productcity" type="text"/></p>
  <p>Product Date : <input name="productdate" id="productdate" type="date"/></p>
  <p>Image : <input name="productimage" id="productimage" type="file" /></p>
  <input type="submit" name="add-submit" value="Add" />
</form>

</div>
</div>
<div class="modify height"></div>
<div class="view height"></div>
</body>
</html>
