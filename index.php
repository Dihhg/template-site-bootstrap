<!-- traz o head-->
<?php require_once("./inc/head.php"); ?>
<!-- traz o header-->
<?php require_once("./inc/header.php"); ?>

<!-- Carrosel-->
<div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
        <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
        <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
        <li data-target="#carrosselBootstrap" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://eduimportsoficial.com.br/wp-content/uploads/2019/06/big7-22.jpg" alt="Primeiro Slide">
            <div class="carousel-caption d-none d-sm-block">
                <h5>Titulo 1</h5>
                <p>Descrição 1</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images-submarino.b2w.io/produtos/01/00/img/46284/5/46284577_1GG.jpg" alt="Segundo Slide">
            <div class="carousel-caption d-none d-sm-block">
                <h5>Titulo 2</h5>
                <p>Descrição 2</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://i.imgur.com/OHjzaMR.png" alt="Terceiro Slide">
            <div class="carousel-caption d-none d-sm-block">
                <h5>Titulo 3</h5>
                <p>Descrição 3</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://uploads.spiritfanfiction.com/fanfics/capitulos/201910/brothers-17792797-311020191047.gif" alt="Segundo Slide">
            <div class="carousel-caption d-none d-sm-block">
                <h5>Titulo 4</h5>
                <p>Descrição 4</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>

<!-- traz o footer-->
<?php require_once("./inc/footer.php"); ?>