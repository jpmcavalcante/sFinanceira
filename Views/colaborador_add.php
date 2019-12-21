<div class="box">
    <div class="box-header">
        <h3 class="box-title">Adicionar Colaborador</h3>
    </div>
    <div class="box-body">

<form class="form-horizontal" id="formCol">
    <input type="text" name="nome"   placeholder="nome">
    <input type="text" name="email"   placeholder="email">
    <input type="text" name="atendente"   placeholder="Atendente">
    <input type="text" name="unidade"   placeholder="unidade">
    <input type="password" name="senha"  placeholder="Senha">
    <select name="nivel" required>
        <option></option>
        <?php foreach ($listGroups as $item): ?>
            <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
        <?php endforeach;?>
    </select>

    <input type="button" id="btnform" value="Salvar">
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

