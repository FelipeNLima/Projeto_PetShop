<?php

include '..\Model\AnimalModel.php';

$objAnimal = new Animal();

if(isset($_POST['btcadastrar'])){   

    if($objAnimal->CadastrarAnimal($_POST) === 'ok')
    {
        header("location: ..\View\PrincipalAnimal.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Animal");</script>';
    }
}

if(isset($_POST['bteditar'])){
    if($objAnimal->AtualizarAnimal($_POST) === 'ok')
    {
        header("location: ../View/PrincipalAnimal.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Atualizar Animal");</script>';
    }
}


if(isset($_POST['btdeletar'])){
    if($objAnimal->DeletarAnimal($_POST) === 'ok')
    {
        header("location: ../View/PrincipalAnimal.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Deletar Animal");</script>';
    }
}

?>