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

    public function editar($id_cliente)
    {
        $cliente = $this->cliente_model->where('id_cliente', $id_cliente)->first();

        $data['cliente'] = $cliente;

        echo View('templates/header');
        echo View('clientes/editar', $data);
        echo View('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getPost();

        if(isset($dados['id_cliente'])):
            $this->cliente_model->where('id_cliente', $dados['id_cliente'])->set($dados)->update();
            return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
        endif;

        $this->cliente_model->insert($dados);

        return redirect()->to('/clientes');
    }
}

?>