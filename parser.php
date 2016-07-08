<?php

header('Content-Type: application/json');

$newsArray = json_decode(json_encode(simplexml_load_string(file_get_contents('http://feeds.bbci.co.uk/news/business/rss.xml'), "SimpleXMLElement", LIBXML_NOCDATA)), true);

$returnItems = $_REQUEST['returnItems'];

$newsArray = array_slice($newsArray['channel']['item'], 0, $returnItems);

echo json_encode(array('items' => $newsArray));

?>