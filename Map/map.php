<html>
	<head>
		<script type='text/javascript' src='https://www.google.com/jsapi'></script>
		<script type='text/javascript'>
			google.load("jquery", "1.5.2");
			google.load('visualization', '1', {packages:['geomap']});
			google.setOnLoadCallback(drawVisualization);			
			function drawVisualization() {
				var query = new google.visualization.Query('https://spreadsheets.google.com/ccc?key=0ApT3nLwQu_ugdFZEZHRRUnBfUUZwQ0U4RzZiRy1RckE&hl=en');
				query.send(handleQueryResponse);
			}
			function handleQueryResponse(response) {
				//check for error
				if (response.isError()) {
					alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
					return;
				}
				//draw
				var data = response.getDataTable();
				visualization = new google.visualization.GeoMap(document.getElementById('visualization'));
				var options = {};
				options['dataMode'] = 'regions';
				options['width'] = 725;
				options['height'] = 600;
				options['colors'] = [0x0, 0x00FF00];
				visualization.draw(data, options);
				//click event
				google.visualization.events.addListener(visualization, 'regionClick', function(region) {
					options['region'] = region.region;
					//TODO display loading graphic
					visualization.draw(data, options);
					//TODO get amount of friends
					var friends = 100;
					//TODO find out boundaries in which to draw					
					//TODO place stick men inside
					$("#animation").html('animation');
					//TODO fade random ones away based on friend count and mortality rate
					//TODO bring up dialog for click through/ i agree .etc
				});			
			}			
    </script>
  </head>
  <body>
    <div id="animation" style="position:absolute;z-index:1">lol</div>
	<div id="visualization" style="z-index:0"></div>
  </body>
</html>