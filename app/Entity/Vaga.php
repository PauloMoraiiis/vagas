<?php

    namespace App\Entity;

    use \App\Db\Database;
    use \PDO;

class Vaga{

    /**
     * Identificador Único da vaga
     * @var integer
     */
    public $id;


    /**
     * Título da vaga
     * @var string
     */
    public $titulo;


    /**
     * Descrição da vaga
     * @var string
     */
    public $descricao;


    /**
     * Define se a vaga está ativa
     * @var string (s/n)
     */
    public $ativo;


    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;


    /**
     * Método responsável por cadastrar uma nova vaga no banco
     * @var boolean
     */
    public function cadastrar() {
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('vagas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;


        //ATRIBUIR O ID DA VAGA NA INSTANCIA

        //RETORNAR SUCESSO

    }
}