<section></section>
<div class="container">
    

<h1 class="page-header">
    <?php echo $pvd->idcategoria != null ? $pvd->nombre: 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=categoria">Categoria</a></li>
  <li class="active"><?php echo $pvd->idcategoria != null ? $pvd->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-proveedor" action="?c=categoria&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcategoria" value="<?php echo $pvd->idcategoria; ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control" placeholder="Ingrese Nombre" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $pvd->descripcion; ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:100" />
    </div>

    

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>

<section></section>