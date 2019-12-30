//FORM CAD CLIENTE 
$("#addArquivo").validate({
    rules:{
        nomeArquivo:{
            required: true,
        },
        descricao:{
            required: true, 
        },
        arquivo:{
            required: true,
        },
        submitHandler: function(form){
            form.submit()
        }
        
    },
    messages:{
        nomeArquivo:{
            required: "Éste campo é obrigatório.",
        },
        descricao:{
            required: "Éste campo é obrigatório.",
        },
        arquivo:{
            required: "Éste campo é obrigatório.",
        }
    }  
});
