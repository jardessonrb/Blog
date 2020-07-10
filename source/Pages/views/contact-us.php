<script type="text/javascript" src="<?= url("/vendor/alertifyjs/alertify.js") ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= url("/vendor/alertifyjs/css/alertify.css") ?>">
<script type="text/javascript" src="<?= url("/source/pages/assets/jquery3.4.1.js") ?>"></script>
<script type="text/javascript" src="<?= url("/source/pages/assets/functions.js") ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-contact.css") ?>">
<div class="container-menu">
	<?php $v->layout("fragments/menu"); ?>
</div>
<div class="container-content-contact">
	<div class="content">
		<form id="formCreateContact" method="POST" action="<?= $router->route("contactController.create") ?>">
			<div class="title-contact">
				<p>Entre em contato conosco !</p> 
			</div>
			<div class="group-input">
				<label class="style-label">Nome</label>
				<input required=""  name="contact_name" class="style-input" 
						placeholder="Digite seu nome...">
				</input>
				<label class="style-label">E-mail</label>
				<input type="email" required=""  name="contact_email" class="style-input"
				  		placeholder="Digite seu melhor e-mail...">
				 </input>
				<label class="style-label">Mensagem</label>
				<textarea required=""  name="contact_message" class="style-textarea" 
							placeholder="Digite sua mensagem">
				</textarea>
			</div>
			<div class="group-button">
				<button type="submit" class="style-button">Enviar</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#formCreateContact").submit(function(e){
			e.preventDefault();

			var form = $('#formCreateContact');
			$.ajax({
				url: form.attr("action"),
				data: form.serialize(),
				type: "POST",
				datatype: "json",
				success: function(message){
					if(message == 1){
						alertify.success("Mensagem Enviado");
						resetForm("#formCreateContact");
					}else{
						
						alertify.error("Falha no envio \n Verifique seu E-mail!");
					}
				}
	
			});
		});
    })
</script>



