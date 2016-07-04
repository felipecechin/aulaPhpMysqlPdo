<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insert
 *
 * @author Alunos
 */
class insert extends conexao {

    private $tabela;
    private $dados;
    private $insert;
    private $conexao;

    public function doInsert($tabela, array $dados) {
        $this->tabela = (string) $tabela;
        $this->dados = $dados;

        $this->getSintaxe();
        $this->executar();
    }

    private function conectando() {
        $this->conexao = parent::getConexao();
        $this->insert = $this->conexao->prepare($this->insert);
    }

    private function getSintaxe() {
        $campos = implode(',', array_keys($this->dados));
        $valores = ':' . implode(',:', array_keys($this->dados));
        $this->insert = "INSERT INTO $this->tabela ($campos) VALUES ($valores)";
    }

    private function executar() {
        $this->conectando();
        try {
            $this->insert->execute($this->dados);
        } catch (Exception $e) {
            echo 'Erro - ' . $e->getMessage();
        }
    }

}
