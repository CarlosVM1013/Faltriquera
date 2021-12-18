function showTutorial(button) {
    $("#popupVideos").css("display", "initial");
    event.stopPropagation();
}

function showBaile(button) {
    
}

$(document).on('click','body *',function(){
    $("#popupVideos").css("display", "none");
});