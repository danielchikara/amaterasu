function add(valor,valor2){

   $.get('view/compra/add.php',{id:valor,action:valor2},function(data){
              $('idproducto').html(data);
   })

}

function add2(valor,valor2){

  $.get('view/compra/add.php',{id:valor,action:valor2},function(data){
       window.location='index.php?c=compra&a=carro&idproducto=?';
  })

}

function add3(valor,valor2,valor3){

       $.get('view/compra/add.php',{id:valor,action:valor2,su:valor3},function(data){
            $('idproducto').html(data);
       })

}