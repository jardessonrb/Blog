<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport*" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-menu.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= url("/source/pages/styles/style-list-post.css") ?>">
</head>
<body>
<div class="content-container">
    <div class="header">
        <div class="my-logo">
            <span id="logo">NeedleSoft-Blog</span>
        </div>
        <div class="navegator">
            <ul class="menu">
                <li><a class="links-navigator" href="<?= url("")?>">Home</a></li>
                <li><a class="links-navigator" href="<?= url("contact")?>">Entre em contato</a></li>
                <li><a class="links-navigator" href="<?= url("about")?>">Sobre nós</a></li>
                <li><a class="links-navigator" href="<?= url("register-post")?>">Adm for Post</a></li>
            </ul>
        </div>
    </div>
    <div class="header-category">
        <div class="texts">
            <p id="legenda" class="title">Blog com o objetivo de integrar conhecimentos!</p>
            <p id="title" class="title">Categorias dos artigos</p>
        </div>
        <div class="links-category">
            <a class="navigator-category" href="<?= url("category/programacao")?>">Programação</a>
            <a class="navigator-category" href="<?= url("category/futebol")?>">Futebol</a>
            <a class="navigator-category" href="<?= url("category/capoeira")?>">Capoeira</a>
            <a class="navigator-category" href="<?= url("category/noticias")?>">Noticias</a>
        </div>
    </div>
</div>
<section>
    <?= $v->section("content"); ?>
</section>
</div>

</body>
</html>
