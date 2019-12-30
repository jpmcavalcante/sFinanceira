$(document).ready(function(){
    $("#dadosP").click(function(){

        var operacao = $("#operacao").val();
        var tabela = $("#tabela").val();
        var valor = $("#valor").val();
        var QtParcelas = $("#QtParcelas").val();
        var bandeiraBancaria = $("#bandeiraBancaria").val();
        var numeroCartao = $("#numeroCartao").val();
        var titular = $("#titular").val();
        var mesVenci = $("#mesVenci").val();
        var anoVenci = $("#anoVenci").val();
        var codigoSeguranca= $("#codigoSeguranca").val();

        if (operacao == null) {
            $("span[id=operacao]").text("Este campo é obrigatorio");
            $("span[id=operacao]").attr("hidden", false);
        }else{
            $("span[id=operacao]").attr("hidden", true);
            if (tabela == null ) {
                $("span[id=tabela]").text("Este campo é obrigatorio");
                $("span[id=tabela]").attr("hidden", false);
            }else{
                $("span[id=tabela]").attr("hidden", true);
                if (valor == "" ) {
                    $("span[id=valor]").text("Este campo é obrigatorio");
                    $("span[id=valor]").attr("hidden", false);
                }else{
                    $("span[id=valor]").attr("hidden", true);
                    if (QtParcelas == null ) {
                        $("span[id=QtParcelas]").text("Este campo é obrigatorio");
                        $("span[id=QtParcelas]").attr("hidden", false);
                    }else{
                        $("span[id=QtParcelas]").attr("hidden", true);
                        if (bandeiraBancaria == null ) {
                            $("span[id=bandeiraBancaria]").text("Este campo é obrigatorio");
                            $("span[id=bandeiraBancaria]").attr("hidden", false);
                        }else{
                            $("span[id=bandeiraBancaria]").attr("hidden", true);
                            if (numeroCartao == "") {
                                $("span[id=numeroCartao]").text("Este campo é obrigatorio");
                                $("span[id=numeroCartao]").attr("hidden", false);
                            }else{
                                $("span[id=numeroCartao]").attr("hidden", true);
                                if (titular == "") {
                                    $("span[id=titular ]").text("Este campo é obrigatorio");
                                    $("span[id=titular ]").attr("hidden", false);
                                }else{
                                    $("span[id=titular]").attr("hidden", true);
                                    if (mesVenci == null) {
                                        $("span[id=mesVenci]").text("Este campo é obrigatorio");
                                        $("span[id=mesVenci]").attr("hidden", false);
                                    }else{
                                        $("span[id=mesVenci]").attr("hidden", true);
                                        if (anoVenci == null) {
                                            $("span[id=anoVenci]").text("Este campo é obrigatorio");
                                            $("span[id=anoVenci]").attr("hidden", false);
                                        }else{
                                            $("span[id=anoVenci]").attr("hidden", true);
                                            if (codigoSeguranca == "") {
                                                $("span[id=codigoSeguranca]").text("Este campo é obrigatorio");
                                                $("span[id=codigoSeguranca]").attr("hidden", false);
                                            }else{
                                                $("span[id=codigoSeguranca]").attr("hidden", true);

                                                $("#progress-bar").css("width" ,"50%");
                                                $("#nav-dadosPessoais-tab").css("background", "#3CB371");
                                                $("#nav-dadosPessoais-tab").click();
                                                $("#progress-bar").text("2/4");
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }  
    })

    $("#dadosB").click(function(){
        var textoBusca = $("#textoBusca").val();
        var id = $("#id").val();

        if (textoBusca == "") {
            $("span[id=textoBusca]").text("Busque o cliente pelo nome");
            $("span[id=textoBusca]").attr("hidden", false);
        }else{
            $("span[id=textoBusca]").attr("hidden", true);
            if (id == "") {
                $("span[id=idCli]").text("escolha o cliente a ser registrado na proposta");
                $("span[id=idCli]").attr("hidden", false);
            }else{
                $("span[id=idCli]").attr("hidden", true);

                $("#progress-bar").css("width" ,"75%");
                $("#nav-dadosBancarios-tab").css("background", "#3CB371");
                $("#nav-dadosBancarios-tab").click();
                $("#progress-bar").text("3/4");
            }
        }
    });


    $("#enviar").click(function(){
        var file1 = $("#file1").val();
        var file2 = $("#file2").val();
        var file3 = $("#file3").val();
        var file4 = $("#file4").val();
        var obs1 = $("#obs1").val();
        var obs2 = $("#obs2").val();
        var obs3 = $("#obs3").val();
        var obs4 = $("#obs4").val();

        if (file1 == "" && obs1 == "") {
            $("span[id=obs1]").text("Adicione 1 arquivo PDF e coloque uma Observação");
            $("span[id=obs1]").attr("hidden", false);
        }else{
            $("span[id=textoBusca]").attr("hidden", true);
            

            $("#progress-bar").css("width" ,"100%");
            $("#nav-anexos-tab").css("background", "#3CB371");
            $("#nav-anexos-tab").click();
            $("#progress-bar").text("4/4");

            $("#enviar").attr({type: "submit"});
            $("#enviar").click();

        }
    })
});



// //FORM ETAPA 1
// $("#etapa1").validate({
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
//            return false;
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

// Validation for Etapas1
$('#valor').mask('000.000.000,00', {reverse: true});
$('#numeroCartao').mask('0000-0000-0000-0000');
$('#codigoSeguranca').mask('0000');
$("#titular").mask("#", {
    maxlength: false,
    translation: {
        '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
    }
}).attr('maxlength', 100); 



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