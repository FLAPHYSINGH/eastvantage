<div class="container">
	<?php $this->load->view('message_view');?>
	<div class="row text-center">
		<?php if (empty($blogs)) { ?>
			<header class="jumbotron mt-4 mx-auto mb-12">
				<h1 class="display-3">Oops no entry for this type!</h1>
				<a class="btn btn-primary btn-lg mt-4" href="<?=WEB_URL?>/index/create">Create Article</a>
			</header>
		<?php } ?>
		<?php foreach ($blogs as $blog) { ?>
			<div class="col-lg-3 col-md-6 mb-4 mt-2" id="datatable">
				<div class="card h-100">
					<img class="card-img-top" src="<?php echo WEB_IMG_PATH.$blog['filename']?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><?=$blog['title']?></h4>
						<p class="card-text" style="text-overflow:ellipsis; max-height: 200px; overflow:hidden"><?=$blog['content']?></p>
					</div>
					<div class="card-footer">
						<a href="<?=WEB_URL?>/index/getDetails/<?=$blog['id']?>" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
		<?php } ?>
		<p><?php echo $links; ?></p>
	</div>
</div>
