$(document).ready(function(){
    //ETAPA 1
   $("#operacao").on("change",function(){

       var ValorOperacao = $(this).val();
       
       if(ValorOperacao == 1){

           //SELECT OPERAÇÃO 
          $(".fxd").append("<div class='form-group col-md-4'><select id=tabela name='tabela' class=form-control><option value='' disabled selected>selecione o tipo de tabela</option><option value='8'>Tabela 1 - Tx 8,00%</option></select></div>");

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

                           //"FORM" COM OS CAMPOS VALOR , PARCELAS , BANDEIRA ,NUMERO DO CARTÃO, TITULAR DO CARTÃO, MÊS VENVIMENTO, ANO VENCIMENTO, CODIGO DE SEGURANÇA
                           $("#dados1").append("<div class='form-group col-md-4'><label for=valor class='col-sm-3 col-form-label'>Valor R$</label><div class='col-sm-9'><input type=text class='form-control valor' name='valor' id='valor'  ></div></div><div class='form-group col-md-2'> <select id=QtParcelas name='QtParcelas' class=form-control><option value= disabled selected>Qtde de Parcelas</option></select></div><!-- Valor total --><div class='input-field col-md-3' id=total style='margin: 5px; font-weight: bold;'><span type='text' class='form-control valor'  id='valorTotal'></span></div> <input type='text' name='valorTotal' id='valorFinal' readonly> <!-- BANDEIARA --><div class='form-group col-md-2'> <select id=bandeiraBancaria name='bandeiraBancaria' class=form-control><option value= disabled selected>Bandeira do Cartão</option><option value=Elo >Elo</option><option value=Visa >Visa</option><option value=Amex >Amex</option><option value=HiperCard >HiperCard</option><option value=MasterCard >MasterCard</option></select></div><!-- Numero do cartão --><div class='form-group col-md-4'><label for=numeroCartao class='col-sm-4 col-form-label'>Nº do Cartão</label><div class='col-sm-8'><input type=text class=form-control id=numeroCartao name='numeroCartao' placeholder=></div></div><!-- Titular do cartão --><div class='form-group col-md-5'><label for=titular class='col-sm-4 col-form-label'>Titular do Cartão</label><div class='col-sm-8'><input type=text class=form-control id=titular name='titular' placeholder=></div></div><!-- Mês Vencimento --><div class='form-group col-md-2'><select id=mesVenci name='mesVenci' class=form-control><option value= disabled selected>Mês venci...</option><option value=Janeiro>Janeiro</option><option value=Fevereiro>Fevereiro</option><option value=Março>Março</option><option value=Abril>Abril</option><option value=Maio>Maio</option><option value=Junho>Junho</option><option value=Julho>Julho</option><option value=Agosto>Agosto</option><option value=Setembro>Setembro</option><option value=Outubro>Outubro</option><option value=Novembro>Novembro</option><option value=Dezembro>Dezembro</option></select></div> <!-- Ano vencimento --><div class='form-group col-md-2'><select id=anoVenci name='anoVenci' class=form-control> <option value= disabled selected>Ano venci...</option><option value=2020>2020</option><option value=2021>2021</option><option value=2022>2022</option><option value=2023>2023</option><option value=2024>2024</option><option value=2025>2025</option><option value=2026>2026</option><option value=2027>2027</option><option value=2028>2028</option><option value=2029>2029</option></select></div><!-- codigo Sg --><div class='form-group col-md-4'><label for=codigoSeguranca class='col-sm-6 col-form-label'>Codigo .Segurança</label><div class='col-sm-6'><input type=text class=form-control id=codigoSeguranca name='codigoSeguranca' placeholder=></div></div>");
                           
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
                           
                           // //Validation for Etapas
                           $('#valor').mask('000.000.000.000.000,00', {reverse: true});
                           $('#numeroCartao').mask('0000-0000-0000-0000');
                           $('#codigoSeguranca').mask('0000');

                           break;
                       case '9':

                           break;  

                   }

                   $("#valor").blur(function(){

                       var valor = $('#valor').val();
                       var taxa = conversor($("#tabela option:selected").val());

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

                                   valorParcelaComposto = valorParcelaComposto.toLocaleString("pt-BR" ,{style: 'corrency' , corrency: "BRL" });
                                   //OPTIONS DO SELECT QUANTIDADE DE PARCELAS
                                   $("#QtParcelas").append('<option value='+ i +' class=qtdp>'+ i +'x - R$ '+ valorParcelaComposto +'</option>');
                               }
                           }
                       }
                   });

                   //FUNÇÃO PARA CALCULAR E MOSTRAR O VALOR TOTAL
                   $('#QtParcelas').blur(function(){
                       var multiplicador = $('#QtParcelas option:selected').val();
                       var taxa = $("#tabela option:selected").val();
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
                           $("#total").text('Valor total: R$ '+ valorParcelaComposto);
                           $("#valorFinal").val(valorParcelaComposto);
                       }else{
                           $("#total").text('Valor total: R$ ');
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
           $("#dados2").append("<div id=open><div class='form-group col-md-4'><select name=pessoa id=pessoa class='form-control'><option selectend disebled>Selecione o tipo de pessoa</opition><option value='Pessoa Fisíca'>Pessoa Fisíca</option><option value='Pessoa Juridica' >Pessoa Juridica</option></select></div></div>");
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
           $("#open1").remove();
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
    valParcela= valParcela.toFixed(2);
    return valParcela;
}

//VALIDAÇÃO ETAPA 2
$('#cpf').mask('999.999.999-99');
$('#rg').mask('99.999.999-9');
$('#telefone').mask('(00) 0000-0000');
$('#celular').mask('(00) 00000-0000');
$('#residen').mask('0000');
// $('#cep').mask('00-000-000');
$('#orgaoEmissor').mask('AAA');
$('#dataExpedicao').mask('00/00/0000');
$('#dataNascimento').mask('00/00/0000');

//VALIDAÇÃO ETAPA 3
$('#agencia').mask('00000000000000000');
$('#conta').mask('00000000-0');
$('#digito').mask('000');
$('#dataDeAbertura').mask('00/00/0000');