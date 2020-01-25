        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
        <html leng="pt-br">
        <head>
            <link rel="stylesheet" type="text/css" href="style.css"/>
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="caixa">
            <div class="esquerda">
                <span class="titulo">Produto:</span><span > </span><br/>
                <span >Cartão de Crédito  - TT L MS CRED</span>
            </div>
            <div class="direita">
                <span class="linha"> Id da proposta: <? echo $result['id']?></span><br>
                <span class="linha">Data da Proposta: <? echo $result['data_proposta']?></span>
            </div>
        </div>
        <div class="caixa">
            <div class="linha">
                <span class="titulo">Valor Solicitado: </span><span >R$ <? echo $result['valor'] ?></span>
                <span class="titulo">Quantidade de parcelas: </span><span >x de R$  - </span>
                <span class="titulo">Total: </span><span >R$ <? echo $result['valorFinal'] ?> </span><br/>
            </div>
            <div  class="linha">
                <span class="titulo">Bandeira do Cartão: </span><span ><? echo $result['bandeiraCartao'] ?> - </span>
                <span class="titulo">Número do cartão: </span><span ><? echo $result['codSeguranca'] ?> - </span>
                <span class="titulo">Titular do Cartão: </span><span><? echo $result['titular'] ?></span><br/>
            </div>
            <div  class="linha">
                <span >FONTES</span><span > </span><br/>
            </div>
        </div>
        <div class="caixa2">
            <div class="linha">
                <span class="titulo">Dados Pessoais:</span><br/>
            </div>
            <div class="linha">
                <span  class="titulo">Nome: </span><span ><? echo $result['nome_cli']?> - </span>
                <span  class="titulo">CPF: </span><span ><? echo $result['cpf'] ?> -</span>
                <span  class="titulo">RG: </span><span ><? echo $result['rg'] ?>- </span>
                <span  class="titulo">Orgão Emissor: </span><span ><? echo $result['emissor']?></span>
                <span > </span>
            </div>  
            <div class="linha">
                <span class="titulo">Data expedição RG: </span><span ><? echo $result['data_expedicao']?></span><span >- </span>
                <span class="titulo">E-mail: </span><a ><span> <? echo $result['email']?> - </span></a>
                <span class="titulo">Data Nascimento: </span><span ><? echo $result['data_nascimento']?></span><span >- </span>
                <span class="titulo">Estado civil: </span><span ><? echo $result['estado_civil']?></span>
                <span > </span><br/>
            </div>
            <div class="linha">
                <span class="titulo">Sexo: </span><span ><? echo $result['sexo']?></span><span >- </span>
                <span class="titulo">Telefone: </span><span ><? echo $result['telefone']?></span><span >- </span>
                <span class="titulo">Celular: </span><span ><? echo $result['celular']?></span>
                <span > </span><br/>
            </div>
            <div class="linha">
                <span class="titulo">Endereço: </span><span ><? echo $result['endereco']?> , </span>
                <span class="titulo">No </span><span ><? echo $result['numero']?></span><span >- </span>
                <span class="titulo">Bairro: </span><span ><? echo $result['bairro']?></span>
                <span > </span><br/>
            </div>
            <div class="linha">
                <span class="titulo">Cidade: </span><span ><? echo $result['cidade']?> </span><span >- </span>
                <span class="titulo">Estado: </span><span ><? echo $result['estado']?> </span><span >- </span>
                <span class="titulo">Cep: </span><span ><? echo substr($result['cep'], -8, -4)?> - <? echo substr($result['cep'], -4)?></span><span >- </span>
                <span class="titulo">Tipo de residência: </span><span ><? echo $result['tipo_residencia']?></span><span >- </span>
                <span class="titulo">Tempo de residência: </span><span ><? echo $result['tempo_residencia']?></span>
                <span > </span><br/>
            </div>
            <div class="linha">
                <span class="titulo">Naturalidade: </span><span ><? echo $result['naturalidade']?></span><span >- </span>
                <span class="titulo">Nome do Pai: </span><span ><? echo $result['nome_pai']?> </span><span >- </span>
                <span class="titulo">Nome da Mãe: </span><span ><? echo $result['nome_mae']?></span>
                <span > </span><br/>
            </div>
        </div>
        <div class="caixa">
            <div >
                <span class="titulo">Dados Bancários:</span><span > </span><br/>
            </div>
            <div >
                <span class="titulo">Banco: </span><span ><? echo $result['banco']?> </span><span >- </span>
                <span class="titulo">Agência: </span><span > <? echo $result['agencia']?></span><span >- </span>
                <span class="titulo">Conta: </span><span ><? echo $result['conta']?></span><span >- </span>
                <span class="titulo">Tipo de Conta: </span><span ><? echo $result['group1']?></span>
                <span > </span><br/>
            </div>
            <div >
                <span class="titulo">Data de Abertura: </span><span ><? echo $result['dtAbertura']?></span><span >- </span>
                <span class="titulo">Conta de Terceiros: </span><span ><? echo $result['conta_terceiro']?></span>
                <span ></span><br/>
            </div>
        </div>

        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 2 -->

        <span style=""> </span><br/></SPAN></div>
        
        <div >
            <span >DADOS DO(A) DEVEDOR(A)</span><br>
        </div>
        <div >
            <span >Nome: <? echo$result['nome']?>    Data Nascimento: <? echo $result['data_nascimento']?></span><br/>
        </div>
        <div >
            <span >CPF/CNPJ: <? echo$result['cpf']?>     RG:<? echo $result['rg'] ?>    Estado Civil: <? echo $result['estado_civil'] ?></span><br/>
        <div >
            <span >Endereço Residencial:<? echo $result['endereco']?></span><br/>
        </div>
        <div >
            <span >No: <? echo $result['numero']?> Complemento: <? echo $result['complemento']?> Bairro:<? echo $result['bairro']?></span><br/>
        </div>
        <div >
            <span >Cidade: <? echo $result['cidade']?> Estado:<? echo $result['estado']?> CEP: <? echo substr($result['cep'], -8, -4)?> - <? echo substr($result['cep'], -4)?></span><br/>
        </div>
        <div >
            <span >Telefone Fixo: <? echo $result['telefone']?> Telefone Celular: <? echo $result['celular']?></span><br/>
        </div>
        <div >
            <span >DADOS DO SERVIÇO</span><br/>
        </div>
        <div >
            <span >Valor Solicitado: R$ <? echo $result['valor']?> Valor Total: R$ <? echo $result['valorFinal']?></span><br/>
        </div>
        <div >
            <span >Quantidade de parcelas:12   Valor da Parcela: <? echo $result['valor_parcela']?></span><br/>
        </div>
        <div >
            <span >Primeiro Vencimento: Vencimento fatura cartão</span><br/>
        </div>
        <div >
            <span >Dados para Liberação:</span><br/>
        </div>
        <div >
            <span >Banco: <? echo $result['banco']?> AGENCIA: <? echo $result['agencia']?> CONTA: <? echo $result['conta']?></span><br/>
        </div>
        <div >
            <span >CONSULTA E INFORMAÇÕES AO BACEN E DEMAIS ORGÃOS</span><br/> 
        </div>
        <div >
            <span >SCR/SERASA/SPC -Declaro, sob as penas da lei, que as informações ora prestadas são verídicas, completas e exatas, sob pena de aplicação das sanções legais, inclusive do disposto no Artigo</span><br/>
        </div>
        <div >
            <span >64  da  Lei  8.383/91.  Autorizo  a  H  CRED  e  as  instituições  financeiras  a  ele  ligadas  ou  por  ele  controladas,  bem  como  seus  sucessores,  a:  (a)  consultar,  a  qualquer  tempo,  os  débitos </span><br/>
        </div>
        <div >
            <span >e responsabilidades decorrentes de operações de crédito constantes em meu nome do Sistema de Informações de Crédito (SCR) gerido pelo Banco Central do Brasil, ou dos sistemas que venham</span><br/></div>
        <div >
            <span >a complementá-lo; e (b) verificar a exatidão de meus dados pessoais e informações cadastrais, bem como a proceder a análise de risco para efeito de concessão de crédito, inclusive através da</span><br/>
        </div>
        <div >
            <span >divulgação desses dados a empresas terceiras, incluindo, sem limitação, SERASA - Centro de Serviços de Bancos S/A ou SPC - Serviço de Proteção ao Crédito. CET - O Devedor concorda que: (a)</span><br/>
        </div>
        <div >
            <span >o Custo Efetivo Total (CET) acima previsto foi calculado considerando-se os fluxos referentes às liberações nesta data e os pagamentos descritos, incluindo taxas de juros, tributos e tarifas; (b)  os</span><br/>
        </div>
        <div >
            <span >fluxos considerados no cálculo do CET e a taxa percentual indicada na referida letra, representam as condições vigentes na presente data de cálculo; e (c) no caso do crédito ser liberado em parcelas</span><br/>
        </div>
        <div >
            <span >será calculado e informado ao Devedor o respectivo CET, observadas as taxas e prazos acima estabelecidos.</span><span style="font-style:normal;font-weight:normal;font-size:9pt;font-family:ArialMT;color:#000000"> </span><br/>
        </div>
        <div >
            <span >O devedor está ciente e concorda com as taxas, tarifas e juros cobrados, bem como está ciente que o parcelamento será realizado por meio de cartão de crédito por ele indicado.</span><br/>
        </div>
        <br><br><br><br><br>
        <div ><span >Assinatura: </span><span >_____________________________________________________________________________</span><br/></SPAN></div>
        
        
        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 3 -->

        <div >
            <span >HCred - Gestão de Propostas</span><br/>
        </div>
        <div >
            <span>Após firmada a negociação e assinado o presente, o DEVEDOR poderá desistir do empréstimo, desde cumulativamente, devolva a quantia integral emprestada, pague a quantia correspondente a</span><br/>
        </div>
        <div >
            <span>12% (Doze por cento) do valor contratado, quantia esta estipulado como multa por descumprimento contratual, encargos fiscais e a ainda a desistência deverá ocorrer dentro do prazo máximo de</span><br/>
        </div>
        <div >
            <span >até 7 (Sete) dias, contados a partir da assinatura do presente Termo de Adesão.</span><br/>
        </div>
        <div >
            <span >Havendo  a  desistência  do  presente,  por  parte  do  DEVEDOR  e  ocorrendo  o  inadimplemento  quanto  ao  pagamento  da  multa  contratual  e  demais  encargos,  poderá  a  INTERMEDIADORA </span><br/>
        </div>
        <div >
            <span >–</span><span > CONCEDENTE, depois de constituído o DEVEDOR em mora, tomar as medidas judiciais cabíveis para receber seu crédito, bem como p romover a competente Execução por Quantia Certa, com</span><br/>
        </div>
        <div >
            <span >base nos artigos, 566, I e 585, II, ambos do Código de Processo Civil, acrescidos de juros legais, correção monetária e 20% de honorários advocatícios, além de requerer a inclusão do nome do</span><br/>
        </div>
        <div >
            <span >DEVEDOR no Cadastro de Maus Pagadores, Protestos, Serasa, bastando simples petição requerendo tal providência. O que desde já concordam expressamente as partes.</span><br/>
        </div>
        <div >
            <span >Ainda, o DEVEDOR se compromete a assinar com o presente, o Termo de Entendimento do Regulamento de Adesão para Contratantes.</span><br/></div>
        <div >
            <span >As partes contratantes elegem o Foro da comarca de Camacari-</span><span>BA</span><br/>
        </div>
        <div>
            <span ><? echo strtoupper($result['nome'])?></span><br/>
        </div>
        <div >
            <span >CAMACARI, </span></SPAN><br/>
        </div>
        <div >
            <span > <? setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');date_default_timezone_set('America/Sao_Paulo'); echo  strftime('%d de %B de %Y')?></span></SPAN><br/>
        </div>
        <div >
            <span >DE</span><span > </span><br/>
        </div>
        <br><br><br><br><br>
        <div ><span >Assinatura: </span><span >_____________________________________________________________________________</span><br/></SPAN></div>
        
        

        <pagebreak type="NEXT-ODD" pagenumstyle="1" />
        <!-- PAGINA 4 -->
        

        <div>
            <span >M$ CRÉDITO - Gestão de Propostas</span><br/>
        </div>
        <div >
            <span >Declaração</span><br/>
        </div>
        <div >
            <span >AVARÉ, 17 DE DEZEMBRO DE </span><br/>
        </div>
        <div >
            <span >Eu, <? echo strtoupper($result['nome'])?> RG <? echo $result['rg'] ?> e CPF <? echo $result['cpf']?>, residente <? echo $result['endereco']?> - No:<? echo strtoupper($result['numero'])?> <? echo strtoupper($result['complemento'])?> - Bairro:<? echo $result['bairro']?> - Cidade: <? echo $result['cidade']?> - Estado:<? echo $result['uf'] ?> - CEP:<? echo substr($result['cep'], -8, -4)?> - <? echo substr($result['cep'], -4)?></span><br/>
        </div>
        <div >, reconheço a transação realizada na empresa Ms Credito no dia <? echo $result['data_proposta']?>, no valor de R$ <? echo $result['valorFinal']?> parcelado em <? echo $result['qtParcelas']?> vezes de R$ <? echo $result['valor_parcela']?> no cartão bandeira <? echo $result['bandeiraCartao']?> final número <? echo substr($result['numeroCartao'], -4)?></span><br/>
        </div>
        <div >
            <span >Sem mais para o momento.</span><br/>
        </div>
        <div>
            <span >Nome: <? echo strtoupper($result['nome'])?></span><br/>
        </div>
        <div>
            <span >FONTES CPF: <? echo $result['cpf']?></span><span ></span><br/></div>
        </html>