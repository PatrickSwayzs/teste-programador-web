<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

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
        $obDatabase = new Database('vendas');
        $this->id = $obDatabase->insert([
            'produtos' => $this->produtos,
            'fornecedores' => $this->fornecedores,
            'precos' => $this->precos,
            'precoTotal' => $this->precoTotal,
            'cep' => $this->cep,
            'uf' => $this->uf,
            'cidade' => $this->cidade,
            'bairro' => $this->bairro,
            'rua' => $this->rua,
            'data' => $this->data
            ]);


        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as vagas do banco de dados
     * @param string $where
     * @param string $order 
     * @return array
     */
    public static function getVendas($where = null, $order = null){
        return (new Database('vendas'))->select($where,$order)
                                       ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getFornecedores(){
        return (new Database('fornecedores'))->selectFornecedores()
                                       ->fetchAll(PDO::FETCH_ASSOC);
    }

}