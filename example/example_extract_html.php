<?php
include_once('../simple_html_dom.php');

echo file_get_html('http://livingwage.mit.edu/counties/06003')->plaintext;
?>