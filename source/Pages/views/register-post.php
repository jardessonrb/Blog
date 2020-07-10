<script type="text/javascript" src="<?= url("/vendor/alertifyjs/alertify.js") ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= url("/vendor/alertifyjs/css/alertify.css") ?>">
<script type="text/javascript" src="<?= url("/source/pages/assets/jquery3.4.1.js") ?>"></script>
<script type="text/javascript" src="<?= url("/source/pages/assets/functions.js") ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/global.css") ?>">
<div class="container-menu">
	<?php $v->layout("fragments/menu"); ?>
</div>
<div class="container-content-contact">
	<div class="content">
		<form id="formCreatePost" method="POST" action="<?= $router->route("postController.createPost") ?>" enctype="multipart/form-data">
			<div class="title-contact">
				<p>Registrar novo post</p> 
			</div>
			<div class="group-input">
				<label class="style-label">Titulo do post</label>
				<input required=""  name="title_post" class="style-input" 
						placeholder="Digite seu nome...">
				</input>
				<select class="style-select" name="id_category">
					<option value="0">Selecione uma categoria</option>
					<option value="1">Programação</option>
					<option value="2">Futebol</option>
					<option value="3">Capoeira</option>
					<option value="4">Notícias</option>
				</select>
				<label class="style-label">Foto do post</label>
				<input type="file" required=""  name="photo_post" class="style-input">
				 </input>
				<label class="style-label">Conteúdo do post</label>
				<textarea required=""  name="content_post" class="style-textarea" 
							placeholder="Digite sua mensagem">
				</textarea>
			</div>
			<div class="group-button">
				<button type="submit" class="style-button">Cadastrar New Post</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#formCreatePost").submit(function(e){
			e.preventDefault();

			var form = $('#formCreatePost');
			var formData = new FormData(document.getElementById("formCreatePost"));		

			$.ajax({
	            type: 'POST',
	            url: form.attr('action'),
	            data: formData,
	            contentType: false,
	            cache: false,
	            processData:false,
				success: function(mensage){
					alert("testando: " +mensage);
					if(mensage == 2){
						alertify.success("Cadastrado com sucesso!");
					}else{
						alertify.error("Não foi possivel cadastrar!");
					}
				}
			});
		});
    })
</script>
	