<?php 

echo $invoice['Invoice']['id']. "<br>";
echo $invoice['Invoice']['description'] ."<br>";
echo $invoice['Company']['name'] ."<br>";
echo $invoice['Product'][0]['name'] ."<br>";
echo $invoice['Product'][1]['name'] ."<br>";

?>