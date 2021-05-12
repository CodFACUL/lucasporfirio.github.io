<?php


namespace App\Entity;

use \App\Db\Database;
use PDO;

class Prod{
   

    public $id;

    public $nome;

    public $valor;
    
    public $quantidade;


    public function cadastrar(){


        $obDatabase = new Database ('produtos');
        $this->id= $obDatabase->insert ([
            'nome'=> $this->nome,
            'valor'=>$this->valor,
            'quantidade'=> $this->quantidade

        ]);

        return true;
    }


    public function atualizar(){
        return(new database('produtos'))->update('id ='.$this->id,['nome'=> $this->nome,
        'valor'=>$this->valor,
        'quantidade'=> $this->quantidade,]);
    }

    public function excluir(){
        return(new Database('produtos'))->delete('id ='.$this->id);
    }
        /**
         * Método responsável por obter as vagas do banco de dados
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return array
         */
    public static function getProdutos($where=null,$order=null,$limit=null){
        return(new Database('produtos'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }


    public static function getProduto($id){
        return (new Database('produtos'))->select('id='.$id)->fetchObject(self::class);
        
    }
    
}