getSizeScreen();

//Отслеживание изменения размеров екрана
$(window).resize(function(){
    getSizeScreen();
});

//Определение размера єкрана
function getSizeScreen(){
    var height = $(window).height() - 150;
    //console.log(height);
    $('#map').css('height',height);
}
