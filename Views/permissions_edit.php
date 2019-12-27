<section>
    <h1>Editar Permissões</h1>
</section>


<section class="content-fluid">
    <form id="formPermissao" name="formPermissao" method="post" class="form-horizontal" action="<?php echo BASE_URL;?>Permissao/edit_action/<?php echo $permission_id;?>">
        <div class="box">
            <div class="box-header">
                <h3 class="info-box-text">Editar Grupo de Permissão</h3>
                <div class="box-tools">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group <?php echo (in_array('name', $errorItems))?'is-invalid':''; ?>">
                    <label for="group_name">Nome do Grupo</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $permission_group_name;?>">
            </div>


                <hr>
                <?php foreach ($permission_items as $item): ?>
                    <div class="form-group">
                        <input <?php
                               if(in_array($item['slug'], $permission_group_slugs)){
                                  echo 'checked="checked"';
                               }
                               ?>
                               type="checkbox" name="items[]" value="<?php echo $item['id']; ?>" id="item-<?php echo $item['id'];?>"/>
                        <label for="item-<?php echo $item['id'];?>"><?php echo $item['name']; ?></label>
                    </div>
                <?php endforeach;?>
                <div id="checks"></div>
            </div>
        </div>

    </form>
</section>



