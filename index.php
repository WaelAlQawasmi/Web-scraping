<?php

// https://enb.iisd.org/_inc/simple_html_dom/manual/manual.htm#section_create
require 'simple_html_dom.php';
// to git html file

$html = file_get_html('https://www.w3schools.com/');
// find by tag name  and index of the tage (because it return array of tages that have same tagname)
$title = $html->find('title', 0);

// find all childrenOfItem
$childrenOfItem = $html->find('div[class="w3-col l3 m6"]', 0)->find('a');
// find item by id and it's chiled index 1

echo $html->getElementById("main")->childNodes(1);
// find item by class name and it's index (because it's return array of tages that have same class name)
$item=$html->find('div[class="w3-col l3 m6"]', 3);
// to ptint inner html text
echo $title->plaintext."<br>\n";
// to print array 

foreach ($childrenOfItem as $Chiled ) {

    echo $Chiled->plaintext."<br>\n";;
}

if (empty($ret)) {
    echo "Variable 'a' is empty.<br>";
  }


?>
