<!-- Modal -->
<div class="modal fade" id="modal_categorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categorias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">

          <div class="col-sm-12">
            <div style="padding:10px;padding-right:0">
              <button class="btn btn-sm pull-right"
                data-toggle="modal" data-target="#modal_cadastrar_categorias" data-backdrop="static">
                Nova Categoria
               </button>

              <div style="clear:both;"></div>
            </div>
          </div>

          <div class="col-sm-12">

            <div class="list-group">
              <?php foreach ($categorias as $categoria):?>
                <a href="#" class="list-group-item"><?php echo $categoria->nome;?></a>
              <?php endforeach;?>
            </div>
                      
          </div>
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

      
    </div>
  </div>
</div>