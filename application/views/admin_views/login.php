<div class="container">
<div class="row">
<div class="col-md-5">
<?php if(isset($error)) echo $error; ?>
<?php echo validation_errors(); ?>
<?php echo form_open('login'); ?>
<div class="form-group">
	<label for="username">username</label>
	<input type="text" name="username" />
</div>
<div class="form-group">
	<label for="password">password</label>
	<input type="password" name="password" />
</div>
<div class="form-group">
	<input type="submit" value="login" />
</div>
</form>
</div>
</div>
</div>