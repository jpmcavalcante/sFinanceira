<div class="box container" style="width: 85vw;">
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



        <h3 class="box-title">Cadastrar Colaborador</h3>
    </div>
    <div class="box-body">

        <form class="form-group" method="post" action="<?php echo BASE_URL; ?>Colaborador/add_action">
            <input class="form-control-sm" type="text"  name="nome"   placeholder="Nome" required>
            <input class="form-control-sm" type="text" name="email"   placeholder="Email" required>
            <input class="form-control-sm" type="text"  name="atendente"   placeholder="Atendente" required>
            <input class="form-control-sm" type="text"  name="unidade"   placeholder="Unidade" required>
            <input class="form-control-sm" type="password" name="senha"  placeholder="Senha" required>
            <select class="form-control form-control-sm" style="width: 15%; margin: 1% 0 2% 0" name="id_permissao" required>
                <option>Tipo de Colaborador</option>
                <?php foreach ($listGroups as $item): ?>
                    <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
                <?php endforeach;?>
            </select>

            <input class="btn btn-info" type="submit"  value="Salvar">
        </form>
    </div>
    
    
    <hr>

    <table class="table table table-bordered table-light" style="margin-top: 3%;">
        <tr class="bg-info">
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
                    <a href="<?php echo BASE_URL.'colaborador/del/'.$item['id'];?>" class="btn btn-xs btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>


</div>



    

