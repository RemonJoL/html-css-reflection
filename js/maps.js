//-------------------------------------------------------------------------------
// Maps
//-------------------------------------------------------------------------------

// Sets the initial location for every map
var mymap = L.map('map').setView([52.235405, 0.154238], 17);
var mymapTwo = L.map('mapTwo').setView([52.575949, 1.136264], 17);
var mymapThree = L.map('mapThree').setView([52.555784, 1.712939], 17);

// Adds marker for every map
var marker = L.marker([52.235405, 0.154238]).addTo(mymap);
var markerTwo = L.marker([52.575949, 1.136264]).addTo(mymapTwo);
var markerThree = L.marker([52.555784, 1.712939]).addTo(mymapThree);

// Array to hold maps for use with the for loop
const mapArray = [mymap, mymapTwo, mymapThree];

// Takes maps from API and applies it to the map divs
for(let i=0;i<mapArray.length;i++){
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoicmVtb25qb2wiLCJhIjoiY2t4azZrNDZmMHJjdDJ5cWt6ZWZuc2ZiOCJ9.GxognWKXuGs089wyjfWVIA'
  }).addTo(mapArray[i]);
}

// // Takes maps from API and applies it to the map divs
// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'pk.eyJ1IjoicmVtb25qb2wiLCJhIjoiY2t4azZrNDZmMHJjdDJ5cWt6ZWZuc2ZiOCJ9.GxognWKXuGs089wyjfWVIA'
// }).addTo(mymap);
//
// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'pk.eyJ1IjoicmVtb25qb2wiLCJhIjoiY2t4azZrNDZmMHJjdDJ5cWt6ZWZuc2ZiOCJ9.GxognWKXuGs089wyjfWVIA'
// }).addTo(mymapTwo);
//
// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'pk.eyJ1IjoicmVtb25qb2wiLCJhIjoiY2t4azZrNDZmMHJjdDJ5cWt6ZWZuc2ZiOCJ9.GxognWKXuGs089wyjfWVIA'
// }).addTo(mymapThree);
