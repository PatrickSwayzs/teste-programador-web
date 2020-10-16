<?php

namespace App\Db;
use\PDO;

class Database{

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'vendas';

    /**
     * Usuário do banco
     * @var string
     */
    const USER = 'postgres';

    /**
     * Senha de acesso do banco
     * @var string
     */
    const PASS = 'masterkey';

    /**
     * Nome da tabela 
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com banco de dados
     * @var PDO
     */
    private $conn;


    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }


    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try {
            $this->conn = new PDO('pgsql:host='.self::HOST.'dbname='.self::NAME, self::USER, self::PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die('ERRO: ' . $e->getMessage());
        }
    }


}