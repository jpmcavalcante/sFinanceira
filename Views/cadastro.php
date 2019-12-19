<div class="alert alert-primary hidden"  role="alert">
    Salvo com sucesso
</div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">Dados Pessoais</a></li>
        <li role="presentation"><a href="#dados_de_acesso" aria-controls="dados_de_acesso" role="tab" data-toggle="tab">Dados de Acesso</a></li>
        <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="dados_pessoais">
            <div style="padding-top:20px;">
                <form class="form-horizontal" action="<?php BASE_URL;?>cadastro/cadastrar" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name='nome' class="form-control" id="nome" placeholder="Nome Completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">CPF</label>
                        <div class="col-sm-10">
                            <input type="text" name='cpf' class="form-control" id="cpf" placeholder="CPF">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="#dados_de_acesso" class="btn btn-success" aria-controls="dados_de_acesso" role="tab" data-toggle="tab">Proximo</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div role="tabpanel" class="tab-pane" id="dados_de_acesso">
            <div style="padding-top:20px;">
                <form class="form-horizontal"  action="" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Usuário</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="usuario" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="#endereco" class="btn btn-success" aria-controls="endereco" role="tab" data-toggle="tab">Proximo</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="endereco">
            <div style="padding-top:20px;">
                <form class="form-horizontal"  action="" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Rua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rua" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Bairro</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bairro" placeholder="bairro">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    
</div>
