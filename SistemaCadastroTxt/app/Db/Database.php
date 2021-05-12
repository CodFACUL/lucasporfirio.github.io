<?php

namespace App\Db;

use PDO;
use PDOException;

class Database{

    const HOST='localhost';

    const NAME= 'cadastro';

    const USER='root';

    const PASS='';

    private $table;

    private $connection;

    public function __construct($table=null){
        $this->table = $table; 
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }

    public function execute($query,$params=[]){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }

    public function insert($values){
        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        //monta a query
        $query = 'INSERT INTO '.$this->table.'('.implode(',',$fields).') VALUES('.implode(',',$binds).')';
       //executa o insert
        $this->execute($query,array_values($values));
        //retorna o id inserido
        return $this->connection->lastInsertId();
    }


    public function select($where=null,$order=null,$limit=null,$fields='*'){
       //Dados da query
       $where= strlen($where) ? 'WHERE '.$where:'';
       $order= strlen($order) ? ' ORDER BY '.$order:'';
       $limit= strlen($limit) ? ' LIMIT '.$limit:'';
       //Monta a Query
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
        //Executa a query
        return $this->execute($query);

    }
    /**Método responsável por executar atualizações no banco de dados
     * @param string $where
     * @param array $values[field=>value]
     * @return boolean
     */

     public function update($where,$values){
         //dados da query
         $fields = array_keys($values);

         //monta query
         $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;


         //executa query
         $this->execute ($query,array_values($values));
         return true;
     }

     /**Método responsável por excluir dados do banco
      * @param string $where
      * @return boolean
      */

     public function delete($where){
         //Monta query
        $query= 'DELETE FROM '.$this->table.' WHERE '.$where;

        //executa query
        $this->execute($query);

        //retorna sucesso
        return true;
     }

}