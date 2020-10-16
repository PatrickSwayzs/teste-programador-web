<?php

namespace App\Db;
use\PDO;
use \PDOException;
use PDOStatement;

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
    const USER = 'root';

    /**
     * Senha de acesso do banco
     * @var string
     */
    const PASS = '';

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
            $this->conn = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die('ERRO: ' . $e->getMessage());
        }
    }

    /**
     * Método responsável por executar queries dentro do banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $param = []){
        try {
            $statement = $this->conn->prepare($query);
            $statement->execute($param);
            return $statement;

        } catch (\PDOException $e) {
            die('ERRO: ' . $e->getMessage());
        }
    }

    /**
     * Método responsável por inserir dados no banco
     * @param array $values [field => value]
     * @return integer Id inserido
     */
    public function insert($values){

        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');
        
        //query montada
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields). ') VALUES ('.implode(',',$binds).')';
        
        //executa o insert
        $this->execute($query, array_values($values));

        //retorna o id inserido
        return $this->conn->lastInsertId();
    }

    /**
     * Método responsável por executar uma consulta no dados no banco
     * @param string $where
     * @param string $order
     * @return PDOStatement 
     */
    public function select($where = null, $order = null){
        //dados da query
        $where = strlen($where) ? 'WHERE' . $where: '';
        $order = strlen($order) ? 'ORDER BY' . $order: '';

        //monta a query
        $query = 'SELECT * FROM '.$this->table.' '.$where.' '.$order;

        //executa a query
        return $this->execute($query);
    }

    public function selectFornecedores(){

        //monta a query
        $query = "SELECT * FROM fornecedores WHERE id > 0 order by nome asc";

        //executa a query
        return $this->execute($query);
    }

}