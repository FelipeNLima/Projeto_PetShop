<?php include_once("Topo.php"); ?>

<?php 
    include 'AtualizarAnimal.php'; 
    include 'DeletarAnimal.php'; 
    include '../Model/AnimalModel.php';
    $objAnimal = new Animal();
?>
<html>
<head><script language="JavaScript" src="../JavaScript/AnimalModal.js"></script></head>
    <div style="margin-top: 50px !important;">          
            <div class="row">
                <div class="col-md-6">
                <form action="../Controllers/Animal_Controller.php" method="post">
                    <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Pesquisar" value="<?php echo $pesquisa; ?>" style="margin-left: -62px;" />                                 
                </form>
                </div>
                <div class="offset-md-4 col-md-2">
                    <a href="CadastrarAnimal.php" class = "btn btn-primary preeche">
                        <i class="fas fa-plus" style="margin-right: 5px;"></i>
                        Animal
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
                                <th scope="col" width="120px">Raça</th>
                                <th scope="col" width="120px">Especie</th>
                                <th scope="col" width="200px">Data de Nascimento</th>
                                <th scope="col" width="120px">Sexo</th>
                                <th scope="col" width="200px">Dono</th>
                                <th scope="col" width="120px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($objAnimal->CarregarAnimal() as $item ){ ?>
                                <tr>
                                    <td style="display:none"><?=$item['id_animal']?></td> 
                                    <td><?=$item['Nome_animal']?></td> 
                                    <td><?=$item['Raca']?></td> 
                                    <td><?=$item['especie']?></td> 
                                    <td><?=$item['Data_Nascimento']?></td>
                                    <td><?=$item['sexo']?></td>  
                                    <td><?=$item['dono']?></td> 
                                    
                                    <td>
                                        <button class ="btn btn-sm btn-Warning Editar" onclick="ModalEditarAnimal()" data-toggle="modal" data-target="#AtualizarAnimal"
                                        data-a="<?=$item['id_animal']?>"
                                        data-b="<?=$item['Nome_animal']?>"
                                        data-c="<?=$item['Raca']?>"
                                        data-d="<?=$item['especie']?>"
                                        data-e="<?=$item['Data_Nascimento']?>"
                                        data-f="<?=$item['sexo']?>"
                                        data-g="<?=$item['dono']?>"
 
                                        style="margin-bottom:  8px;" >
                                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>
                                                Editar
                                        </button>

                                        <button class="btn btn-sm btn-danger Excluir" onclick="ModalDeletarAnimal()" data-toggle="modal" data-target="#DeletarAnimal" 
                                                style="margin-bottom:  8px;"
                                                data-whateverid="<?=$item['id_animal']?>" >                                   
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