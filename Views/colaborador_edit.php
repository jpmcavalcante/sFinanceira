
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Editar - Colaborador</h3>
    </div>


        <form class="form-horizontal" id="formEdit" >

            <input type="text" name="nome"       value="<?php echo $info['nome'];?>">
            <input type="text" name="email"      value="<?php echo $info['email'];?>">
            <input type="text" name="atendente"      value="<?php echo $info['atendente'];?>">
            <input type="text" name="unidade"      value="<?php echo $info['unidade'];?>">


            <select  name="nivel">
                <option></option>
                <?php foreach ($permissaoList as $item):?>
                    <option <?php echo ($item['id']==$info['id_permission']) ? 'selected' : '' ;?>
                            value="<?php echo $item['id']; ?>"><?php echo $item['name'];?></option>
                <?php endforeach;?>
            </select>

            <input type="button" id="btnformEdit" value="editar">

    </form>
</div>

<hr>





