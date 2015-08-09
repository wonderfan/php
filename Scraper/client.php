<?php
require 'vendor/autoload.php';

use Goutte\Client;

$client = new Client();
$crawler = $client->request('GET', 'http://www.yahoo.com');
//echo $crawler->html();
//var_export(get_class_methods($crawler));
print_r($crawler);
