<?php 
class UsuarioController extends Controller
{
    protected $usuario;
    protected $categoria;
    protected $categoriaUsuario;

    protected $uploadFiles;

    protected $view;
    protected $layout_pricipal;

    public function __construct()
    {
        $this->usuario = $this->model('Usuario');
        $this->categoria = $this->model("Categoria");
        $this->categoriaUsuario = $this->model("CategoriaUsuario");

        $this->uploadFiles = $this->service("UploadFiles");

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

    public function cadastrar()
    {
        $dataUsuario["nome"] = Input::inPost("nome");
        $dataUsuario["data_cadastro"] = Date::dateTime();

        $this->uploadFiles->file($_FILES["imagem"]);
        $this->uploadFiles->folder("public/img/usuarios/");
        $this->uploadFiles->extensions(array("png","jpg","jpeg"));

        try {

            $this->uploadFiles->move();
            $dataUsuario["imagem"] = $this->uploadFiles->destinationPath();

        } catch(\Exception $e) {
            var_dump($e);
        }

        try {

            $this->usuario->cadastrar($dataUsuario);

        } catch(\Exception $e) {
            
            Session::flash('error','Erro ao Cadastrar Usuário: ' .$e);
            return Redirect::back();
        }

        if ( ! is_null($_POST["categoria_usuario"])) {

            foreach ($_POST["categoria_usuario"] as $categoria) {

                $dataCategoriaUuario["id_categoria"] = $categoria;
                $dataCategoriaUuario["id_usuario"] = $this->usuario->getLastID();

                $this->categoriaUsuario->cadastrar($dataCategoriaUuario);
            }

        }

        Session::flash('success','Usuário Cadastrado com Sucesso!');
        return Redirect::to("usuario.index", "action=usuario");
       
    }

    public function usuarioCategoria()
    {
        $this->layout_pricipal;

        $idUsuario = Input::inGet("idUsuario");

        $usuario = $this->usuario->findBy("id_usuario", $idUsuario);
        $categorias = $this->categoriaUsuario->selectCategoriasDoUsuario($idUsuario);

        return $this->view->make("usuario_categoria.index", 
            compact(
                "usuario",
                "categorias"
        ));
    }
}