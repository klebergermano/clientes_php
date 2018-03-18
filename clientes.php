<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientes
 *
 * @author Kleberus
 */
namespace cliente;
require_once "Database";
class Cliente {

    private $id, $telefone, $email, $obs, $rua, $numero, $bairro, $cep, $cidade, $estado, $cadastro;

    function __construct($id, $telefone, $email, $obs, $rua, $numero, $bairro, $cep, $cidade, $estado, $cadastro) {
        $this->id = $id;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->obs = $obs;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cadastro = $cadastro;
    }

    
    public function adicionarCliente() {
         $con = new \Database($dbName, $user, $password)
        
    }

    public function excluirCliente() {
        
    }

    public function consultarCliente() {
        
    }

    public function alterarCliente() {
        
    }

}
