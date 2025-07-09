<?php 

namespace App\Controllers;
use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Clientes extends Controller
{
    private $cliente_model;

    function __construct()
    {
        $this->cliente_model = new ClienteModel();
    }

    public function index()
    {
        $clientes = $this->cliente_model->findAll();

        $data['clientes'] = $clientes;

        echo View('templates/header');
        echo View('clientes/index', $data);
        echo View('templates/footer');
    }

    public function novo()
    {
        echo View('templates/header');
        echo View('clientes/novo');
        echo View('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getPost();

        $this->cliente_model->insert($dados);

        return redirect()->to('/clientes');
    }
}

?>