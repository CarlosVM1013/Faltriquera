function showTutorial(button, tutoriales) {
    $("#popupVideos").css("display", "initial");
    $("#popupVideos #tituloJota").text($(button).parent().prev().text());
    $("#popupVideos #tipoVideo").text($(button).text());
    $( "div" ).remove( ".videoDiv" );

    for(let tutorial of tutoriales) {
        let titulo = tutorial.match(/Tutorial\/(.*).mp4/)[1];
        $("#popupVideos #tipoVideo").append('<div class="videoDiv"><h4 class="tituloVideo">'+titulo+'</h4><video controls><source src="'+tutorial+'" type="video/mp4">Your browser does not support the video tag.</video></div>');

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
        let titulo = baile.match(/Baile\/(.*).mp4/)[1];
        $("#popupVideos #tipoVideo").append('<div class="videoDiv"><h4 class="tituloVideo">'+titulo+'</h4><video controls><source src="'+baile+'" type="video/mp4">Your browser does not support the video tag.</video></div>');

    }

}

$(document).on('click','body *',function(){
    $("#popupVideos").css("display", "none");
    for (let i = 0; i < $("#popupVideos video").length; i++) {
        $("#popupVideos video").get(i).pause();
    }

});