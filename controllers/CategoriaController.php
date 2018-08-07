<?php 
class CategoriaController extends Controller
{
    protected $usuario;
    protected $categoria;

    protected $view;
    protected $layout_pricipal;

    public function __construct()
    {
        $this->usuario = $this->model('Usuario');
        $this->categoria = $this->model("Categoria");

        $this->view = $this->view();
        $this->layout_pricipal = $this->view->layout('default-layout');
    }

    public function inserir()
    {
        $data["nome"] = Input::inPost("nome");
        $data["categoria_geral"] = Input::inPost("categoria_geral");
        $data["data_cadastro"] = Date::dateTime();

        if ($data["categoria_geral"] == false) {
            $data["categoria_geral"] = 0;
        } else {
            $data["categoria_geral"] = 1;
        }

        try {

            $this->categoria->cadastrar($data);

            Session::flash('success','Categoria Salva com Sucesso!');
            return Redirect::back();


        } catch(\Exception $e) {

            Session::flash('error','Erro ao Cadastrar Categoria: ' .$e);
            return Redirect::back();
        }
    }
}