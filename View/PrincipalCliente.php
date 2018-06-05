<?php 
    include 'Topo.php'; 
    include 'AtualizarCliente.php'; 
    include 'DeletarCliente.php'; 
    require_once '../Model/ClienteModel.php';
    $objCliente = new Cliente();
?>
<html>
<head><script language="JavaScript" src="../JavaScript/ClienteModal.js"></script></head>
    <div style="margin-top: 50px !important;">          
            <div class="row">
                <div class="col-md-6">
                <form action="../Controllers/Garcom_Controller.php" method="post">
                    <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Pesquisar" value="<?php echo $pesquisa; ?>" style="margin-left: -62px;" />                                 
                </form>
                </div>
                <div class="offset-md-4 col-md-2">
                    <a href="CadastrarCliente.php" class = "btn btn-primary preeche">
                        <i class="fas fa-plus" style="margin-right: 5px;"></i>
                        Cliente
                    </a>
                </div>
            </div>

            <div class="row espaco">
                <div class="col-md-12" style="margin-top: 30px">
                    <div class="form-group">
                    <table class="table table-hover" style="margin-left:-65px;">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width="120px">Nome</th>
                                <th scope="col" width="120px">CPF</th>
                                <th scope="col" width="120px">Endereço</th>
                                <th scope="col" width="120px">Numero</th>
                                <th scope="col" width="120px">Bairro</th>
                                <th scope="col" width="120px">Cidade</th>
                                <th scope="col" width="120px">Estado</th>
                                <th scope="col" width="120px">CEP</th>
                                <th scope="col" width="120px">Telefone</th>
                                <th scope="col" width="120px">Celular</th>
                                <th scope="col" width="120px">E-mail</th>
                                <th scope="col" width="120px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($objCliente->CarregarCliente() as $item){ ?>
                                <tr>
                                    <td style="display:none"><?=$item['id_cliente']?></td> 
                                    <td><?=$item['Nome_cliente']?></td> 
                                    <td><?=$item['CPF']?></td> 
                                    <td><?=$item['Endereco']?></td> 
                                    <td><?=$item['Numero']?></td>
                                    <td><?=$item['Bairro']?></td>  
                                    <td><?=$item['Cidade']?></td> 
                                    <td><?=$item['Estado']?></td> 
                                    <td><?=$item['CEP']?></td> 
                                    <td><?=$item['Telefone']?></td> 
                                    <td><?=$item['Celular']?></td> 
                                    <td><?=$item['Email']?></td>
                                    <td>
                                        <button class ="btn btn-sm btn-Warning Editar" onclick="ModalEditCliente()" data-toggle="modal" data-target="#AtualizarCliente"
                                        data-whateverid="<?=$item['id_cliente']?>" 
                                        data-whatever="<?=$item['Nome_cliente']?>"
                                        data-whatever1="<?=$item['CPF']?>"
                                        data-whatever2="<?=$item['Endereco']?>"
                                        data-whatever3="<?=$item['Numero']?>"
                                        data-whatever4="<?=$item['Bairro']?>"
                                        data-whatever5="<?=$item['Cidade']?>"
                                        data-whatever6="<?=$item['Estado']?>"
                                        data-whatever7="<?=$item['CEP']?>"
                                        data-whatever8="<?=$item['Telefone']?>"
                                        data-whatever9="<?=$item['Celular']?>"
                                        data-whatever10="<?=$item['Email']?>" 
                                        style="margin-bottom:  8px;" >
                                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>
                                                Editar
                                        </button>

                                        <button class="btn btn-sm btn-danger Excluir" onclick="ModalDeletarCliente()" data-toggle="modal" data-target="#DeletarCliente" 
                                        data-whateverid="<?=$item['id_cliente']?>" >                                   
                                            <i class="fas fa-times" style="margin-right: 5px;"></i>
                                                Excluir
                                        </button> 
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>
    </div>
</html>

<?php include_once("Fim.php"); ?>