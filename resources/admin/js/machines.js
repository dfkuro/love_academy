
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 20.117, lng: -98.7333},
    zoom: 14
  });

  var myLatLng = {lat: 20.117, lng: -98.7333};
  var myLatLng2 = {lat: 20.127, lng: -98.7323};

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Maquina vertec 1'
  });

  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Maquina vertec 1'
  });
}