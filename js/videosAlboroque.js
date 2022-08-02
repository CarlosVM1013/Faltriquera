function buscar() {
    let nombreVideo = $("#buscador").val().toLowerCase();
    $("#videos .video h4").each(function () {
      if (nombreVideo != "") {
        if ($(this).text().toLowerCase().includes(nombreVideo)) {
          $(this).parent().css("display", "block");
        } else {
          $(this).parent().css("display", "none");
        }
      } else {
        $("#videos .video").css("display", "block");
      }
    });
  }