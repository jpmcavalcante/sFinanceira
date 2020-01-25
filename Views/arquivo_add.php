<div class="row mb-2 d-flex justify-content-center" style="width: 85vw; background: #ccc; padding: 2%; margin: 0; border-radius: 1%;">
    <div class="container-fluid">
    
    

        <!--FIM SEGUNDO MENU-->
        <div class="tab-content container" style="">
            
            <ul class="nav nav-tabs" style="margin-bottom: 3%;">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Banco de Arquivos</a>
                </li>
            </ul>

            <form id="addArquivo" name="addArquivo" action="<?php echo BASE_URL;?>Arquivo/add_action" method="post" enctype="multipart/form-data">

                <label for="">Nome do Arquivo</label><br>
                <input type="text" name="nomeArquivo"><br><br>
                
                <label for="">Descrição</label><br>
                <textarea name="descricao" cols="60" rows="4" maxlength="100"></textarea><br><br>

                <label for="">PDF</label><br>
                <input type="file" name="arquivo" id="arquivo" accept="application/pdf"><br><br>
                <button type="submit" class="btn btn-info">Salvar</button>
            </form>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div>