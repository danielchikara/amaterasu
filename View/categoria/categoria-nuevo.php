<section></section>
<div class="container">
    

<h1 class="page-header">
    Nueva Categoria
</h1>



<form id="frm-proveedor" action="?c=Categoria&a=Guardar" method="post" enctype="multipart/form-data">

  

    <div class="form-group">
      <label>nombre</label>
      <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control" placeholder="Ingrese nombre" autofocus="autofocus" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $pvd->descripcion; ?>" class="form-control" placeholder="Ingrese descripcion" data-validacion-tipo="requerido|min:100" />
    </div>

   

    
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
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