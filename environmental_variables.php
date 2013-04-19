<?php
// PROVJERITI KAKO $_GET FUNKCIONIRA S ['url']

// Get the URL parameter.
$url = (!empty($_GET['url'])) ? $_GET['url'] : false;

// Process the URL parameter.
if ($url) {
	$url = rtrim($url, '/');
	$url_parts = explode('/', $url);
} else {
	$url_parts = array();
}