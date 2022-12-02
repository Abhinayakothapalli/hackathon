<?php
include("simple_html_dom.php");
$html=file_get_html("https://www.pmjay.gov.in/");
echo $html-> find('#main-conten',0)->innertext;
