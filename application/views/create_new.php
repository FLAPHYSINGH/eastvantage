<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2 mx-auto">
				<form id="form_submit" method="POST" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for="newsTitle">Title</label>
					<input type="text" class="form-control" id="newsTitle" placeholder="Awesome Title" name="title" required>
				</div>
				<div class="form-group">
					<label for="newContent">Content</label>
					<textarea class="form-control" id="newContent" rows="15" name="content" required></textarea>
				</div>
				<div class="form-group">
					<label for="newContent">Content Type</label>
					<select class="form-control" id="contentType" name="type">
						<option value="government">Government</option>
						<option value="food">Food</option>
						<option value="sports">Sports</option>
						<option value="places">Places</option>
					</select>
				</div>

					<div class="form-group">
						<div class="custom-file">
							<input type="file" id="validatedCustomFile" name="file">
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
						</div>
					</div>
					<!--<div class="form-group">
						<div class="form-group">
							<input type="file" id="validatedCustomFile1" class="form-control" name="file">
							<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
						</div>
					</div>-->
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
				<a class="btn btn-outline-danger" href="<?=WEB_URL?>/index">Cancel</a>
			</form>
		</div>
	</div>
</div>
<div>
	<br><br><br>
</div>
