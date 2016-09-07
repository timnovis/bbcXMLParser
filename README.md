# bbcXMLParser
Converts BBC XML RSS feeds to JSON.

##### Example with jQuery AJAX

	$.ajax({
		url: 'parser.php',
		type: 'GET',
		data: {
			'returnItems': 4,
			'feedURL': 'http://feeds.bbci.co.uk/news/business/rss.xml'
		}
	})
	.done(function(data) {
		console.log(data);
	});
