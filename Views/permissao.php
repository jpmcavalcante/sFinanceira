
<section class="content-fluid container">

    <h1 class="info-box-text">Grupos de Permissões</h1>

    <div class="box">
        
           <div class="box-body">
               <table class="table table table-bordered table-light">
                   <tr class="bg-info text-center">
                       <th>Título da Permissão</th>
                       <th>Usuários Ativos</th>
                       <th>Ações</th>
                   </tr>

                   <?php foreach ($list as $item): ?>
                     <tr class="text-center">
                         <td><?php echo $item['name'];?></td>
                         <td><?php echo $item['totalColab'];?></td>
                         <td>
                             <div class="btn-group">
                                 <a href="<?php echo BASE_URL.'permissao/edit/'.$item['id'];?>" class="btn btn-xs btn-primary">Editar</a>

                                 <a href="<?php echo BASE_URL.'permissao/del/'.$item['id'];?>" class="btn btn-xs btn-danger <?php echo ($item['totalColab'] != '0')? 'disabled': '';?>">Excluir</a>
                             </div>
                         </td>
                     </tr>
                   <?php endforeach; ?>
               </table>
               <div class="box-tools">
                    <a href="<?php echo BASE_URL.'permissao/add' ;?>" class="btn btn-info">Adicionar</a>
               </div>
           </div>
    </div>
</section>

