
<section></section>
<div class="container">
    
<h1 class="page-header">Categoria</h1>



<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:250px;">idcategoria</th>
            <th style="width:250px;">nombre</th>
            <th style="width:250px;">descripcion</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idcategoria; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            
            <td>
                <a href="?c=categoria&a=Crud&idcategoria=<?php echo $r->idcategoria; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=categoria&a=Eliminar&idcategoria=<?php echo $r->idcategoria; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<section></section>