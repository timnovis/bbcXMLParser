# bbcXMLParser
Converts BBC XML RSS feeds to JSON.

##### Example with jQuery AJAX, pass the param 'returnItems' to return as many items as you want.

	$.ajax({
		url: 'parser.php',
		type: 'GET',
		data: {
			'returnItems': 4
		}
	})
	.done(function(data) {
		console.log(data);
	});
