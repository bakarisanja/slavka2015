<div class="container" style="margin-top:100px">
<div class="row">
<div class="col-md-4">
<form role="form" action="insertProduct" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="product_name">Product name</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label for="product_about"> product about</label>
    <textarea class="form-control" rows="3" name="product_about"></textarea>
  </div>
  <input type="file" name="product_image" id="fileToUpload">
  <input type="hidden" name="category" value=<?php echo $category; ?>>
  <button type="submit" class="btn btn-default">Insert</button>
</form>
</div>
<div class="col-md-8" style="float:left">
<?php
echo "<table class='table table-striped'>";
echo"     
<tr>
    <td>priduct id</td>
    <td>product name</td> 
    <td>product about</td>
    <td>product image</td>
</tr>
    ";

echo "</table>";

?>
<?php
  echo $category;
?>
</div>
</div>
</div>