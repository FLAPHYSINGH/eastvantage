<div class="col-lg-3 col-md-6 mb-4 mt-2" id="datatable">
	<div class="card h-100">
		<img class="card-img-top" src="<?php echo WEB_IMG_PATH.$result['filename']?>" alt="">
		<div class="card-body">
			<h4 class="card-title"><?=$result['title']?></h4>
			<p class="card-text" style="text-overflow:ellipsis; max-height: 200px; overflow:hidden"><?=$result['content']?></p>
		</div>
	</div>
</div>
