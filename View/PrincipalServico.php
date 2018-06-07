<?php include_once("Topo.php"); ?>

<?php 
    include 'AtualizarServico.php'; 
    include 'DeletarServico.php';
    require_once '../Model/ServicoModel.php';
    $objServico = new Servico();

    $pesquisa = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : "";
?>
<html>
<head><script language="JavaScript" src="../JavaScript/ServicoModal.js"></script></head>
    <div style="margin-top: 50px !important;">          
            <div class="row">
                <div class="col-md-6">
                <form action="../Controller/Servico_Controller" method="post">
                    <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Pesquisar" value="<?php echo $pesquisa; ?>" style="margin-left: 188px;" />                                 
                </form>
                </div>
                <div class="offset-md-4 col-md-2">
                    <a href="CadastrarServico.php" class = "btn btn-primary preeche">
                        <i class="fas fa-plus" style="margin-right: 5px;"></i>
                        Serviço
                    </a>
                </div>
            </div>

            <div class="row espaco">
                <div class="col-md-4" style="margin-top: 30px">
                    <div class="form-group">
                    <table class="table table-hover" style="margin-left:188px;">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width="200px">Serviço</th>
                                <th scope="col" width="120px">Preço</th>
                                <th scope="col" width="120px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($objServico->CarregarServico() as $item){ ?>
                                <tr>
                                    <td style="display:none"><?=$item['id_servico']?></td> 
                                    <td><?=$item['descricao']?></td> 
                                    <td><?=number_format( $item['preco'] , 2 , ',' , '.' );?></td> 
                                    <td>
                                        <button class ="btn btn-sm btn-Warning Editar" onclick="ModalEditServico()" data-toggle="modal" data-target="#AtualizarServico"
                                        data-whateverid="<?=$item['id_servico']?>" 
                                        data-whatever="<?=$item['descricao']?>"
                                        data-whatever1="<?=$item['preco']?>"
 
                                        style="margin-bottom:  8px;" >
                                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>
                                                Editar
                                        </button>

                                        <button class="btn btn-sm btn-danger Excluir" onclick="ModalDeletarServico()" data-toggle="modal" data-target="#DeletarServico" 
                                        data-whateverid="<?=$item['id_servico']?>" >                                   
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


<?php include_once("Fim.php"); ?>