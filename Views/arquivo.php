
<div class="row mb-2 cd-flex justify-content-center">
    <div class="container-fluid">
    
        
    
        <div class="tab-content container" style="width: 85vw; text-align: center;">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Banco de Arquivos</a>
                </li>
            </ul>

            <table class="table table-bordered table-light">
                <thead>
                    <tr class="bg-info">
                        <th scope="col" style="width: 40%">Nome</th>
                        <th scope="col" style="width: 40%" class="center">Descrição</th>
                        <th scope="col" style="width: 20%">Ações</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php foreach ($list as $item): ?>
                        <tr>
                            <td><?php echo $item['nome_arquivo'];?></td>
                            <td><?php echo $item['descricao'];?></td>
                            <td>
                                <a class="btn btn-success btn-xs" href="<?php echo BASE_URL;?>Arquivo/view_action?arquivo=arquivos/PDFs/bancos/<?php echo $item['caminho'];?>" target="_blank">Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="<?php echo BASE_URL;?>Arquivo/download_action?arquivo=arquivos/PDFs/bancos/<?php echo $item['caminho'];?>">Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   

            <a href="<?php echo BASE_URL.'Arquivo/add' ;?>" type="button" class="btn btn-primary" style="margin-top: 20%; float: left;">Adicionar Arquivo</a>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>