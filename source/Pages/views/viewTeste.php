<!--<script type="text/javascript" src="<?= url("/source/pages/assets/jquery3.4.1.js") ?>"></script>
<div class="content-container">
    <div class="content">
        <form id="formCadastroContact" action="<?= $router->route("testeController.create") ?>" method="POST" enctype="multipart/form-data">
            Titulo: <input id="titulo" name="titulo"><br>
            Foto:   <input type="file" id="foto" name="foto"><br>
            E-mail: <input id="email" name="email"><br>
            <input type="submit" value="Cadastrar"/>
        </form>
    </div>
</div>

<script type="text/javascript">
	$(function(){
		$("#formCadastroContact").submit(function(e){
			e.preventDefault();

			var form = $('#formCadastroContact');
			var formData = new FormData(document.getElementById("formCadastroContact"));			
			$.ajax({
	            type: 'POST',
	            url: form.attr('action'),
	            data: formData,
	            contentType: false,
	            cache: false,
	            processData:false,
				beforeSend: function(){
					alert(form.attr("action"));
				},
				success: function(mensage){
					alert("testando: "+mensage);
					if(mensage == 1){
						alert("Cadastrado com sucesso!");
					}else{
						alert("Não fi possivel cadastrar!");
					}
				},
				complete: function(){
					//alert("Complete");
				}
			});
		});
    })
</script>-->

<?php  
//namespace Source\Pages\Views;

// use Source\Models\classEmail;


// $obj = new classEmail();

// echo $obj->submitEmail();
?>