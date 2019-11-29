<html>
  <head>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
  type="text/javascript" charset="utf-8"></script>
  <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
  type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
  <div style="width: 100%; height: 480px" id="mapContainer"></div>
  <script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'zEUNvrKsBaDcXU2omT9b30JjTitCeS_V7gQ8hvns0gQ'
    });

    // Obtain the default map types from the platform object
    var maptypes = platform.createDefaultLayers();

    // Instantiate (and display) a map object:
    var map = new H.Map(
    document.getElementById('mapContainer'),
    maptypes.vector.normal.map,
    {
      zoom: 12,
      center: { lng: 90.42, lat: 23.81 }
    });
  </script>
  </body>
</html>