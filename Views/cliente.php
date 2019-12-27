<section>
    <h1>Clientes</h1>
</section>


<section class="content-fluid">
    <div class="box">

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

        <div class="box-header">
            <h3 class="info-box-text">Clientes Cadastrados</h3>
            <div class="box-tools">
                <a href="<?php echo BASE_URL.'cliente/add' ;?>" class="btn btn-success">Adicionar</a>
            </div>
        </div>
        <div class="box-body">
            <table class="table">
                <tr>
                    <th>Nome </th>
                    <th>CPF </th>
                    <th>Ações</th>
                </tr>

                <?php foreach ($list as $item): ?>
                    <tr>
                        <td><?php echo $item['nome'];?></td>
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
        </div>
    </div>
</section>



