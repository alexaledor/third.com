

var drawnItems = L.featureGroup().addTo(map);

//map.zoomControl.setPosition('topright');

//Панель кнопок для рисовния
map.addControl(new L.Control.Draw({
    position: 'topright',
    //начальніе установки рисования
    draw: {
        polyline: {
            metric: true,
            shapeOptions: {
                color: "#0000ff",
                weight: 7
            }
        },
        circle: {
            shapeOptions: {
                color: "#0000ff",
                fillColor: "#ffff00"
            }
        },
        polygon: {
            shapeOptions: {
                color: "#008000",
                fillColor: "#ff0000"
            }
        },
        rectangle: {
            shapeOptions: {
                color: "#ff0000",
                fillColor: "#0000ff"
            }
        }

    },
    edit: { featureGroup: drawnItems }
}));

map.on('draw:created', function(event) {
    var layer = event.layer;

    drawnItems.addLayer(layer);

});



