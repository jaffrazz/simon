$(function () {
  mapboxgl.accessToken = 'pk.eyJ1IjoiYXppem11aW4iLCJhIjoiY2l3ZjJyMm5iMGQyMTJ4dGQ1eW0zbHRlZyJ9.DFGGSzhgjP7l9K5Qj3xtoA';

  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v8',
      center: [111.462,-7.8685],
      zoom: 10
  });

  var el = document.createElement('div');
  el.className = 'marker';
  el.style.backgroundImage = 'url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADRklEQVRoQ+2Z3VEbMRCAv8XkOXQQqCDmLZOcJ6YCSAWECkIqCOmAVABUAFSAM3fJ5A1SQUwH5hmMMicfh2NOJ60sk2GGfWEYJN1+2tX+ITxxkSeuP88A/9uCSS1g3tKlwzaGLrCC2J9guABGwIBbTuWn/T2JJAEw79hmiT1gNVCrIbfsyQ+OAtc7l80FYN6wyjIHCP0oRQwDbtiRXwyj9kP8IzYZfYRj6yrzyYgxG7FuFWWBSvmz+fSe2T1mPQZCDWDd5gXnCW5+ln/ENetad9IDZJxF+7zPZIaBFGz4lk3/XQVgenwEDjwfuMKwzy0ndy5hw+sSWwi7wEvP/g+ScxIKoQX44wmVR3TYlYGN+Q/E9FlhzD6w3aLgUHLWkgNUSar0fZccSW4t5BXT47AVQvGggy1gMvYRPjm0u6LDquvmZ/dUlihjf7M7Gb5KYROjVzQAA4T3jScqPni332TsIXxxnPddirDkqAE4r2ub2a8qTF4DTOqmZpc0XEjBuvf6NZnY9DCuAyWPy+gpzgy3wJMHyLhAeN1ohfQu9FuKqhT3+JHGAu7Ql/oRQ3BI1gC0ZeERHdaUYbRMiq5Kdkdymyu8EgxQnmR6NsO6SoFDydnxfrE8J+MYYcuVUyQPL9G1AO0ZFA7p8Lm1lLixDZBL+ZIp2H3KxTqASSldmr5NRlUxV/e+VTG3WRVz7Q3QNWuakloFYN0ow52RQ/ynbY0hOAPfHRMDULaSabuxOj2zIQUDzT2oARZmhYjbV7+BoDpGc33TayOSYTRAFVJ9EUmDooo80wdHuZAFmESkcsLmaxF9IFdc09VEniQA1Vtw1/Q+te8fbnDz0nRktAXq72cMEV6F6vvPOsOlFMHjyMZPpACID6tGHzZnKeYGqFyprV9uNo7hmxR2zDKXpAGYjEvcTfpDFVVDgDbCJABVWC0LtHLYGyKq4dWjAFQQ5URt00NwKnlrNRpyAfWaZBawAKUr3djWszkqGS5Zphva+ISQJAWoHrQ7KiWIOguJQrOHNk7xEkWdRwGoLHE/xTAETxlC3GZ6TXIXqjP0ZPI2qe3H9GP++xICszCAKirZaXXohCFE4UdzoRhlYvYs1AIxCmn3PANobyz1+r92ABFAzL5ffAAAAABJRU5ErkJggg==)';
  el.style.width = '50px';
  el.style.height = '50px';

  $(document).ready(function() {
    var lat = $('#lat').val();
    var lng = $('#lng').val();
    // add marker to map
    new mapboxgl.Marker(el, {offset: [-50 / 2, -90 / 2]})
        .setLngLat([lng,lat])
        .addTo(map);

    map.on('click', function (e) {
      lng = e.lngLat.lng;
      lat = e.lngLat.lat;

      $('#lat').val(e.lngLat.lat);
      $('#lng').val(e.lngLat.lng);
      // add marker to map
      new mapboxgl.Marker(el, {offset: [-50 / 2, -90 / 2]})
          .setLngLat([lng,lat])
          .addTo(map);
    });
  });
});
