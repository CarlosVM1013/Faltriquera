function mostrar(test) {
    let ruta = $(test).next().attr('href');
    console.log(ruta);
    $("#visor").attr('src', ruta)
    $("#visor").css("display", "initial");
    event.stopPropagation();
}

$(document).on('click','body *',function(){
    $("#visor").css("display", "none");
});

function buscar() {
    let nombreCanción = $("#buscador").val().toLowerCase();
    $("#apuntes .docs h4").each(function () {
      if (nombreCanción != "") {
        if ($(this).text().toLowerCase().includes(nombreCanción)) {
          $(this).parent().css("display", "flex");
        } else {
          $(this).parent().css("display", "none");
        }
      } else {
        $("#apuntes .docs").css("display", "flex");
      }
    });
  }