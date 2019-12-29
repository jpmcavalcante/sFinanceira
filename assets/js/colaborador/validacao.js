// //FORM CAD CLIENTE 
// $("#cadColaborador").validate({
//     rules:{
//         nome:{
//             required: true,
//             maxlength:100,
//         },
//         email:{
//             required: true,
//             email:true,
//         },
//         atendente:{
//             required: true,
//         },
//         unidade:{
//             required: true,
//         },
//         senha:{
//             required: true,
//             minlength: 6,
//             maxlength: 12,
//         },
//         nivel:{
//             required: true,
//         },
//         submitHandler: function(form){

    
        
//         }
//     },
//     messages:{
//         nome:{
//             required: "Este campo é obrigatorio",
//             maxlength: "No máximo 100 caracteres"
//         },
//         email:{
//             required:"Este campo é obrigatorio",
//             email:"Email invalido",
//         },
//         atendente:{
//             required:"Este campo é obrigatorio",
//         },
//         unidade:{
//             required:"Este campo é obrigatorio",
//         },
//         senha:{
//             required:"Este campo é obrigatorio",
//             minlength: "No minimo 6 caracteres",
//             maxlength: "No maximo 10 caracteres"
//         },
//         nivel:{
//             required: "Este campo é obrigatorio",
//         }
//     }
// })


//JQUERY MASK
$("#nome").mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
 }).attr('maxlength', 100);

 $("#atendente").mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
 }).attr('maxlength', 100);

 $("#unidade").mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
 }).attr('maxlength', 50);