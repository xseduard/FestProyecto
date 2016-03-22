

 function alertEliminar(e) {
e.preventDefault();
   swal({   
      title: "¿Estas seguro?",   
      text: "Los registros eliminados no podran volver a restaurarse",   
      type: "warning",   
      showCancelButton: true,   
      confirmButtonColor: "#DD6B55",   
      confirmButtonText: "Si, Eliminar!",
      cancelButtonText: "Cancelar",   
      closeOnConfirm: false,
      closeOnCancel: false }, 

function(isConfirm){   
  if (isConfirm) {     
    swal("Eliminado!", "El registro se ha eliminado correctamente.", "success");
    $( "#formEliminar" ).submit();   } 
else {    
    swal("Cancelado", "", "error");
       } 
  });

 }






function main(){
 $(document).on('click', '#btn-eliminar', alertEliminar);

}
$(document).on('ready', main);