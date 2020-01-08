<section></section>
<div class="container">

<h1 class="page-header">
    <?php echo $prod->idproducto != null ? $prod->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active"><?php echo $prod->idproducto != null ? $prod->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=producto&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idproducto" value="<?php echo $prod->idproducto; ?>" />

     <div class="form-group">
        <label>codigo categoria</label>
        <input type="text" name="idcategoria" value="<?php echo $prod->idcategoria; ?>" class="form-control" placeholder="Ingrese NIT Proveedor" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php echo $prod->codigo; ?>" class="form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese precio unitario" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="<?php echo $prod->stock; ?>" class="form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>

     <div class="form-group">
        <label>Descripción del Producto</label>
        <input type="text" name="descripcion" value="<?php echo $prod->descripcion; ?>" class="form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>

     <div class="form-group">
        <label>imagen</label>
        <input type="text" name="imagen" value="<?php echo $prod->imagen; ?>" class="form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>

     <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $prod->estado; ?>" class="form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>
    
     <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $prod->precio; ?>" class="form-control" placeholder="Ingrese descripción producto"  />
    </div>


     <div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">ARCHIVO</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
						
					
						
					</div>
				</div>
				
    
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
<section></section>
