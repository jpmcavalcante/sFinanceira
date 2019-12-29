// //FORM ETAPA 1
// $("#etapas").validate({
//     rules:{
//         operacao:{
//             required: true
//         },
//         QtParcelas:{
//             required: true
//         },
//         bandeiraBancaria:{
//             required: true
//         },
//         numeroCartao:{
//             required: true
//         },
//         titular:{
//             required: true
//         },
//         mesVenci:{
//             required: true
//         },
//         anoVenci:{
//             required: true
//         },
//         codigoSeguranca:{
//             required: true
//         },
//         submitHandler: function(form){

//             form.submit()
        
//         }
//     },
//     messages:{
//         operacao:{
//             required: "Este campo é obrigatorio"
//         },
//         QtParcelas:{
//             required: "Este campo é obrigatorio"
//         },
//         bandeiraBancaria:{
//             required:"Este campo é obrigatorio"
//         },
//         numeroCartao:{
//             required:"Este campo é obrigatorio",
//         },
//         titular:{
//             required:"Este campo é obrigatorio",
//         },
//         mesVenci:{
//             required:"Este campo é obrigatorio"
//         },
//         anoVenci:{
//             required: "Este campo é obrigatorio",
//         },
//         codigoSeguranca:{
//             required: "Este campo é obrigatorio",
//         }
//     }
// })





//VALIDAÇÃO ETAPA 2 JQUERY MASK
$('#cpf').mask('999.999.999-99');
$('#nome').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 
$('#rg').mask('9999999999');
$('#telefone').mask('(00) 0000-0000');
$('#celular').mask('(00) 00000-0000');
$('#residen').mask('0000');
// $('#cep').mask('00-000-000');
$('#orgaoEmissor').mask('SSS');
$('#dataExpedicao').mask('00/00/0000');
$('#dataNascimento').mask('00/00/0000');
$('#uf').mask('SSS');
$('#tipoResidencia').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 30); 
$('#nomePai').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 
$('#nomeMae').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 
//VALIDAÇÃO ETAPA 3
$('#banco').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 30); 
$('#agencia').mask('00000000000000000');
$('#conta').mask('000000000');
$('#digito').mask('00000');
$('#dataDeAbertura').mask('00/00/0000');
$('#razaoSocial').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}); 
$('#cnpj').mask('99.999.999/9999-99');
$('#vinculo').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 50); 
$('#outro').mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 
$('#cpfTerceiro').mask('999.999.999-99');
$('#nomeTerceiro').mask("#", {
    maxlength: true,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 