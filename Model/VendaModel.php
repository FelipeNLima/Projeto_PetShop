<?php 

require_once '../View/HomePage.php';

class Venda
{
    
    private $id_venda;
    private $valor_total;
    private $data_pagamento;
    private $id_servico;
    private $id_animal;
    private $id_cliente;
    private $id_pagamento;

    private $conexao;
    
   
    public function CadastrarVenda($dados)
    {
        try
        {
            $this->valor_total = $dados['valor'];
            $this->data_pagamento = $dados['data'];
            $this->id_servico = $dados['servico'];
            $this->id_animal = $dados['animal'];
            $this->id_cliente = $dados['cliente'];
            $this->id_pagamento = $dados['pagamento'];


            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("INSERT INTO venda (valor_total, data_pagamento, id_servico, id_animal, id_cliente, id_pagamento)  VALUES (:VALOR, :DATAPAGAMENTO, :SERVICO, :ANIMAL, :CLIENTE, :PAGAMENTO)");
            $query = $pdo->prepare($sql);
            $query->bindParam(":VALOR", $this->valor_total, PDO::PARAM_STR);
            $query->bindParam(":DATAPAGAMENTO", $this->data_pagamento, PDO::PARAM_STR);
            $query->bindParam(":SERVICO", $this->id_servico, PDO::PARAM_INT);
            $query->bindParam(":ANIMAL", $this->id_animal, PDO::PARAM_INT);
            $query->bindParam(":CLIENTE", $this->id_cliente, PDO::PARAM_INT);
            $query->bindParam(":PAGAMENTO", $this->id_pagamento, PDO::PARAM_INT);


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


    public function CarregarVenda()
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("   SELECT valor_total, data_pagamento, servico.descricao AS 'servico', animal.Nome_animal AS 'animal', cliente.Nome_cliente AS 'cliente', pagamento.forma_pagamento AS 'pagamento' 
                        FROM venda
                        INNER JOIN cliente   ON venda.id_cliente = cliente.id_cliente 
                        INNER JOIN servico   ON venda.id_servico = servico.id_servico 
                        INNER JOIN animal    ON venda.id_animal = animal.id_animal 
                        INNER JOIN pagamento ON venda.id_pagamento = pagamento.id_pagamento");
            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }


}

?>