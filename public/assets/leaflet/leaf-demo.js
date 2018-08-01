
var height = $("#maptank").width()/2
$("#datomap").css("width",height*2+"px")
$("#datomap").css("height",height+"px")


var map = L.map( 'datomap', {
  center: [10.0, 5.0],
  minZoom: 2,
//   maxZoom, 10,
  zoom: 2
});
//http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png
L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
 attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">mchen\'s lab</a>',
 subdomains: ['a','b','c']
}).addTo( map );

var myURL = jQuery( 'script[src$="leaf-demo.js"]' ).attr( 'src' ).replace( 'leaf-demo.js', '' );



var markerClusters = L.markerClusterGroup();

for ( var i = 0; i < markers.length; ++i )
{
    var myIcon = L.icon({
        iconUrl: myURL + 'images/marker_'+markers[i].urlstatus+'.png',
        iconRetinaUrl: myURL + 'images/marker_'+markers[i].urlstatus+'.png',
        iconSize: [25, 41],
        iconAnchor: [9, 21],
        popupAnchor: [0, -14]
    });

  var popup = '<b>Name: </b>'+markers[i].name +
              '<br/><b>PMID:</b> ' + '<a href='+'http://www.ncbi.nlm.nih.gov/pubmed/?term='+markers[i].pmid +' target="_blank">'+markers[i].pmid +'</a>'+
              '<br/><b>Description:</b> ' + markers[i].description +
              '<br/><b>URL:</b> ' + '<a href="'+markers[i].url+'" target="_blank">'+markers[i].url+'</a>';

  var m = L.marker( [markers[i].lat, markers[i].lng], {icon: myIcon} )
                  .bindPopup( popup );

  markerClusters.addLayer( m );
}
map.options.maxZoom = 10;
map.addLayer( markerClusters );


// iconRetinaUrl: myURL + 'images/marker_Good.png',
