<?php 

include '../Conexao.php';

class Servico
{
    
    private $id_servico;
    private $descricao;
    private $preco;

    private $conexao;
    
   
    public function CadastrarServico($dados)
    {
        try
        {
            $this->descricao = $dados['descricao'];
            $this->preco = (float) $dados['preco'];


            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("INSERT INTO servico (descricao, preco)  VALUES (:DESCRICAO, :PRECO)");
            $query = $pdo->prepare($sql);
            $query->bindParam(":DESCRICAO", $this->descricao, PDO::PARAM_STR);
            $query->bindParam(":PRECO", $this->preco, PDO::PARAM_STR);


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

    public function AtualizarServico($dados)
    {
        try{
            $this->id_servico = (int) $dados['id'];
            $this->descricao = $dados['descricao'];
            $this->preco = (float)$dados['preco'];
            

            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("UPDATE servico SET descricao = :DESCRICAO, preco=:PRECO WHERE id_servico = :IDSERVICO");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDSERVICO", $this->id_servico, PDO::PARAM_INT);
            $query->bindParam(":DESCRICAO", $this->descricao, PDO::PARAM_STR);
            $query->bindParam(":PRECO", $this->preco, PDO::PARAM_STR);
            
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
    
    public function DeletarServico($dados)
    {
        try{
            $this->id_servico = (int) $dados['id'];
            
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("DELETE FROM servico WHERE id_servico = :IDSERVICO");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDSERVICO", $this->id_servico, PDO::PARAM_INT);
            
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

    public function CarregarServico()
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("SELECT id_servico, descricao, preco FROM servico");
            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }

}

?>