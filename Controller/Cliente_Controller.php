<?php

include '..\Model\ClienteModel.php';


$objCliente = new Cliente();

if(isset($_POST['btcadastrar']))

{   
    if($objCliente->CadastrarCliente($_POST) === 'ok')
    {
        header("location: ..\View\PrincipalCliente.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Erro ao Cadastrar Cliente");</script>';
    }
}

if(isset($_POST['bteditar'])){
    if($objCliente->AtualizarCliente($_POST) === 'ok')
    {
        header("location: ../View/PrincipalCliente.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Atualizar Cliente");</script>';
    }
}


if(isset($_POST['btdeletar'])){
    if($objCliente->DeletarCliente($_POST) === 'ok')
    {
        header("location: ../View/PrincipalCliente.php");
    }
    else
    {   
      echo '<script type="text/javascript">alert("Erro ao Deletar Cliente");</script>';
    }
}



if(isset($_POST['pesquisa'])){
   $buscar = $_POST['pesquisa'];

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = ("select * from cliente where Nome_cliente like '%".$buscar."%'");
   $query = $pdo->prepare($sql);
   $query = mysql_num_rows($sql);
   if($query > 0)
   {
       while($linha= mysqli_fetch_array($sql))
       {
           $nome = $linha['Nome_cliente'];
           $cpf = $linha['CPF'];
           $endereco = $linha['Endereco'];
           $numero = $linha['Numero'];
           $bairro = $linha['Bairro'];
           $cidade = $linha['Cidade'];
           $estado = $linha['Estado'];
           $cep = $linha['CEP'];
           $telefone = $linha['Telefone'];
           $celular = $linha['Celular'];
           $email = $linha['Email'];


           echo "<strong>Nome: </strong>".$nome;
           echo "</br></br>";
           echo "<strong>CPF: </strong>".$cpf;
           echo "</br></br>";
           echo "<strong>Endereço: </strong>".$endereco;
           echo "</br></br>";
           echo "<strong>Numero: </strong>".$numero;
           echo "</br></br>";
           echo "<strong>Bairro: </strong>".$bairro;
           echo "</br></br>";
           echo "<strong>Cidade: </strong>".$cidade;
           echo "</br></br>";
           echo "<strong>Estado: </strong>".$estado;
           echo "</br></br>";
           echo "<strong>CEP: </strong>".$cep;
           echo "</br></br>";
           echo "<strong>Telefone: </strong>".$telefone;
           echo "</br></br>";
           echo "<strong>Celular: </strong>".$celular;
           echo "</br></br>";
           echo "<strong>E-mail: </strong>".$email;
       }
   }
}
?>
