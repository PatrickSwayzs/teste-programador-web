<?php

namespace App\Entity;

class Venda {

    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Os produtos da venda
     * @var string (array?)
     */
    public $produtos;

    /**
     * Os fornecedores da venda
     * @var string (array?)
     */
    public $fornecedores;

    /**
     * Os preços de cada produto da venda
     * @var string (array?)
     */
    public $precos;

    /**
     * preço todal da venda
     * @var string 
     */
    public $precoTotal;

    /**
     * CEP do endereço de entrega
     * @var string 
     */
    public $cep;

    /**
     * UF do endereço de entrega
     * @var string 
     */
    public $uf;

    /**
     * Cidade do endereço de entrega
     * @var string 
     */
    public $cidade;

    /**
     * Bairro do endereço de entrega
     * @var string 
     */
    public $bairro;

    /**
     * Rua do endereço de entrega
     * @var string 
     */
    public $rua;

    /**
     * Data da venda
     * @var string 
     */
    public $data;

    /**
     * Método responsável por cadastrar uma nova venda
     * @return boolean
     */
    public function cadastrar(){
        //Definir data
        $this->data = date('Y-m-d H:i:s');
        
        //Inserir venda no banco

        //Atribuir o id da vaga na instancia

        //Retornar sucesso
    }
}