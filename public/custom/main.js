  
 function alertEliminar(e) {
  e.preventDefault();
  var form = $(this).parents('form');
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
    form.submit();   } 
else {    
    swal("Cancelado", "", "error");
       } 
  });

 }



function ActivarMenu() {
     var paginaURL = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $("#navegacion ul li").each(function(){
          if($(this).attr("ruta") == paginaURL || $(this).attr("ruta") == '' )
          $(this).addClass("active");

     })
}


function main(){

  $(document).on('click', '.btn-eliminar', alertEliminar);

  $("body").imagesLoaded(function(){
    $(".loader-cont").fadeOut();
    $("#loader-overflow").delay(200).fadeOut(700);
  });


$('.form-control').on('focus blur', function() {
  $(this).prev('label').toggleClass("input-focus");
});

}

$(document).on('ready', main);


 