<?php
header('Content-Type: application/json');
$returnItems = isset($_REQUEST['returnItems']) ? $_REQUEST['returnItems'] : 5;
$newsArray = json_decode(json_encode(simplexml_load_string(file_get_contents($_REQUEST['feedURL']), "SimpleXMLElement", LIBXML_NOCDATA)), true);
$newsArray = array_slice($newsArray['channel']['item'], 0, $returnItems);
echo json_encode(array('items' => $newsArray));
?>