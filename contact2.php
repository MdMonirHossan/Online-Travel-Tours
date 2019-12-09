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
  	<div>
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="797" height="579" id="gmap_canvas" src="https://maps.google.com/maps?q=northsouth&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
				<a href="https://www.whatismyip-address.com"></a>
			</div>
			<style>
			.mapouter{position:relative;text-align:right;height:579px;width:797px;}
			.gmap_canvas {overflow:hidden;background:none!important;height:579px;width:797px;}
			</style>
		</div>
	  </div>
	  <div>
	  		<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=North%20south%20university+(Nort%20South)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates finder</a></iframe></div><br />
	  </div>
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