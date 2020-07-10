<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-erro.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("/source/pages/assets/fontawesome/css/all.css") ?>">
</head>
<body>
<div class="content-container">
	<div class="content">
		<div class="animation">
			<img src="<?= url("/source/pages/assets/image-erro.png") ?>">
			<div class="errorcode">
				<h1>Erro <?= $Error; ?></h1>
				<span><a href="<?= url("")?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Home</a></span>
			</div>
		</div>
	</div>
</div>
</body>
</html>
