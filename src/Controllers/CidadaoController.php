<?php
namespace Controllers;

require '../src/Services/CidadaoService.php';

use Services\CidadaoService;

class CidadaoController
{
    private $cidadaoService;

    public function __construct()
    {
        $this->cidadaoService = new CidadaoService();
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $nis = $this->cidadaoService->cadastrarCidadao($nome);
            echo "Cidadão cadastrado com sucesso! NIS: $nis";
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nis = $_GET['nis'] ?? '';
            $cidadao = $this->cidadaoService->buscarCidadao($nis);
            if ($cidadao) {
                echo "Nome: " . $cidadao['nome'] . ", NIS: " . $cidadao['nis'];
            } else {
                echo "Cidadão não encontrado";
            }
        }
    }
}