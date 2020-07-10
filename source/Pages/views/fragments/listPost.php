<link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-list-post.css") ?>">
<div class="container-content-list">
	<div class="container-list">
		<?php 
		$img = $post['month_image'].'/'.$post['name_image'];
		$id_post = $post['id_post'];
		$previewContent = substr($post['content_post'], 0, 70)."...ler mais.";
		?>
		<div class="preview">
			<a href="<?= url("view-post/$id_post") ?>">
				<?php echo utf8_encode($post['title_post']); ?>
			</a>

			<a href="<?= url("view-post/$id_post") ?>">
				<img class="images" src="<?= url("/source/Images/$img") ?>">
			</a>
			
			<div class="content-list-limit">
				<p><?php echo  utf8_encode($previewContent);?></p>
			</div>
		</div>
	</div>
</div>

