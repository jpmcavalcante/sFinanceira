
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
        <h3 class="box-title">Editar - Colaborador</h3>
    </div>
    <div class="box-body">

        <form class="form-horizontal" action="<?php echo BASE_URL;?>colaborador/edit_action/<?php echo $listColab['id'];?>"  method="POST">

            <input type="text" name="nome"       value="<?php echo $listColab['nome'];?>">
            <input type="text" name="email"      value="<?php echo $listColab['email'];?>">
            <input type="text" name="senha"      value="<?php echo $listColab['senha'];?>">

            <button type="submit">Alterar</button>
    </div>
    </form>
</div>

<hr>





