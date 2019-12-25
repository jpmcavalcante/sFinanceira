


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Editar - Colaborador</h3>
    </div>


        <form class="form-horizontal" id="formEdit" method="post" action="<?php echo BASE_URL;?>Colaborador/edit_action/<?php echo $id_col;?>">

            <input type="text" name="nome"         value="<?php echo $info['nome'];?>">
            <input type="text" name="email"        value="<?php echo $info['email'];?>">
            <input type="text" name="atendente"    value="<?php echo $info['atendente'];?>">
            <input type="text" name="unidade"      value="<?php echo $info['unidade'];?>">



            <select  name="nivel">
                <option></option>
                <?php foreach ($permissaoList as $item):?>
                    <option <?php echo ($item['id']==$info['id_permission']) ? 'selected' : '' ;?>
                            value="<?php echo $item['id']; ?>"><?php echo $item['name'];?></option>
                <?php endforeach;?>
            </select>

            <input type="submit" id="btnformEdit" value="editar">

    </form>
</div>

<hr>

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





