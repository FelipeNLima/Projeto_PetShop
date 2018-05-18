<?php

include '../Model/Cliente/ClienteModel.php';


$objCliente = new Cliente();

if(isset($_POST['btcadastrar']))
{
    if($objCliente->CadastrarCliente($_POST) === 'ok')
    {
        header("location: ../View/Cliente/PrincipalCliente.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Cliente");</script>';
    }
}
