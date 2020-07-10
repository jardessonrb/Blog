<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
</head>
<body>
<div class="content-container">
	<div class="container-menu">
	  <?php $v->layout("fragments/menu"); ?>	
	</div>
	<?php if(isset($primaryPost)): ?>
		<div class="fragment-post">
			<div class="texts">
               <p id="legenda" class="title">Ultimo post do Blog</p>
            </div>
			<?php foreach ($primaryPost as $post): ?>
				<?php $v->insert("fragments/postHome", ['post' => $post]); ?>
			<?php endforeach; ?>
		</div>
	<?php else: ?>
		<div class="flexbox">
			<?php if(isset($data_posts)): ?>
				<?php foreach ($data_posts as $post): ?>
					<?php $v->insert("fragments/listPost", ['post' => $post]); ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="pagination">
			Paginação
		</div>
	<?php endif; ?>
</div>
</body>
</html>


