/**
 * Основной скрипт инициализации и запуска карты
 * и елементов управления на карте:
 * - кнопки масштабирования
 * - переключение слоев (выбор карт)
 * - отображение координат на карте по клику
 * - масштабная линейка низу карты
 *
 * */

/**Слои карт*/
var OSM = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    maxZoom: 20,
    minZoom: 2,
    attribution: '© OpenStreetMap contributors. Tiles: CC-BY-SA 2.0\r\nMap data © OpenStreetMap contributors'
});

var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var yadexMap = L.tileLayer(
    'http://vec{s}.maps.yandex.net/tiles?l=map&v=4.55.2&z={z}&x={x}&y={y}&scale=2&lang=ru_RU', {
        subdomains: ['01', '02', '03', '04'],
        attribution: '<a http="yandex.ru" target="_blank">Яндекс</a>',
        reuseTiles: true,
        updateWhenIdle: false
    }
);

var mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw';
var mbAttr= 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
            '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="http://mapbox.com">Mapbox</a>';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
    streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

//var YahooHibrid = L.tileLayer('https://{s}.aerial.maps.api.here.com/maptile/2.1/maptile/newest/hybrid.day/yh_{x}_{y}_{z}.jpg',
var YahooHibrid = L.tileLayer('https://{s}.aerial.maps.cit.api.here.com/maptile/2.1/maptile/newest/satellite.day/{x}/{y}/{z}/256/png8?lg=ENG&token=TrLJuXVK62IQk0vuXFzaig%3D%3D&requestid=yahoo.prod&app_id=eAdkWGYRoc4RfxVo0Z4B',
{
    maxZoom: 20,
    subdomains:['1','2','3'],
    attribution: 'Portions courtesy NASA/JPL-Caltech and U.S. Depart. of Agriculture, Farm Service Agency'
});

var YahooSatelite = L.tileLayer('/YahooSat/ys_{x}_{y}_{z}.jpg',{
    maxZoom: 16,
    minZoom: 2,
    attribution: 'Portions courtesy NASA/JPL-Caltech and U.S. Depart. of Agriculture, Farm Service Agency'
});


//var map = L.map('map',{zoomControl: false}).setView([51.505, -0.09], 13);

/*L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(map);*/


/**Отображение карты */
//http://{s}.tile.osm.org/{z}/{x}/{y}.png
//Tiles/{z}/{x}/{y}.png
var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
    osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    osm = L.tileLayer(osmUrl, {maxZoom: 16, attribution: osmAttrib}),
    map = new L.Map('map', {zoomControl: false, center: new L.LatLng(51.505, -0.09), zoom: 13});

OSM.addTo(map);

//Положение кнопок масштабирования
L.control.zoom({position:'topright'}).addTo(map);

//всплавющая подсказка (popUp)
var popup = L.popup();

//Отображение координат по клику на карте
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(e.latlng.toString())
        .openOn(map);
}
//Клик по карте
//map.on('click', onMapClick);

//Панель переключения слоев
map.addControl(new L.Control.Layers({
        'OpenStreetMap':OSM,
        'googleStreets':googleStreets,
        'googleHybrid':googleHybrid,
        'googleSat':googleSat,
        /*'yadexMap':yadexMap,*/
        'grayscale':grayscale,
        'streets':streets,
        'YahooHibrid':YahooHibrid
}));

//масштабная линейка (внизу, справа)
L.control.scale({position:'bottomright', imperial: true}).addTo(map);


L.Icon.extend({
 options: {
 shadowUrl: '/images/marker-shadow.png',
 iconSize:     [32, 37],
 shadowSize:   [41, 41],
 iconAnchor:   [15, 35],
 shadowAnchor: [12, 40],
 popupAnchor:  [2, -34]
 }
});
