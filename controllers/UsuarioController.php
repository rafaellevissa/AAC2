<?php 
class UsuarioController extends Controller
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

    public function index()
    {   
        $this->layout_pricipal;

        $usuarios = $this->usuario->usuarios();
        $categorias = $this->categoria->categorias();

        return $this->view->make('usuario.index',
         compact(
            'usuarios',
            'categorias'
        ));
    }
}