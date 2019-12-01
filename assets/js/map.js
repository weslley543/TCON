var map;
var marker
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: -22.121883, lng: -51.407521 },
    zoom: 14
  });
  var localizacao = {
    coords: {
      lat: -22.120733,
      lng: -51.407509
    }
  };
  addMarker(localizacao, 'seu humberto');
}

setInterval(function(){
  var localizacao = {
    coords: {
      lat: -22.120733,
      lng: -51.407509
    }
  };
  addMarker(localizacao, 'Seu Humberto');
},8000);

setInterval(function(){
  console.log('aqui');
  marker.setMap(null);
},6000);

function addMarker(props, local) {
   marker = new google.maps.Marker({
    position: props.coords,
    map: map,
    title: local
  });

}
