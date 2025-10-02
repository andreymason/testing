<?php

// Домен
const DOMAIN = "https://google.com";

$queryString = http_build_query($_GET);

$url = DOMAIN . (!empty($queryString) ? "?" . $queryString : "");

header("Content-Type: text/plain; charset=utf-8");
echo $url;
