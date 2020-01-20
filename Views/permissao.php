<section>
<h1>Permissões</h1>
</section>


<section class="content-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="info-box-text">Grupos de Permissões</h3>
            <div class="box-tools">
                <a href="<?php echo BASE_URL.'permissao/add' ;?>" class="btn btn-success">Adicionar</a>
            </div>
        </div>
           <div class="box-body">
               <table class="table">
                   <tr>
                       <th>nome da Permissão</th>
                       <th>Qtd. de Ativos</th>
                       <th>Ações</th>
                   </tr>

                   <?php foreach ($list as $item): ?>
                     <tr>
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
           </div>
    </div>
</section>

