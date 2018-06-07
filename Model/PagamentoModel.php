<?php 

require_once '../View/HomePage.php';

class Pagamento
{
    
    private $id_pagamento;
    private $forma_pagamento;

    private $conexao;
    

    public function CarregarPagamento()
    {
        try{
            $pdo = Conexao::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("SELECT id_pagamento, forma_pagamento FROM pagamento");
            $query = $pdo->prepare($sql);
            $query->execute();

            return $query->fetchAll();
        } catch (PDOException $ex) {
            return 'error' .$ex->getMessage();
        }
    }


}

?>