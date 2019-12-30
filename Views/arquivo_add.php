<div class="row mb-2 cd-flex justify-content-center">
    <div class="container-fluid">
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Banco de Arquivos</a>
        </li>
    </ul>

    <!--FIM SEGUNDO MENU-->
<div class="tab-content">

    <form id="addArquivo" name="addArquivo" action="<?php echo BASE_URL;?>Arquivo/add_action" method="post" enctype="multipart/form-data">

        <label for="">Nome do Arquivo</label><br>
        <input type="text" name="nomeArquivo"><br><br>
        
        <label for="">Descrição</label><br>
        <textarea name="descricao" cols="60" rows="6" maxlength="100"></textarea><br><br>

        <label for="">PDF</label><br>
        <input type="file" name="arquivo" id="arquivo" accept="application/pdf"><br><br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>

</div><!-- /.col -->
    </div><!-- /.row -->
</div>