
<div class="row mb-2 cd-flex justify-content-center">
    <div class="container-fluid">
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Banco de Arquivos</a>
        </li>
        <a href="<?php echo BASE_URL.'Arquivo/add' ;?>" type="button" class="btn btn-primary" style="margin-left: 70%;">Adicionar novo arquivo</a>
    </ul>
    
    <div style="margin: 40px"></div>
<div class="tab-content">
<table class="table">
  <thead>
    <tr>
        <th scope="col" style="width: 30%">Nome</th>
        <th scope="col" style="width: 55%" class="center">Descrição</th>
        <th scope="col" style="width: 15%">Ações</th>
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

</div><!-- /.col -->
    </div><!-- /.row -->
</div>