<?php if (!empty($erros['suc'])): ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p><?php echo $erros['suc']; ?></p>
    </div>
<?php elseif (!empty($erros['er'])): ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p><?php echo $erros['er']; ?></p>
    </div>
<?php endif; ?>



<form method="post" action="<?php echo BASE_URL;?>Cliente/edit_action/<?php echo $id_cli;?>" enctype="multipart/form-data">

<form id="cadCliente" name="cadCliente" method="post" action="<?php echo BASE_URL;?>Cliente/edit_action/<?php echo $id_cli;?>">



    <h3>2. DADOS PESSOAIS</h3>
    <div class="well">
        <div class="row">

            <div class="container">
                <div class="form-row">

                    <label>Imagem</label>

                    <div class="imgEdit"> 

                        <?php foreach($listar['images'] as $id_image => $url): ?>
                            <div class="cli_image">
                                <label  for="file" class="center" style="cursor: pointer"><img id="img" src="<?php echo $url; ?>" class="img-fluid" alt="Imagem responsiva" style="width: 200px; height: 150px; border-radius: 10px"></label>
                                <a href="javascript:;" >[ apagar ]</a>
                                <input type="hidden" name="cli_images" value="<?php echo $id_image ;?>">
                            </div>
                        <?php endforeach;?>
                    </div> 

                    <div class="form-group col-md-3">
                        <input type="file"  id="file" name="foto" accept="image/jpeg, image/jpg, image/png ,application/pdf" hidden>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class='"form-control"' id="cpf" name="cpf" value="<?php echo $listar['cpf'];?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="nome" >Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $listar['nome'];?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class="form-control" value="<?php echo $listar['email'];?>">
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label for="rg">RG</label>
                        <input id="rg" type="number" name="rg" class="form-control" value="<?php echo $listar['rg'];?>">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="orgaoEmissor">Orgão Emissor</label>
                        <input id="orgaoEmissor" name="orgaoEmissor" type="text" class="form-control" value="<?php echo $listar['emissor'];?>" >
                    </div>


                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <input id="estadoEmissor" name="estadoEmissor" class="form-control" value="<?php echo $listar['estado_emissor'];?>" >



                    </div>

                    <div class="form-group col-md-2">
                        <label for="dataExpedica">Data expedição do RG</label>
                        <input id="dataExpedicao" name="dataExpedicao" type="text" class="form-control" value="<?php echo $listar['data_expedicao'];?>" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="dataNascimento">Data de nascimento</label>
                        <input id="dataNascimento" name="dataNascimento" type="text" class="form-control" value="<?php echo $listar['data_nascimento'];?>">
                    </div>

                    <div class="form-group col-md-2">
                        <label>Estado civil</label>
                        <select id="estadoCivil" name="estadoCivil" class="form-control" >
                            <option value="" disabled selected>Estado civil</option>
                            <option value="Solteiro(a)" <?php echo $listar['estado_civil']=='Solteiro(a)'?'selected':'';?>>Solteiro(a)</option>
                            <option value="Casado(a)" <?php echo $listar['estado_civil']=='Casado(a)'?'selected':'';?>>Casado(a)</option>
                            <option value="Divorciado(a)" <?php echo $listar['estado_civil']=='Divorciado(a)'?'selected':'';?>>Divorciado(a)</option>
                            <option value="Viúvo(a)" <?php echo $listar['estado_civil']=='Viúvo(a)'?'selected':'';?>>Viúvo(a)</option>
                        </select>
                    </div>

                    <div class=" form-group col-md-2">
                        <label>Sexo</label>
                        <select id="genero" name="sexo" class="form-control" >
                            <option value="" disabled selected>Sexo</option>
                            <option value="Masculino" <?php echo $listar['sexo']=='Masculino'?'selected':'';?>>Masculino</option>
                            <option value="Feminino" <?php echo $listar['sexo']=='Feminino'?'selected':'';?>>Feminino</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" name="telefone" type="text" class="form-control" value="<?php echo $listar['telefone'];?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="celular">Celular</label>
                        <input id="celular" name="celular" type="text" class="form-control" value="<?php echo $listar['celular'];?>">
                    </div>
                </div>

            </div>

            <div class="col-md-12" style="margin-top: 30px;">

                <div class="form-group col-md-3">
                    <label for="cep" >CEP</label>
                    <input type="text"  id="cep" name="cep" class="form-control" value="<?php echo $listar['cep'];?>">
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rua">Endereço</label>
                        <input id="endereco" name="endereco" type="text" class="form-control" value="<?php echo $listar['endereco'];?>">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="numero">Nº</label>
                        <input id="numero" name="numero" type="number" class="form-control" value="<?php echo $listar['numero'];?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input id="complemento" name="complemento" type="text" class="form-control" value="<?php echo $listar['complemento'];?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" name="bairro" type="text" class="form-control" value="<?php echo $listar['bairro'];?>">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="uf">Estado</label>
                        <input id="estado" name="estado" type="text" maxlength="2" class="form-control" value="<?php echo $listar['estado'];?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" name="cidade" type="text" class="form-control" value="<?php echo $listar['cidade'];?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tipoResidencia">Tipo de residencia</label>
                        <input id="tipoResidencia" name="tipoResidencia" type="text" class="form-control" value="<?php echo $listar['tipo_residencia'];?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tempoResidencia">Tempo de Residencia (anos)</label>
                        <input id="tempoResidencia" name="tempoResidencia" type="number" class="form-control" value="<?php echo $listar['tempo_residencia'];?>">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="naturalidade">Naturalidaade</label>
                        <input id="naturalidade" name="naturalidade" type="text" class="form-control" value="<?php echo $listar['naturalidade'];?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nomePai">Nome do pai</label>
                        <input id="nomePai" name="nomePai" type="text" class="form-control" value="<?php echo $listar['nome_pai'];?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nomeMae">Nome da mãe</label>
                        <input id="nomeMae" name="nomeMae" type="text" class="form-control" value="<?php echo $listar['nome_mae'];?>">
                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>

    <button type="submit" name="enviar">Enviar</button>

</form>




















