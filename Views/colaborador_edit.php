


<div class="box container" style="background: #ccc; border-radius: 1%; padding: 2%; width: 85vw;">
        <h3 class="box-title">Alterar Colaborador</h3>

        <form  class="form-horizontal" id="cadCola" name="cadCola" method="post" action="<?php echo BASE_URL;?>Colaborador/edit_action/<?php echo $id_col;?>">

            <input class="form-control-sm" type="text" id="nome" name="nome"         value="<?php echo $info['nome'];?>">
            <input class="form-control-sm" type="text" name="email"        value="<?php echo $info['email'];?>">
            <input class="form-control-sm" type="text" id="atendente" name="atendente"    value="<?php echo $info['atendente'];?>">
            <input class="form-control-sm" type="text" id="unidade" name="unidade"      value="<?php echo $info['unidade'];?>">



            <select class="form-control form-control-sm" style="width: 15%; margin: 1% 0 2% 0;" name="nivel">
                <option></option>
                <?php foreach ($permissaoList as $item):?>
                    <option <?php echo ($item['id']==$info['id_permission']) ? 'selected' : '' ;?>
                            value="<?php echo $item['id']; ?>"><?php echo $item['name'];?></option>
                <?php endforeach;?>
            </select>

            <button class="btn btn-info" type="submit" id="enviar">Alterar</button>

        </form>
</div>

<script>
    //Editar colaborador
    const validador = (id) => {
        let form = document.getElementById(id);
        let length = form.elements.length;
        let collection = [];
        for (let i = 0; i < length-1; i++){
            let key = form.elements[i].name;
            let val = form.elements[i].value;
            collection[key] = val;
        }
        for (key in collection){
            if (collection[key].length === 0){
                return {
                    status: false,
                    message: key,
                    collection
                }
            }
        }
        return {
            status: true,
            collection
        }
    }
    window.onload = function () {
        let btnformEdit = document.getElementById("btnformEdit");
        $(btnformEdit).on('click', function () {
            let validation = validador('formEdit')
            let data = validation.collection
            let formData = new FormData();
            for (key in data) {
                formData.append(key, data[key])
            }
            for (let pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
            if (!validation.status) {
                Swal.fire({
                    icon: 'error',
                    title: 'Informe um ',
                    text: `  ${validation.message}`
                })
                return
            }
        })
    }
</script>
