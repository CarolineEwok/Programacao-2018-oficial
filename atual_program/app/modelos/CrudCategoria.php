<?php

require_once 'DBConnection.php';
require_once 'Categoria.php';

class CrudCategoria{

    private $conexao;

//getcategorias() - retorna uma lista de objetos de todas as categorias

    public function getCategorias(){
        //conexao
        $this->conexao = DBConNection::getConexao();

        //select
        $sql = 'select * from categoria';
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria){
                $listaCategorias = [] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        }

      return $listaCategorias;

    }

    //getcategoria(') - retorna o objeto da categoria correspondente
}

    $crud = new CrudCategoria();
    $cats = $crud->getCategorias();

    var_dump($cats);