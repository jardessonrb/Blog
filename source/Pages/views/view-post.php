<div class="content-container">
	<div class="container-menu">
		<?php $v->layout("fragments/menu"); ?>
	</div>
	<section>
		<?php 
			if(isset($data_posts)){
				echo "<h1>Post passado por parametro</h1>";
				foreach ($data_posts as $post) {
					$v->insert("fragments/postHome", ['post' => $post]);
				}
			}
		?>
	</section>
</div>

