<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-md-5">
    <?php echo validation_errors(); ?>
			<form role="form" action="addCat" method="post">
				<div class="form-group">
    				<label for="category_name">category name</label>
    				<input type="text" class="form-control" name="category_name">
  				</div>
  				<div class="form-group">
    				<label for="category_about">category about</label>
    				<input type="text" class="form-control" name="category_about">
  				</div>
  				<button type="submit" class="btn btn-default">Insert</button>
			</form>
		</div>
    <div class="col-md-7">
      <?php
    echo "<table class='table table-striped'>";
    echo"     
    <tr>
        <td>category id</td>
        <td>category name</td> 
        <td>category about</td>
    </tr>
    ";
    for($i = 0; $i < count($categorys); $i++){
    echo"     
  <tr>
  <form action='update_delete' method='post'>
    <td>".$categorys[$i]->category_id."</td>
    <td><input type='text' name='category_name' value='".$categorys[$i]->category_name."'></td> 
    <td><input type='text' name='category_about' value='".$categorys[$i]->category_about."'></td>
    <input type='hidden' name='category_id' value='".$categorys[$i]->category_id."'>
    <td><button type='submit' name='update' class='btn btn-default'>update</button></td>
    <td><button type='submit' name='delete' class='btn btn-default'>delete</button></td>
  </form>
  </tr>
    ";
    }
  echo "</table>";
  ?>
    </div>
	</div>
</div>