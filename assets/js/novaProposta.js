$(document).ready(function(){

    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#numeroCartao').mask('0000-0000-0000-0000');
    $('#codigoSeguranca').mask('0000');


    $('#cpf').mask('999.999.999-99');
    $('#rg').mask('99.999.999-9');
    $('#telefone').mask('(00) 0000-0000');
    $('#celular').mask('(00) 00000-0000');
    $('#residen').mask('0000');

    $('#cpfTerceiro').mask('999.999.999-99');
    $('#Agencia').mask('0000');
    $('#conta').mask('99999999-9');
    $('#digito').mask('999');
    $('#dataDeAbertura').mask('00/00/0000');

    $('#cnpj').mask('00.000.000/0000-00');

    //ETAPA 1
    $("#operacao").on("change",function(){

        var ValorOperacao = $(this).val();
        
        if(ValorOperacao == 1){
           $(".fxd").append("<div class='form-group col-md-4'><select id=tabela class=form-control><option value='' disabled selected>selecione o tipo de tabela</option><option value='8'>Tabela 1 - Tx 8,00%</option></select></div>"); 

           var content = $('#operacao option:selected').text();
            
           $("#content").text(content);


            if ($('#tabela' ).length) { 
                
                $("#tabela").change(function(){
                    var ValorTabela = $(this).val();

                    switch(ValorTabela){
                        case '8':
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()
                            $("#content").text(content+" - "+ tbText);

                            $("#dados1").append("<div class='form-group col-md-4'><label for=valor class='col-sm-3 col-form-label'>Valor R$</label><div class='col-sm-9'><input type=text class=form-control id='valor' ></div></div><div class='form-group col-md-2'> <select id=QtParcelas class=form-control><option value= disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class='input-field col-md-3' id=total></div><!-- BANDEIARA --><div class='form-group col-md-2'> <select id=bandeiraBancaria class=form-control><option value= disabled selected>Bandeira do Cartão</option><option value=Elo >Elo</option><option value=Visa >Visa</option><option value=Amex >Amex</option><option value=HiperCard >HiperCard</option><option value=MasterCard >MasterCard</option></select></div><!-- Numero do cartão --><div class='form-group col-md-4'><label for=numeroCartao class='col-sm-4 col-form-label'>Nº do Cartão</label><div class='col-sm-8'><input type=text class=form-control id=numeroCartao placeholder=></div></div><!-- Titular do cartão --><div class='form-group col-md-5'><label for=titular class='col-sm-4 col-form-label'>Titular do Cartão</label><div class='col-sm-8'><input type=text class=form-control id=titular placeholder=></div></div><!-- Mês Vencimento --><div class='form-group col-md-2'><select id=Mes class=form-control><option value= disabled selected>Mês venci...</option><option value=1>Janeiro</option><option value=2>Fevereiro</option><option value=0>Março</option><option value=4>Abril</option><option value=5>Maio</option><option value=6>Junho</option><option value=7>Julho</option><option value=8>Agosto</option><option value=9>Setembro</option><option value=10>Outubro</option><option value=11>Novembro</option><option value=12>Dezembro</option></select></div> <!-- Ano vencimento --><div class='form-group col-md-2'><select id=Ano class=form-control> <option value= disabled selected>Ano venci...</option><option value=1>2020</option><option value=2>2021</option><option value=0>2022</option><option value=4>2023</option><option value=5>2024</option><option value=6>2025</option><option value=7>2026</option><option value=8>2027</option><option value=9>2028</option><option value=10>2029</option></select></div><!-- codigo Sg --><div class='form-group col-md-4'><label for=codigoSeguranca class='col-sm-6 col-form-label'>Codigo .Segurança</label><div class='col-sm-6'><input type=text class=form-control id=codigoSeguranca placeholder=></div></div>");                       
                                             
                                    
                            break;
                        case '9':

                            break;  

                    }

                    $("#valor").blur(function(){

                        var valor = parseInt($('#valor').val());
                        var taxa = $("#tabela option:selected").val();
                
                        console.log(valor);
                        if($('.qtdp').length){
                            $('.qtdp').remove();
                        }else{

                            for( var i = 3; i <= 12; i++){

                                var total = valor * ((1 + taxa)* i);

                                total = total - valor;
                                total = formatReal(total * i);

                                $("#QtParcelas").append('<option value='+ i +' class=qtdp>'+ i +'x - R$ '+ total +'</option>');
                            }
                        }
                    });

                    $('#QtParcelas').blur(function(){
                        var multiplicador = $('#QtParcelas option:selected').val();
                        var taxa = $("#tabela option:selected").val();
                        var valor = parseInt($('#valor').val());

                        var total = valor * ((1 + taxa)* multiplicador);
                        total = total - valor; 
                        
                        total= total * multiplicador;
                        
                        total = formatReal(total * multiplicador);

                        if(multiplicador > 0){
                            $("#total").text('Valor total: R$ '+ total);
                        }else{
                            $("#total").text('Valor total: R$ ');
                        }
                    });
                    

                });

            }
            
        }
        
    });
});

function formatReal( int )
{
        var tmp = int+'';
        tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
        if( tmp.length > 6 )
                tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");

        return tmp;
}
