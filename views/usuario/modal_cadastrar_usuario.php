<!-- Modal -->
<div class="modal fade" id="modal_cadastrar_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">

          <div class="col-sm-12">

            <form>

              <div class="form-group">
                <label for="enome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome do Usuário">
              </div>

              <div class="form-group">
                <label for="imagem">Foto de Perfil</label>
                <input type="file" class="form-control" name="imagem" id="imagem"  placeholder="Imagem do Usuário">
              </div>

            </form>
            
          </div>
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>