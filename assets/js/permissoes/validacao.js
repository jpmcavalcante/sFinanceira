jQuery.validator.addMethod("check", function(value) {
    if(value == null){
        $('#checks').text("Escolha uma das opcoes a cima");
        return false;
    }else{
        return true;
    }
})

//FORM CAD CLIENTE 
$("#formPermissao").validate({
    rules:{
        name:{
            required: true,
            maxlength:30,
        },
        'items[]':{
            check: true
        },
        submitHandler: function(form){
            form.submit()
        }
    },
    messages:{
        name:{
            required: "Este campo é obrigatorio",
            maxlength: "No máximo 15 caracteres"
        },
        'items[]':{
            check:""
        }
        
    }
})

//JQUERY MASK

$("#name").mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
 }).attr('maxlength', 100);




