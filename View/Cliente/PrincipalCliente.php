<?php 
    include '../Topo.php'; 
    require_once '../../Model/ClienteModel.php';
    $objCliente = new Cliente();
?>
    
    <div style="margin-top: 50px !important;">
        <form action="" method="POST">
            
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control preenche" name="pesquisa" id="pesquisa" placeholder="Pesquisar" value=""/>
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
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col" width="120px">Endereço</th>
                                <th scope="col" width="120px">Bairro</th>
                                <th scope="col" width="120px">Numero</th>
                                <th scope="col" width="120px">Cidade</th>
                                <th scope="col" width="120px">Estado</th>
                                <th scope="col" width="120px">CEP</th>
                                <th scope="col" width="120px">Telefone</th>
                                <th scope="col" width="120px">Celular</th>
                                <th scope="col" width="120px">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($objCliente->CarregarCliente() as $item){ ?>
                                <tr>
                                    <td><?=$item['Nome_cliente']?></td> 
                                    <td><?=$item['CPF']?></td> 
                                    <td><?=$item['Endereco']?></td> 
                                    <td><?=$item['Numero']?></td> 
                                    <td><?=$item['Cidade']?></td> 
                                    <td><?=$item['Estado']?></td> 
                                    <td><?=$item['CEP']?></td> 
                                    <td><?=$item['Telefone']?></td> 
                                    <td><?=$item['Celular']?></td> 
                                    <td><?=$item['Email']?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <a href="#" class ="btn btn-Warning Editar">
                    <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>
                        Editar
                    </a>
                    <a href="#" class ="btn btn-danger Excluir">
                    <i class="fas fa-times" style="margin-right: 5px;"></i>
                        Excluir
                    </a>
                </div>
            </div>

        </form>
    </div>


<?php include_once("..\Fim.php"); ?>