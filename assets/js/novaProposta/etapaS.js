$(document).ready(function(){



//ETAPA 1
$("body").on("change","#operacao",function(){

    var ValorOperacao = $(this).val();
    
    if(ValorOperacao == 'Cartão de Credito'){

        $("#tabela").attr("hidden", false);
        var content = $('#operacao option:selected').text();
    
        $("#content").text(content);
    
    
        if ($('#tabela' ).length) {
    
            $("body").on('change','#tabela',function(){
                var ValorTabela = $(this).val();
    
                switch(ValorTabela){
                    case "A":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "B":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "C":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "D":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "E":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);
                        
                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "F":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);
                        
                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "G":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "H":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "I":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "J":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "K":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "L":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                    case "M":
                        var content = $('#content').text();
                        var tbText = $('#tabela option:selected').text()

                        content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                        $("#content").text(content+" - "+ tbText);

                        $("#div-etapa1").attr("hidden", false);
                        break;
                }
                
                $('#valor').blur(function(){
                    console.log('passou1')
                    var valor = $('#valor').val();
                    var taxa = $('#tabela option:selected').attr('id');
            
                    console.log(taxa)
            
                    if(valor.indexOf(".") >= 1){
                        var arrq = valor.split('.');
                        arrq = arrq[0]+arrq[1]
                        var arr = arrq.split(',');
            
                        valor = arr[0] + "."+ arr[1];
                    }else{
                        valor = valor.replace(',','.');
                    }
                    
                    $('.qtdp').remove();
            
                    if(valor != ""){
                        //FUNÇÃO PARA CALCULAR AS PARCELAS
            
                        for( var i = 3; i <= 12; i++){
            
                            var valorParcelaComposto = jurosComposto(valor, taxa, i);
            
                            var splitValor = valorParcelaComposto.split(":");
            
                            //OPTIONS DO SELECT QUANTIDADE DE PARCELAS
                            $("#QtParcelas").append('<option value='+ i +' class="qtdp">'+ i +'x - R$ '+ splitValor[0] +'</option>');
                        }
                    }
            
                });
                
                //FUNÇÃO PARA CALCULAR E MOSTRAR O VALOR TOTAL
                $('body').on('blur','#QtParcelas',function(){
                    var multiplicador = $('#QtParcelas option:selected').val();
                    var taxa = $("#tabela option:selected").attr('id');
                    var valor = $('#valor').val();

                    if(valor.indexOf(".") >= 1){
                        var arrq = valor.split('.');
                        arrq = arrq[0]+arrq[1]
                        var arr = arrq.split(',');

                        valor = arr[0] + "."+ arr[1];
                    }else{
                        valor = valor.replace(',','.');

                    }

                    var valorParcelaComposto = jurosComposto(valor, taxa, multiplicador);

                    var splitValor = valorParcelaComposto.split(":");

                    var valorF = (parseFloat(splitValor[1]) + parseFloat(valor));

                    var valParcela= valorF.toFixed(2).split('.');

                    valParcela[0] = valParcela  [0].split(/(?=(?:...)*$)/).join('.');

                    if(multiplicador > 0){
                        $("#total").text('Valor total: R$ '+ valParcela);
                        $("#valorFinal").val(valParcela);
                    }else{
                        $("#total").text('Valor total: ');
                        $("#valorFinal").val("");
                    }
                });
    
    
            });
    
        }
    
    }
    
    });
    
    //ETAPA 3
    $("#liberacao").change(function(){
    if($(this).prop( "checked" )){
       //INPUTS RADIOS
       $("#open").attr('hidden' , false);
       //IDs
       // pessoa fisica = #pessoaFisica
       // pessoa juridica = #pessoaJuridica
    
       $("body").on('change','#pessoa',function(){
            if($("#pessoa option:selected").val() == "Pessoa Fisíca"){
                $('.pessoaJuridica  ').attr('hidden' , 'hidden');
                $('.pessoaFisica').removeAttr('hidden');
            }else{
                $('.pessoaFisica').attr('hidden' , 'hidden');
                $('.pessoaJuridica').removeAttr('hidden');
            }
       
       })
        
    
    }else{
        $('#open').attr('hidden' , true);
        $('.pessoaFisica').attr('hidden' , 'hidden');
        $('.pessoaJuridica  ').attr('hidden' , 'hidden');
    }
    
    });
    
    
    //Buscar endereço por cep
    $('#cep').blur(function(){
    
    var cep = $(this).val();
    
    console.log(cep);
    
    $.getJSON("https://viacep.com.br/ws/"+cep+"/json", function(result) {
    if (("erro" in result)) {
    self.error = "CEP não encontrado";
    self.city = "";
    } else {
    self.city = result.logradouro +", "+result.bairro+ " - "+ result.localidade + "/" + result.uf;
    console.log(self.city);
    
    $('#bairro').val(result.bairro);
    $('#cidade').val(result.localidade);
    $('#rua').val(result.logradouro);
    $('#uf').val(result.uf);
    $('#complemento').val(result.complemento);
    $('#numero').val(result.numero);
       
       };
       console.log(result);
    
    });
    
    });
    
    
    function conversor(str) {
    if (typeof str == 'number') return str;
    var nr;
    var virgulaSeparaDecimais = str.match(/(,)\d{2}$/);
    if (virgulaSeparaDecimais) nr = str.replace(/\./g, '').replace(',', '.')
    else nr = str.replace(',', '');
    return parseFloat(nr);
    }
    
    
    function jurosComposto(valor, taxa, parcelas) {
    var taxa = taxa / 100;
    
    var valParcela = valor * Math.pow((1 + taxa), parcelas);
    valParcela = conversor(valParcela / parcelas);
    valorSemForma = valParcela;
    valParcela= valParcela.toFixed(2).split('.');
    
    valParcela[0] = valParcela  [0].split(/(?=(?:...)*$)/).join('.');
    
    return valParcela +":"+ valorSemForma;
    }

});