function buscar() {
    let nombreCanción = $("#buscador").val().toLowerCase();
    $("#musica .song .songHeader h4").each(function () {
      if (nombreCanción != "") {
        if ($(this).text().toLowerCase().includes(nombreCanción)) {
          $(this).parent().parent().css("display", "initial");
        } else {
          $(this).parent().parent().css("display", "none");
        }
      } else {
        $("#musica .song").css("display", "initial");
      }
    });
  }