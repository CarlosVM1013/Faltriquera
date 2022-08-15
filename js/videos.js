function showTutorial(button, tutoriales) {
    $("#popupVideos").css("display", "initial");
    $("#popupVideos #tituloJota").text($(button).parent().prev().text());
    $("#popupVideos #tipoVideo").text($(button).text());
    $( "div" ).remove( ".videoDiv" );

    for(let tutorial of tutoriales) {
        $("#popupVideos #tipoVideo").append('<div class="videoDiv"><iframe width="560" height="315" src="'+tutorial+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

    }

    event.stopPropagation();
}

function showBaile(button, bailes) {
    $("#popupVideos").css("display", "initial");
    $("#popupVideos #tituloJota").text($(button).parent().prev().text());
    $("#popupVideos #tipoVideo").text($(button).text());
    event.stopPropagation();

    $( "div" ).remove( ".videoDiv" );

    for(let baile of bailes) {
        $("#popupVideos #tipoVideo").append('<div class="videoDiv"><iframe width="560" height="315" src="'+baile+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

    }

}

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

$(document).on('click','body *',function(){
    $("#popupVideos").css("display", "none");
    for (let i = 0; i < $("#popupVideos video").length; i++) {
        $("#popupVideos video").get(i).pause();
    }

});