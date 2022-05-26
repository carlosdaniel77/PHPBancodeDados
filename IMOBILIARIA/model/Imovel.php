<?php

require_once 'Banco.php';
require_once '../Conexao.php';

    

class Imovel extends Banco{

    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

    public function remove($id){
        
    }

    public function find($id){

    }

    public function count(){

    }
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function save(){

        $result = false;

        //cria um objeto do tipo conexao
        $conexao = new Conexao();
        //cria query de inserção passando os atributos que serão armazenados
        $query = "insert into imovel (id,descricao,foto,valor,tipo) values (null,:descricao,:foto,:valor,:tipo)";
        //cria a conexao com o banco de dados
        if($conn = $conexao->getConection()){
            //Prepara a query para execução
            $stmt = $conn->prepare($query);
            //executa a query
            if($stmt->execute(array(':descricao'=> $this->descricao, ':foto'=> $this->foto, ':valor'=> $this->valor, ':tipo'=> $this->tipo))){
                $result = $stmt->rowCount();
            }
        }
        return $result;
    }

    public function listAll(){
        $result = false;
        //cria um objeto do tipo conexao
        $conexao = new Conexao();
        //cria a conexao com o banco de dados
        $conn = $conexao->getConection();
        //cria query de seleção
        $query = "SELECT * FROM imovel";
        //Prepara a query para execução
        $stmt = $conn->prepare($query);
        //Cria um array para receber o resultado da seleção
        $result = array();
        //executa a query
        if($stmt->execute()){
            //o resultado da busca será retornado como um objeto da classe 
            while ($rs = $stmt->fetchObject(Imovel::class)) {
                //armazena esse objeto em uma posição do vetor
                $result[] = $rs;
            }
        } 

        return $result;
    }
}
?>