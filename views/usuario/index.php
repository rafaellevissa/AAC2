
<h2 class="text-center text-uppercase text-secondary mb-0" id="titulo">
    Usuários do Sistema
</h2>

<hr class="star-dark mb-5">

<div>
	<?php require_once("views/flash_message/flash_message.php");?>
</div>

<div class="row">

	<div id="centered">
		<center>
			<button class="btn btn btn-primary" style="border-radius:50%;" 
			  data-toggle="modal" data-target="#modal_cadastrar_usuario" data-backdrop="static">
		      +
	        </button>
		</center>
		<br>

		<div class="col-sm-12">
			<?php if (count($usuarios) < 1):?>
			  <h3>Nenhum Usuário Cadastrado no momento</h3>
		    <?php endif; ?>
		</div>
	</div>
		
</div>

<?php require_once("modal_cadastrar_usuario.php");?>
<?php require_once("views/categoria/modal_categorias.php");?>
<?php require_once("views/categoria/modal_cadastrar_categorias.php");?>