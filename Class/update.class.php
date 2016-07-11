<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of update
 *
 * @author Alunos
 */
class update extends conexao {

    private $tabela;
    private $dados;
    private $termos;
    private $places;
    private $update;
    private $conexao;
    private $query;

    public function doUpdate($tabela, array $dados, $termos) {
        $this->tabela = $tabela;
        $this->dados = $dados;
        $this->termos = $termos;
        parse_str($dados, $this->places);
        $this->getSintaxe();
        $this->executar();
    }

    private function conectando() {
        $this->conexao = parent::getConexao();
        $this->update = $this->conexao->prepare($this->query);
    }

    private function getSintaxe() {
        foreach ($this->dados as $indice => $valores)
            $local[] = $indice . '=:' . $indice;
        $local = implode(', ', $local);

        $this->query = 'UPDATE ' . $this->tabela . ' SET ' . $local . $this->termos;
    }

    private function executar() {
        $this->conectando();
        try {
            $this->update->execute(array_merge($this->dados, $this->places));
        } catch (PDOException $e) {
            echo 'Erro - ' . $e->getMessage();
        }
    }

}
