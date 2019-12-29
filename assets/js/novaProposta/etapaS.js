$(document).ready(function(){

    //ETAPA 1
   $("#operacao").on("change",function(){

       var ValorOperacao = $(this).val();
       
       if(ValorOperacao == 1){

           //SELECT OPERAÇÃO 
          $(".fxd").append('<div class="form-group col-md-4"><select id="tabela" class="form-control"><option value="" disabled selected>selecione o tipo de tabela</option><option id="3.7747" value="A">Tabela A</option> <option id="3.3667" value="B">Tabela B</option> <option id="3.0847" value="C">Tabela C</option> <option id="2.7198" value="D">Tabela D</option> <option id="2.5697" value="E">Tabela E</option> <option id="2.3397" value="F">Tabela F</option> <option G="2.1836" value="G">Tabela G</option> <option H="2.0244" value="H">Tabela H</option> <option id="1.9439" value="I">Tabela I</option> <option id="1.8627" value="J">Tabela J</option> <option id="1.7807" value="K">Tabela K</option> <option id="1.6977" value="L">Tabela L</option> <option id="1.6145" value="M">Tabela M</option></select></div>'); 

          var content = $('#operacao option:selected').text();
           
          $("#content").text(content);


           if ($('#tabela' ).length) { 
               
               $("#tabela").change(function(){
                   var ValorTabela = $(this).val();

                   console.log(ValorTabela)
                   switch(ValorTabela){
                       case 'A':// letra A
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()
                            
                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                            $("#content").text(content+" - "+ tbText);
                            
                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1 col-md-12">  <div class="form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div>  </div>');                       
                            
                            //IDs
                            //Valor = #valor
                            // parcelas = #QtParcelas
                            // valor total = #total
                            // bandeira Bancaria = #bandeiraBancaria
                            // numero do cartão = #numeroCartao
                            // titular do cartao = #titular
                            // mês vencimento = #mesVenci
                            // ano vencimento = #anoVenci
                            // codigo de segurança = #codigoSeguranca
                            
                            // Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                           break;
                       case 'B':// letra  B
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break; 
                        case 'C':// letra  C
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];

                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break; 
                        case 'D':// letra  D
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                           
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                            $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'E':// letra  E
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                           
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'F':// letra  F
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                           
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                            $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'G':// letra  G
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                           
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'H':// letra  H
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');

                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'I':// letra  I
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'J':// letra  J
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'K':// letra  K
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'L':// letra  L
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case 'M':// letra  M
                            $('.div1').remove();
                            var content = $('#content').text();
                            var tbText = $('#tabela option:selected').text()

                            content = content.split(' ')[0]+" "+content.split(' ')[1]+" "+content.split(' ')[2];
                            $("#content").text(content+" - "+ tbText);

                            //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                            $("#dados1").append('<div class="div1   col-md-12">  <div class=" form-group col-md-4"><label for="valor" class="col-sm-3 col-form-label">Valor R$</label><div class="col-sm-9"><input type="text" class="form-control valor" id="valor"  ></div></div><div class="form-group col-md-3"> <select id="QtParcelas" class="form-control"><option value="" disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class="input-field col-md-3" id="total" style="margin: 5px; font-weight: bold;"></div> <input id="valorFinal" type="text" name="valorFinal" readonly> <!-- BANDEIARA --><div class="form-group col-md-2"> <select id="bandeiraBancaria" class="form-control"><option value="" disabled selected>Bandeira do Cartão</option><option value="Elo" >Elo</option><option value="Visa" >Visa</option><option value="Amex" >Amex</option><option value="HiperCard" >HiperCard</option><option value="MasterCard" >MasterCard</option></select></div><!-- Numero do cartão --><div class="form-group col-md-4"><label for="numeroCartao" class="col-sm-4 col-form-label">Nº do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="numeroCartao" placeholder=""></div></div><!-- Titular do cartão --><div class="form-group col-md-5"><label for="titular" class="col-sm-4 col-form-label">Titular do Cartão</label><div class="col-sm-8"><input type="text" class="form-control" id="titular" placeholder=""></div></div><!-- Mês Vencimento --><div class="form-group col-md-2"><select id="mesVenci" class="form-control"><option value="" disabled selected>Mês venci...</option><option value="1">Janeiro</option><option value="2">Fevereiro</option><option value="0">Março</option><option value="4">Abril</option><option value="5">Maio</option><option value="6">Junho</option><option value="7">Julho</option><option value="8">Agosto</option><option value="9">Setembro</option><option value="10">Outubro</option><option value="11">Novembro</option><option value="12">Dezembro</option></select></div> <!-- Ano vencimento --><div class="form-group col-md-2"><select id="anoVenci" class="form-control"> <option value="" disabled selected>Ano venci...</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div><!-- codigo Sg --><div class="form-group col-md-4"><label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo .Segurança</label><div class="col-sm-6"><input type="text" class="form-control" id="codigoSeguranca" placeholder=""></div></div> </div>');                       
                            
                            // //Validation for Etapas
                            $('#valor').mask('000.000.000,00', {reverse: true});
                            $('#numeroCartao').mask('0000-0000-0000-0000');
                            $('#codigoSeguranca').mask('0000');
                            $('#titular').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
                            
                            // valor inserido na tabela anterior
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;

                   }

                   $("#valor").blur(function(){
                        console.log('passou')
                        var valor = $('#valor').val();
                        var taxa = conversor($("#tabela option:selected").attr('id'));

                        console.log(taxa)

                        if(valor.indexOf(".") >= 1){
                            var arrq = valor.split('.');
                            arrq = arrq[0]+arrq[1]
                            var arr = arrq.split(',');

                            valor = arr[0] + "."+ arr[1];
                        }else{
                            valor = valor.replace(',','.');
                        }
                        
                       if($('.qtdp').length){
                           $('.qtdp').remove();
                       }else{

                           if(valor != ""){
                                //FUNÇÃO PARA CALCULAR AS PARCELAS
                               
                                for( var i = 3; i <= 12; i++){

                                    var valorParcelaComposto = jurosComposto(valor, taxa, i);
                                    
                                    //OPTIONS DO SELECT QUANTIDADE DE PARCELAS
                                    $("#QtParcelas").append('<option value='+ i +' class="qtdp">'+ i +'x - '+ valorParcelaComposto +'</option>');
                                }
                           }
                       }
                   });

                   //FUNÇÃO PARA CALCULAR E MOSTRAR O VALOR TOTAL
                   $('#QtParcelas').blur(function(){
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

                       if(multiplicador > 0){
                           $("#total").text('Valor total: '+ valorParcelaComposto);
                           $("#valorFinal").val(valorParcelaComposto);
                       }else{
                           $("#total").text('Valor total: ');
                           $("#valorFinal").val("   ");
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
           $("#dados2").append('<div id="open"><div class="form-group col-md-4"><select name="pessoa" id="pessoa" class="form-control"><option selectend disebled>Selecione o tipo de pessoa</opition><option value="Pessoa Fisíca">Pessoa Fisíca</option><option value="Pessoa Juridica" >Pessoa Juridica</option></select></div></div>');
           //IDs
           // pessoa fisica = #pessoaFisica
           // pessoa juridica = #pessoaJuridica
        
           $("#pessoa").change(function(){
                if($("#pessoa option:selected").val() == "Pessoa Fisíca"){
                    $('.pessoaJuridica  ').attr('hidden' , 'hidden');
                    $('.pessoaFisica').removeAttr('hidden');
                }else{
                    $('.pessoaFisica').attr('hidden' , 'hidden');
                    $('.pessoaJuridica').removeAttr('hidden');
                }
           
           })
            

       }else{
           $("#open").remove();
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
    valParcela= valParcela.toFixed(2).split('.');

    valParcela[0] = "R$ " + valParcela  [0].split(/(?=(?:...)*$)/).join('.');
    
    return valParcela;
}

//VALIDAÇÃO ETAPA 2
$('#cpf').mask('999.999.999-99');
$('#nome').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#rg').mask('99.999.999-9');
$('#telefone').mask('(00) 0000-0000');
$('#celular').mask('(00) 00000-0000');
$('#residen').mask('0000');
// $('#cep').mask('00-000-000');
$('#orgaoEmissor').mask('SSS');
$('#dataExpedicao').mask('00/00/0000');
$('#dataNascimento').mask('00/00/0000');
$('#uf').mask('SSS');
$('#tipoResidencia').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#nomePai').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#nomeMae').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
//VALIDAÇÃO ETAPA 3
$('#banco').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#agencia').mask('00000000000000000');
$('#conta').mask('00000000-0');
$('#digito').mask('00000');
$('#dataDeAbertura').mask('00/00/0000');
$('#razaoSocial').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#cnpj').mask('99.999.999/9999-99');
$('#vinculo').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#outro').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');
$('#cpfTerceiro').mask('999.999.999-99');
$('#nomeTerceiro').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS');