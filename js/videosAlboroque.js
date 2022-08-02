function buscar() {
    let nombreVideo = $("#buscador").val().toLowerCase();
    $(".videoAlboroque h2").each(function () {
      if (nombreVideo != "") {
        if ($(this).text().toLowerCase().includes(nombreVideo)) {
          $(this).parent().css("display", "block");
        } else {
          $(this).parent().css("display", "none");
        }
      } else {
        $(".videoAlboroque").css("display", "block");
      }
    });
  }