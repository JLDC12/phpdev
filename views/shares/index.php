<div>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php foreach($viewModel as $item): ?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr>
			<p><?php echo $item['body']; ?></p>
			<a class="btn btn-default"  href="<?php echo $item['link']; ?>" target="_blank">Show Details</a>
		</div>
	<?php endforeach; ?>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Add Share</h3>
	</div>
	<div class="panel-body">
		<form>
			<div class="form-group">
				<label>Share Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
		</form>
	</div> 
</div>