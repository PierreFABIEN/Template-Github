var bg = new Trianglify({
  noiseIntensity: 0,
  cellsize: 50,
  cellpadding: 10,
  fillOpacity: 1,
  strokeOpacity: 0
});

var pattern = bg.generate(document.body.clientWidth, document.body.clientHeight);
document.body.setAttribute('style', 'background-image: '+pattern.dataUrl);