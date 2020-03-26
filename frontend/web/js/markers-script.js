/**
 * Обработка клика чекбокса
 * отображение маркеров и полигонов
 *
 * */

var objectGroup = L.layerGroup(); //группа однотипных объектов (слой)
var LayerGroupArray = []; //сгруппированные объекты в кластер
var indexArray = []; //массив индексов сгенерированных слоев


//Слушатель всех чекбоксов
/**
 * это первая функция с которой начинается вся работа
 * она слушает все чекбоксы которые имеют класс checkboxClick.
 * */
function listenAllCheckbox(){
    $('.checkboxClick').off().change(function(){
        var tag = $(this).addClass('thisCheckbox');//добавляем класс для метки
        var idCheckbox = tag.attr('id');//получаем id чекбокса по которому был клик
        var icon = tag.prev('img').attr('src');//получаем значек маркера
        $(this).removeClass('thisCheckbox'); //класс помог, удаляем его

        if ($('#'+idCheckbox).prop('checked')){//чекбокс установлен
            clickCheckbox(idCheckbox,icon);
        } else {                                //чек бокс снят
            LayerGroupArray[idCheckbox].clearLayers();
        }
    });
}



//Обработка события - чекбокс установлен
function clickCheckbox(idCheckbox,icon){

    if (LayerGroupArray[idCheckbox] != undefined){ //если слой уже существует, очищаем его
    // для предотвращения возможных многократных наложений
        LayerGroupArray[idCheckbox].clearLayers();
    }

    //кластеризация (гуппирование) маркеров
//    LayerGroupArray[idCheckbox] = new L.MarkerClusterGroup({
//        iconCreateFunction:function(cluster) {
//            return L.divIcon({
//                html: "<img src="+ icon +"><div>" + cluster.getChildCount() + "</div>",
//                className: 'mycluster',
//                iconSize: L.point(35, 35)
//            });
//        }
//    }).addTo(map);


    LayerGroupArray[idCheckbox] = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return L.divIcon({
                html: "<img src="+ icon +"><div>" + cluster.getChildCount() + "</div>",
                className: 'mycluster',
                iconSize: L.point(35, 35)
            });
        }
    }).addTo(map);


    //console.log(LayerGroupArray[idCheckbox]);

    createIndexArray();//запоминание индексов сгенерированных слоев в отдельный массив
    /** чтобы знать какие слои уже созданы, чтобы потом их не создавать заново
     * и если нужно найти необходимый слой для дальнейших с ним действий
     */

    //ajax запрос для получения данных с БД
    /** в качестве идентификатора на выборку передается уникальный idCheckbox
     * который характеризует ту информацию, что подлежит выборке
     * */
    $.get('/site/get-markers', {type: idCheckbox},function(data){
        data = $.parseJSON(data); //ответ данные полученные из БД

        //console.log(data);

        if (data.length < 1){//если пришел пустой ответ
            alert('До побачення!');
            $('#'+idCheckbox).attr('checked',false); //снимаем отметку с чекбокса
        } else { //иначе отображаем то, что пришло

            data.forEach(function(item, i){
                //это маркер
                if (item.latitude != null){ //если это маркер показываем маркер
                    showMarker(data[i].latitude,data[i].longitude,icon,'This is Littleton, CO.');
                }
                //это круг
                if (item.icon == 'circle'){
                    showPolygon('circle');
                }
                //это полигон
                if (item.icon == 'polygon'){
                    showPolygon('polygon');
                }
            });
            LayerGroupArray[idCheckbox].addLayer(objectGroup);//добавлем объект в общий слой (в кластер)
            objectGroup.clearLayers();//очищем объект !!! ОБЯЗАТЕЛЬНО иначе будет накопление объектов в группе!
        }
    });
}

//Отображение маркера
function showMarker(lat,lng,icon,textPopup){
    var myIcon = L.icon({
        iconUrl: icon,
        shadowUrl: '/images/marker-shadow.png',
        iconSize:     [32, 37],
        shadowSize:   [41, 41],
        iconAnchor:   [15, 35],
        shadowAnchor: [12, 40],
        popupAnchor:  [2, -34]
    });
    var object = L.marker([lat, lng],{icon:myIcon}).bindPopup(textPopup);
    objectGroup.addLayer(object);
}

//Отображение полигона
function showPolygon(type){
    if (type == 'circle'){
        var object = L.circle([51.508, -0.11], 500, {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
        }).bindPopup("I am a circle.");
    }
    if (type == 'polygon'){
        object = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).bindPopup("I am a polygon.");
    }
    objectGroup.addLayer(object);
}

//запоминание индексов сгенерированных слоев в массив
function createIndexArray(){
    var k = 0;
    LayerGroupArray.forEach(function(item,i){
        indexArray[k] = i;
        k++
    });
    //console.clear();
    //console.log(indexArray);
}

//Очистить карту
function clearMap(){
    indexArray.forEach(function(item){
        $('#'+item+'').attr('checked',false);
        LayerGroupArray[item].clearLayers();
    });
}

//Выбрать все
function selectAll(){
    for (var id = 11; id <= 13; id++){
        clickCheckbox(id,$('#'+id).prop('checked',true).prev('img').attr('src'));
    }
    for (id = 21; id <= 22; id++){
        clickCheckbox(id,$('#'+id).prop('checked',true).prev('img').attr('src'));
    }
}

function ajaxTest(id){

    $.get('/site/get-name-email', {id:id},function(data){
        data = $.parseJSON(data);

        console.log(data);
        if (data != null){
            alert(data.username);
        } else {
            alert('Нічого не знайдено!');
        }
    });
}







