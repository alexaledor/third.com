/**
 * Функционал управления отображением левого меню
 * кнопками на панели.
 * *
 *
 * */
var indexAccordionArray = [1];//определяет грузился ли уже аккордион.
var counter = true;

//Кнопка - отобразить Аккордион
function showAccordion(type){

    //поиск id аккордиона в маасиве indexAccordionArray
    var answer = scanIndexAccordionArray(type);

    console.log(answer);

    if (answer){//если есть то show

        $('#accordion'+type).show();
        deactivationButton(type); //Деактивация кнопки

        //console.log(type);

    } else {//если нет то ajax
        $.get('/html/accordion', {type:type},function(data){
            deactivationButton(type);
            $('#accordion').append(data);
            //Слушатель всех чекбоксов
            //if (counter){//грузить нужно только один раз
                listenAllCheckbox();
                //counter = false;
            //}

            //Слушатель- Кнопка закрытия раздела аккордиона
            closeButtonAccordion();
        });
    }
}

//поиск в маасиве indexAccordionArray
/**
 * массив содержит имя аккордиона который
 * уже загружался на страницу,
 * значит его код уже есть на странице
 * и его повторного грузить не нужно
 * */
function scanIndexAccordionArray(type){
    if (indexAccordionArray.indexOf(type) == -1){
        indexAccordionArray.push(type);
        var answer = false; //массив не содержит елемента
    } else {
        answer = true; //такой елемент в массиве уже есть
    }
    return answer;
}

//Слушатель- Кнопка закрытия раздела аккордиона
function closeButtonAccordion(){
    $('.closeX').click(function(){
        var id = $(this).parent('div').addClass('thisWindows').attr('id');

        //console.log(id);
        //$('#'+id+'-button').attr('disabled',false);//активация кнопки
        $('#'+id+'-button').show();//активация кнопки

        //$('.thisWindows').parent('div').html('');
        $('.thisWindows').hide().removeClass('thisWindows');

    });
}

//Деактивация кнопки вызова аккордиона
function deactivationButton(type){
    console.log(type);
    //$('#accordion'+type+'-button').attr('disabled',true);//деактивация кнопки
    $('#accordion'+type+'-button').hide();//деактивация кнопки
    //$('#accordion'+type+'-button').css('font-weight','bold');//деактивация кнопки font-weight: bold
}
