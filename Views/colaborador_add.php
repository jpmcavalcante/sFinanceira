<div class="box">
    <div class="box-header">


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



        <h3 class="box-title">Adicionar Colaborador</h3>
    </div>
    <div class="box-body">

        <form class="form-horizontal" id="cadCola" name="cadCola" method="post" action="<?php echo BASE_URL; ?>Colaborador/add_action">
            <input type="text" id="nome" name="nome"   placeholder="nome">
            <input type="text" name="email"   placeholder="email">
            <input type="text" id="atendente" name="atendente"   placeholder="Atendente">
            <input type="text"  id="unidade" name="unidade"   placeholder="unidade">
            <input type="password" name="senha"  placeholder="Senha">
            <select name="nivel" >
                <option selected disabled>Selecione</option>
                <?php foreach ($listGroups as $item): ?>
                    <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
                <?php endforeach;?>
            </select>

            <input type="submit"  value="Salvar">
    </div>
    </form>
</div>

<hr>


<table class="table">
    <tr>
        <th>Nome do colaborador</th>
        <th>Email</th>
        <th>Atendente</th>
        <th>Unidade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($list as $item): ?>
        <tr>
            <td><?php echo $item['nome'];?></td>
            <td><?php echo $item['email'];?></td>
            <td><?php echo $item['atendente'];?></td>
            <td><?php echo $item['unidade'];?></td>
            <td>
                <a href="<?php echo BASE_URL.'colaborador/edit/'.$item['id'];?>" class="btn btn-xs btn-primary">Editar</a>
                <a href="<?php echo BASE_URL.'colaborador/del/'.$item['id'];?>" class="btn btn-xs btn-primary">Deletar</a>
            </td>

        </tr>
    <?php endforeach;?>
</table>

