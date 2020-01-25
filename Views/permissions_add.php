
<section class="content-fluid container p-3" style="width: 85vw; background: #ccc; border-radius: 1%;">
    <form id="formPermissao" name="formPermissao" method="post" class="form-horizontal" action="<?php echo BASE_URL; ?>Permissao/add_action">
        <div class="box">
            <div class="box-header">
                <h1 class="info-box-text">Adicionar Permissão</h1>
            </div>

            <div class="box-body">
                  <div class="form-group <?php echo (in_array('name', $errorItems))?'is-invalid':''; ?>">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Nome do Grupo">
                  </div>

                  <hr>
                  <h5 class="mb-2">Função:</h5>
                <?php foreach ($permission_items as $item): ?>
                  <div class="form-group" style="margin: 0;">
                      <input type="checkbox" class="items" name="items[]" value="<?php echo $item['id'];?>" id="item-<?php echo $item['id'];?>"/>
                      <label for="item-<?php echo $item['id'];?>"><?php echo $item['name'];?></label>
                  </div>
                <?php endforeach;?>
                <div id="checks"></div>
            </div>
            <div class="box-tools mt-1">
                <button type="submit" id="enviar" class="btn btn-info">Salvar</button>
            </div>
        </div>

    </form>
</section>


