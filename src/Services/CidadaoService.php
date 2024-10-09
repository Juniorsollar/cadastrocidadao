<?php
namespace Services;

class CidadaoService
{
    private $cidadaosFile = '../src/Models/cidadaos.json';

    public function cadastrarCidadao($nome)
    {
        $nis = $this->gerarNIS();
        $cidadao = ['nome' => $nome, 'nis' => $nis];

        $this->salvarCidadao($cidadao);

        return $nis;
    }

    public function buscarCidadao($nis)
    {
        $cidadaos = $this->carregarCidadaos();
        
        foreach ($cidadaos as $cidadao) {
            if ($cidadao['nis'] === $nis) {
                return $cidadao;
            }
        }
        
        return null;
    }

    private function gerarNIS()
    {
        return str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT);
    }

    private function salvarCidadao($cidadao)
    {
        $cidadaos = $this->carregarCidadaos(); 
        $cidadaos[] = $cidadao; 
        file_put_contents($this->cidadaosFile, json_encode($cidadaos));
    }

    private function carregarCidadaos()
    {
        if (!file_exists($this->cidadaosFile)) {
            return [];
        }

        $json = file_get_contents($this->cidadaosFile);
        return json_decode($json, true) ?: [];
    }
}