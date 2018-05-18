<?php 

include '../../Conexao.php';

class Cliente {
    
    private $id_cliente;
    private $Nome_cliente;
    private $Bairro;
    private $Endereço;
    private $Numero;
    private $Cidade;
    private $Estado;
    private $CEP;
    private $CPF;
    private $Telefone;
    private $Celular;
    private $Email;

    private $conexao;
    private $objfunc;
    
    public function __construct() {
        $this->conexao = new Conexao(); 
        $this->objfunc = new Funcoes();
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function CadastrarCliente($dados)
    {
        try{
            $this->nome = $dados['nome'];
            $this->nome = $dados['cpf'];
            $this->nome = $dados['endereco'];
            $this->nome = (int) $dados['numero'];
            $this->nome = $dados['bairro'];
            $this->nome = $dados['cidade'];
            $this->nome = $dados['estado'];
            $this->nome = $dados['cep'];
            $this->nome = $dados['telefone'];
            $this->nome = $dados['celular'];
            $this->nome = $dados['email'];
            
            $query = $this->conexao->Conectar()->prepare("INSERT INTO cliente (Nome_cliente, Bairro,Endereço,Numero,Cidade,Estado,CEP,CPF,Telefone,Celular,Email)  VALUES (:NOME, :BAIRRO, :ENDERECO, :NUMERO, :CIDADE, :ESTADO, :CEP, :CPF, :TELEFONE, :CELULAR, :EMAIL)");
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":BAIRRO", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":ENDERECO", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":NUMERO", $this->codigo, PDO::PARAM_INT);
            $query->bindParam(":BAIRRO", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":CIDADE", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":ESTADO", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":CEP", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":TELEFONE", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":CELULAR", $this->codigo, PDO::PARAM_STR);
            $query->bindParam(":EMAIL", $this->codigo, PDO::PARAM_STR);
            
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function AtualizarGarcom($dados)
    {
        try{
            $this->id_Garcom = (int) $dados['id'];
            $this->nome = $this->objfunc->TratarCaracter($dados['nome'],1);
            $this->codigo = (int) $dados['codigo'];
            
            $query = $this->conexao->Conectar()->prepare("UPDATE GARCOM SET nome_garcom =:NOME, codigo =:CODIGO WHERE id_garcom = :IDGARCOM");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            $query->bindParam(":NOME", $this->nome, PDO::PARAM_STR);
            $query->bindParam(":CODIGO",  $this->codigo, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function DeletarGarcom($dados)
    {
        try{
            $this->id_Garcom = (int) $dados['id'];
            $query = $this->conexao->Conectar()->prepare("DELETE FROM GARCOM WHERE id_garcom = :IDGARCOM");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            
            if($query->execute())
            {
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function CarregarGarcom()
    {
        try{
            $query = $this->conexao->conectar()->prepare("SELECT id_garcom, codigo, nome_garcom FROM GARCOM");
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
    
    public function CarregarGarcomPorID($dados)
    {
        try{
            $this->id_Garcom = (int)$dados['id_garcom'];
            $query = $this->conexao->conectar()->prepare("SELECT id_garcom, codigo, nome_garcom FROM GARCOM WHERE id_garcom = :IDGARCOM");
            $query->bindParam(":IDGARCOM", $this->id_Garcom, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
            
        }
    }
       
}


?>