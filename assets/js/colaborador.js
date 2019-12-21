
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
let btnform = '';
btnform = document.getElementById("btnform");

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

    axios.post("Colaborador/save", formData).then(res => {
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
        window.location.replace("Colaborador");
    }, 3000);
}



//Editar colaborador
let btnformEdit = '';

btnform = '';

btnformEdit = document.getElementById("btnformEdit");

btnformEdit.onclick = () => {
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

    axios.post("Colaborador/edit_action/", formData).then(res => {
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
        window.location.replace("Colaborador");
    }, 3000);
}


//Salvar Permissão

let btnformPer = '';
btnformPer = document.getElementById("btnSalvar");

btnformPer.onclick = () => {
    let validation = validador('formPermissao');

    console.log("Chegou aqui");

    let data = validation.collection;

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

    axios.post("permissao/add_action", formData).then(res => {
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
        document.getElementById("formPermissao").reset();
        window.location.replace("permissao");
    }, 3000);
}




