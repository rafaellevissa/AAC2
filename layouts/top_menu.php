
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger logo" href="#page-top"><img src="public/img/logo.jpg" width="150"></a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
        <?php 
        $backToPage = false;
        $action = Input::inGet("action");

        if ($action == "usuario") {
          $backToPage = "usuario=index&action=usuario";
        }
        
        elseif ($action == "categoria") {
          $backToPage = "usuario=index&action=usuario";

        } 

        elseif ($action == "subCategoria") {
          $backToPage = "categoria=index&action=categoria";
        }

        elseif ($action == "categoriasUsuario") {
          $backToPage = "usuario=index&action=usuario";
        }

        elseif ($action == "subCategoriasUsuario") {
          $idUsuario = Input::inGet('idUsuario'); 
          $backToPage = "usuario=usuarioCategoria&action=categoriasUsuario&idUsuario={$idUsuario}";
        }
        
        ?>
        <li class="nav-item mx-0 mx-lg-1">
          <a href="?<?php echo $backToPage; ?>" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">
            <i class="fa fa-mail-reply" style="font-size:30px;"></i>
          </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" title="Cadastrar Categorias"
            <?php Helper::linkTo("categoria.index", "action=categoria");?>
            <i class="fa fa-save" style="font-size:30px;"></i>
          </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">
            <i class="fa fa-retweet" style="font-size:30px;"></i>
          </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
          <a href="?usuario=index?action=usuario" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">
            <i class="fa fa-home" style="font-size:30px;"></i>
          </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">
            <i class="fa fa-cogs" style="font-size:30px;"></i>
          </a>
        </li>

        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" 
          href="https://addons.mozilla.org/pt-BR/firefox/addon/google-text-to-speech/?src=search" target="blank"
          title="Plugin text Speech para Firefox">
            <i class="fa fa-plug" style="font-size:30px;"></i>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>