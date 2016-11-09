$('img').click(function(){
    var src = $(this).prop('src');
    $('#image-gallery-image').prop('src',src);
});