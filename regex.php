<?php
$data = file_get_contents('http://www.google.com/');

preg_match('/<title>([^<]+)<\/title>/i', $data, $matches);
$title = $matches[1];

preg_match('/<img[^>]*src=[\'"]([^\'"]+)[\'"][^>]*>/i', $data, $matches);
$img = $matches[1];

echo $title."<br>\n";
echo $img;
?>