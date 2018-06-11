<?php 
// include '../Conexao.php';
require_once '../View/HomePage.php';

class Animal
{
    
    private $id_animal;
    private $Nome_animal;
    private $Raca;
    private $especie;
    private $Data_Nascimento;
    private $sexo;
    private $id_cliente;

    private $conexao;
    
   
    public function CadastrarAnimal($dados)
    {

        try
        {

            $this->Nome_animal = $dados['nome'];
            $this->Raca = $dados['raca'];
            $this->especie = $dados['especie'];
            $this->Data_Nascimento = $dados['data'];
            $this->sexo = $dados['sexo'];
            $this->id_cliente = $dados['dono'];

            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("INSERT INTO animal 
                        (Nome_animal,Raca,especie,Data_Nascimento,sexo, id_cliente)  
                    VALUES 
                        (:NOME, :RACA, :ESPECIE, :DATA_NASCIMENTO, :SEXO, :IDCLIENTE)");
            $query = $pdo->prepare($sql);
            $query->bindParam(":NOME", $this->Nome_animal, PDO::PARAM_STR);
            $query->bindParam(":RACA", $this->Raca, PDO::PARAM_STR);
            $query->bindParam(":ESPECIE", $this->especie, PDO::PARAM_STR);
            $query->bindParam(":DATA_NASCIMENTO", $this->Data_Nascimento, PDO::PARAM_STR);
            $query->bindParam(":SEXO", $this->sexo, PDO::PARAM_STR);
            $query->bindParam(":IDCLIENTE", $this->id_cliente, PDO::PARAM_INT);
            

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

    public function AtualizarAnimal($dados)
    {
        try{
            $this->id_animal = (int) $dados['id'];
            $this->Nome_animal = $dados['nome'];
            $this->Raca = $dados['raca'];
            $this->especie = $dados['especie'];
            $this->Data_Nascimento = (int) $dados['data'];
            $this->sexo = $dados['sexo'];
            $this->id_cliente = $dados['dono'];
            

            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("UPDATE animal SET Nome_animal = :NOME, Raca=:RACA, especie=:ESPECIE, Data_Nascimento=:DATA_NASCIMENTO, sexo=:SEXO, id_cliente=:IDCLIENTE 
                    WHERE id_animal = :IDANIMAL");

            $query = $pdo->prepare($sql);
            $query->bindParam(":IDANIMAL", $this->id_animal, PDO::PARAM_INT);
            $query->bindParam(":NOME", $this->Nome_animal, PDO::PARAM_STR);
            $query->bindParam(":RACA", $this->Raca, PDO::PARAM_STR);
            $query->bindParam(":ESPECIE", $this->especie, PDO::PARAM_STR);
            $query->bindParam(":DATA_NASCIMENTO", $this->Data_Nascimento, PDO::PARAM_STR);
            $query->bindParam(":SEXO", $this->sexo, PDO::PARAM_STR);
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
    
    public function DeletarAnimal($dados)
    {
        try{
            $this->id_animal = (int) $dados['id'];
            
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("DELETE FROM animal WHERE id_animal = :IDANIMAL");
            $query = $pdo->prepare($sql);
            $query->bindParam(":IDANIMAL", $this->id_animal, PDO::PARAM_INT);
            
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

    public function CarregarAnimal()
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("   SELECT id_animal, Nome_animal, Raca, especie, Data_Nascimento, sexo, cliente.Nome_Cliente AS 'dono' 
                        FROM animal 
                        INNER JOIN cliente ON animal.id_cliente = cliente.id_cliente");

            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();

        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }

    public function CarregarAnimalPorCliente($dados)
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("   SELECT id_animal, Nome_animal,  cliente.Nome_Cliente 
                        FROM animal 
                        INNER JOIN cliente ON animal.id_cliente = cliente.id_cliente
                        WHERE cliente.Nome_Cliente LIKE %$dados%");

            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();

        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }
}

?>