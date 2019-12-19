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

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Adicionar Colaborador</h3>
    </div>
    <div class="box-body">

<form class="form-horizontal" action="<?php echo BASE_URL;?>colaborador/save"  method="POST">
    <input type="text" name="nome"   placeholder="nome">
    <input type="text" name="email"   placeholder="email">
    <input type="password" name="senha"  placeholder="Senha">

    <button type="submit" id="addColaborador">Salvar</button>
    </div>
</form>
</div>

<hr>


<table class="table">
    <tr>
        <th>Nome do colaborador</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($list as $item): ?>
        <tr>
            <td><?php echo $item['nome'];?></td>
            <td><?php echo $item['email'];?></td>
            <td>
                <a href="<?php echo BASE_URL.'colaborador/edit/'.$item['id'];?>" class="btn btn-xs btn-primary">Editar</a>
                <a href="<?php echo BASE_URL.'colaborador/del/'.$item['id'];?>" class="btn btn-xs btn-primary">Deletar</a>
            </td>


        </tr>
    <?php endforeach;?>
</table>

