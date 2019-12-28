<div class="box">
    <div class="box-header">
        <h3 class="box-title">Adicionar Colaborador</h3>
    </div>
    <div class="box-body">

<form class="form-horizontal" id="formCol">
    <input type="text" id="nome" name="nome"   placeholder="nome">
    <input type="text" name="email"   placeholder="email">
    <input type="text" id="atendente" name="atendente"   placeholder="Atendente">
    <input type="text" id="unidade" name="unidade"   placeholder="unidade">
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

<script>
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
    window.onload = function() {
        let btnform = document.getElementById("btnform");
        btnform.onclick = () => {
            let validation = validador('formCol')
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
            axios.post("save", formData).then(res => {
                console.table(res.data);
                if (!res.data.success) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocorreu um erro. ',
                        text: `${res.data.message}`
                    })
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Colaborador',
                    text: 'Salvo com sucesso'
                })
            });
            var tmp = setTimeout(function () {
                document.getElementById("formCol").reset();
                location.reload();
            }, 3000);
        }
    };
</script>