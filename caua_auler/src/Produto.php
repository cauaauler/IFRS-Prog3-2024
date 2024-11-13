<?php

class Produto implements ActiveRecord{

    private int $id_produto;
    
    public function __construct(private string $descricao ,private string $categoria, private float $valor){
    }

    public function setIdProduto(int $id_produto):void{
        $this->id_produto = $id_produto;
    }

    public function getIdProduto():int{
        return $this->id_produto;
    }

    public function setDescricao(string $descricao):void{
        $this->descricao = $descricao;
    }

    public function getDescricao():string{
        return $this->descricao;
    }

    public function setCategoria(string $categoria):void{
        $this->categoria = $categoria;
    }

    public function getCategoria():string{
        return $this->categoria;
    }

    public function setValor(float $valor):void{

        $this->valor = $valor;
    }

    public function getValor():float{
        return $this->valor;
    }


    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id_produto)){
            $sql = "UPDATE produtos SET descricao = '{$this->descricao}' ,categoria = '{$this->categoria}',valor = '{$this->valor}'  WHERE id_produto = {$this->id_produto}";
        }else{
            $sql = "INSERT INTO produtos (descricao,categoria,valor) VALUES ('{$this->descricao}','{$this->categoria}','{$this->valor}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM produtos WHERE id_produto = {$this->id_produto}";
        return $conexao->executa($sql);
    }

    public static function find($id_produto):Produto{
        $conexao = new MySQL();
        $sql = "SELECT * FROM produtos WHERE id_produto = {$id_produto}";
        $resultado = $conexao->consulta($sql);
        $f = new Produto($resultado[0]['descricao'],$resultado[0]['categoria'],$resultado[0]['valor']);
        $f->setIdProduto($resultado[0]['id_produto']);
        return $f;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM produtos";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach($resultados as $resultado){
            $f = new Produto($resultado['descricao'],$resultado['categoria'],$resultado['valor']);
            $f->setIdProduto($resultado['id_produto']);
            $festas[] = $f;
        }
        return $festas;
    }
    public static function findallbycategory($categoria):array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM produtos WHERE categoria = '$categoria'";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach($resultados as $resultado){
            $f = new Produto($resultado['descricao'],$resultado['categoria'],$resultado['valor']);
            $f->setIdProduto($resultado['id_produto']);
            $festas[] = $f;
        }
        return $festas;
    }

    
}
