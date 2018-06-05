<?php 

include '../Conexao.php';

class Cliente
{
    
    private $id_cliente;
    private $Nome_cliente;
    private $Bairro;
    private $Endereco;
    private $Numero;
    private $Cidade;
    private $Estado;
    private $CEP;
    private $CPF;
    private $Telefone;
    private $Celular;
    private $Email;
    private $conexao;
    
   
    public function CadastrarCliente($dados)
    {
        try
        {
            $this->Nome_cliente = $dados['nome'];
            $this->Bairro = $dados['bairro'];
            $this->Endereco = $dados['endereco'];
            $this->Numero = (int) $dados['numero'];
            $this->Cidade = $dados['cidade'];
            $this->Estado = $dados['estado'];
            $this->CEP = $dados['cep'];
            $this->CPF = $dados['cpf'];
            $this->Telefone = $dados['telefone'];
            $this->Celular = $dados['celular'];
            $this->Email = $dados['email'];

            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("INSERT INTO cliente (Nome_cliente, Bairro, Endereco, Numero, Cidade, Estado, CEP, CPF, Telefone, Celular, Email)  VALUES (:NOME, :BAIRRO, :ENDERECO, :NUMERO, :CIDADE, :ESTADO, :CEP, :CPF, :TELEFONE, :CELULAR, :EMAIL)");
            $query = $pdo->prepare($sql);
            $query->bindParam(":NOME", $this->Nome_cliente, PDO::PARAM_STR);
            $query->bindParam(":BAIRRO", $this->Bairro, PDO::PARAM_STR);
            $query->bindParam(":ENDERECO", $this->Endereco, PDO::PARAM_STR);
            $query->bindParam(":NUMERO", $this->Numero, PDO::PARAM_INT);
            $query->bindParam(":CIDADE", $this->Cidade, PDO::PARAM_STR);
            $query->bindParam(":ESTADO", $this->Estado, PDO::PARAM_STR);
            $query->bindParam(":CEP", $this->CEP, PDO::PARAM_STR);
            $query->bindParam(":CPF", $this->CPF, PDO::PARAM_STR);
            $query->bindParam(":TELEFONE", $this->Telefone, PDO::PARAM_STR);
            $query->bindParam(":CELULAR", $this->Celular, PDO::PARAM_STR);
            $query->bindParam(":EMAIL", $this->Email, PDO::PARAM_STR);

            if($query->execute())
            {
                return 'ok';
            }
            else
            {
                return 'erro';
            }
            
        } 
        catch (PDOException $ex) 
        {
            print($ex->getMessage()."<br>");
            return 'error' .$ex->getMessage();
        }
    }

    public function AtualizarCliente($dados)
    {
        try{
            $this->id_cliente = (int) $dados['id'];
            $this->Nome_cliente = $dados['nome'];
            $this->Bairro = $dados['bairro'];
            $this->Endereco = $dados['endereco'];
            $this->Numero = (int) $dados['numero'];
            $this->Cidade = $dados['cidade'];
            $this->Estado = $dados['estado'];
            $this->CEP = $dados['cep'];
            $this->CPF = $dados['cpf'];
            $this->Telefone = $dados['telefone'];
            $this->Celular = $dados['celular'];
            $this->Email = $dados['email'];
            

            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("UPDATE cliente SET Nome_cliente = :NOME, Bairro=:BAIRRO, Endereco=:ENDERECO, Numero=:NUMERO, Cidade=:CIDADE, Estado=:ESTADO, CEP=:CEP, CPF=:CPF, Telefone=:TELEFONE, Celular=:CELULAR, Email=:EMAIL WHERE id_cliente = :IDCLIENTE");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDCLIENTE", $this->id_cliente, PDO::PARAM_INT);
            $query->bindParam(":NOME", $this->Nome_cliente, PDO::PARAM_STR);
            $query->bindParam(":BAIRRO", $this->Bairro, PDO::PARAM_STR);
            $query->bindParam(":ENDERECO", $this->Endereco, PDO::PARAM_STR);
            $query->bindParam(":NUMERO", $this->Numero, PDO::PARAM_INT);
            $query->bindParam(":CIDADE", $this->Cidade, PDO::PARAM_STR);
            $query->bindParam(":ESTADO", $this->Estado, PDO::PARAM_STR);
            $query->bindParam(":CEP", $this->CEP, PDO::PARAM_STR);
            $query->bindParam(":CPF", $this->CPF, PDO::PARAM_STR);
            $query->bindParam(":TELEFONE", $this->Telefone, PDO::PARAM_STR);
            $query->bindParam(":CELULAR", $this->Celular, PDO::PARAM_STR);
            $query->bindParam(":EMAIL", $this->Email, PDO::PARAM_STR);
            
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
    
    public function DeletarCliente($dados)
    {
        try{
            $this->id_cliente = (int) $dados['id'];
            
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("DELETE FROM cliente WHERE id_cliente = :IDCLIENTE");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDCLIENTE", $this->id_cliente, PDO::PARAM_INT);
            
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

    public function CarregarCliente()
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("SELECT id_cliente, Nome_cliente, Bairro, Endereco, Numero, Cidade, Estado, CEP, CPF, Telefone, Celular, Email FROM cliente");
            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }

    public function CarregarClientePorID($dados)
    {
        try{
            $this->id_cliente = (int)$dados['id_cliente'];
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql=("SELECT id_cliente, Nome_cliente, Bairro, Endereco, Numero, Cidade, Estado, CEP, CPF, Telefone, Celular, Email FROM cliente WHERE id_cliente = :IDCLIENTE");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDCLIENTE", $this->id_cliente, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
            
        }
    }


}

?>