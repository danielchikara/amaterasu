<section></section>
<div class="container">
    
 

<h1 class="page-header">Productos </h1>



<table class="table table-striped">
    

    <thead>
        <tr>
            <th style="width:180px;">idproducto</th>
            <th style="width:120px;">idcategoria</th>
            <th style="width:120px;">codigo</th>
            <th style="width:120px;">nombre</th>
            <th style="width:120px;">stock</th>
            <th style="width:120px;">descripcion</th>
            <th style="width:120px;">imagen</th>
            <th style="width:120px;">estado</th>
            <th style="width:120px;">precio</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idproducto; ?></td>
            <td><?php echo $r->idcategoria; ?></td>
            <td><?php echo $r->codigo; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->stock; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            <td><?php echo $r->imagen; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td><?php echo $r->precio; ?></td>
            
            <td>
                <a href="?c=producto&a=Crud&idproducto=<?php echo $r->idproducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idproducto=<?php echo $r->idproducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a class="btn btn-primary" href="http://localhost:8080/phpmyadmin/amaterasuclases/pdf/">Importar pdf</a>
<section></section>