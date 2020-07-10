<link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-post-home.css") ?>">
<div class="container-post-home">
	<div class="container-flex">
		<div class="dateCreate">
			<h1>Data de postagem</1>
			<h2><?php echo substr($post['dateCreate_post'], 0, 10); ?></h2>
		</div>
		<div class="title-post">
			<h3><?php echo utf8_encode($post['title_post']); ?></h3>
		</div>
		<div class="image-post">
			<?php $nameImage = $post['month_image'].'/'.$post['name_image']; ?>
			<img src="<?php echo url("/source/Images/$nameImage") ?>">
		</div>
		<div class="text-post">
			<div class="content-text-post">	
				<p><?php echo utf8_encode($post['content_post']); ?></p>
			</div>
		</div>
	</div>
</div>
