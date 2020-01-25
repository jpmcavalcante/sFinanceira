
<section class="content-fluid">

    

    <div class="box pb-3">

        <?php if (!empty($erros['suc'])): ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p><?php echo $erros['suc']; ?></p>
            </div>
        <?php elseif (!empty($erros['er'])): ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p><?php echo $erros['er']; ?></p>
            </div>
        <?php endif; ?>

        
        <div class="box-body container" style="width: 85vw; text-align: center;">
            
            <h1 style="text-align: left;">Clientes</h1>

            <table class="table table-bordered table-light">
                <tr class="bg-info">
                    <th width="40%">Nome </th>
                    <th width="30%">CPF </th>
                    <th width="30%">Ações</th>
                </tr>

                <?php foreach ($list as $item): ?>
                    <tr>
                        <td style="text-align: left;"><?php echo $item['nome'];?></td>
                        <td><?php echo $item['cpf'];?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo BASE_URL.'cliente/edit/'.$item['id'];?>" class="btn btn-xs btn-primary">Editar</a>

                                <a href="<?php echo BASE_URL.'cliente/del/'.$item['id'];?>" onclick="return confirm('Tem certeza que deseja EXCLUIR esse Cliente ?')" class="btn btn-xs btn-danger">Excluir</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="box-tools" style="text-align: left;">
                <a href="<?php echo BASE_URL.'cliente/add' ;?>" class="btn btn-primary">Adicionar</a>
            </div>
        </div>   
    </div>
</section>



