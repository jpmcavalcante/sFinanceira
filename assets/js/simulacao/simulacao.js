$(document).ready(function(){
    //SIMULAÇAO INICIO
   $("#operacao").on("change",function(){

       var ValorOperacao = $(this).val();
       
       if(ValorOperacao == 1){

           //SELECT OPERAÇÃO 
          $(".fxd").append('<div class="form-group col-md-4"><select id="tabela" class="form-control"><option value="" disabled selected>selecione o tipo de tabela</option><option value="3.7747">Tabela A</option> <option value="3.3667">Tabela B</option> <option value="3.0847">Tabela C</option> <option value="2.7198">Tabela D</option> <option value="2.5697">Tabela E</option> <option value="2.3397">Tabela F</option> <option value="2.1836">Tabela G</option> <option value="2.0244">Tabela H</option> <option value="1.9439">Tabela I</option> <option value="1.8627">Tabela J</option> <option value="1.7807">Tabela K</option> <option value="1.6977">Tabela L</option> <option value="1.6145">Tabela M</option></select></div>'); 
        
          
          if ($('#tabela').length) {

                $('#tabela').change(function(){

                    var ValorAnterior = $('#valorSimulacao').val();

                    var Valor = $(this).val();

                    switch(Valor){
                        case '3.7747':// letra A
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});

                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '3.3667':// letra  B
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '3.0847':// letra C
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '2.7198':// letra D
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '2.5697':// letra E
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '2.3397':// letra F
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '2.1836':// letra G
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '2.0244':// letra H
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '1.9439':// letra I
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '1.8627':// letra J
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '1.7807':// letra K
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                         case '1.6977':// letra L
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;
                        case '1.6145':// letra M
                            $('.valor').remove();
                            $('#inp').append('<div class="valor form-group col-md-4"><label for="valorSimulacao">Valor R$ </label><input id="valorSimulacao" type="text" class="form-control" placeholder="Valor da simulação"></div>');                       
                            $('#valorSimulacao').mask('000.000.000,00', {reverse: true});
                            
                            if(ValorAnterior != null){
                                $('#valorSimulacao').val(ValorAnterior);
                            }
                            break;



                    }

                });

                $('#btnSimulador').click(function(){

                    var valor =$('#valorSimulacao').val();
                    var taxa = parseFloat($("#tabela option:selected").val());

                    console.log(taxa)

                    if(valor.indexOf(".") >= 1){
                        var arrq = valor.split('.');
                        arrq = arrq[0]+arrq[1]
                        var arr = arrq.split(',');

                        valor = arr[0] + "."+ arr[1];
                        
                    }else{
                        valor = valor.replace(',','.');
                    }

                    if($('#cards').length){

                        $('#cards').remove();

                        $('#simulacao').append('<div id="cards" ></div>');

                        for( var i = 1; i <= 12; i++){
        
                            var valorParcelaComposto =jurosComposto(valor, taxa, i);
        
                            $('#cards').append('<div class="form-group col-md-3"><div class="cell card status-card small-6 medium-4 large-3"><div class="user-info"><h4 id="parcela">'+i+'X de '+valorParcelaComposto+'</h4><div id="limite">Limite necessário '+valorParcelaComposto+'</div></div></div></div>');
                        }
                        
            
                        
                    }else{
                        $('#cards').remove();

                        $('#simulacao').append("<div id=cards ></div>")

                        for( var i = 1; i <= 12; i++){
        
                            var valorParcelaComposto = jurosComposto(valor, taxa, i);
                                    
        
                            $('#cards').append('<div class="form-group col-md-3"><div class="cell card status-card small-6 medium-4 large-3"><div class="user-info"><h4 id="parcela">'+i+'X de '+valorParcelaComposto+'</h4><div id="limite">Limite necessário '+valorParcelaComposto+'</div></div></div></div>');
                        }
                    }
                });
          };
       }
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