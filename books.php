<?php

require 'vendor/autoload.php';

use Goutte\Client;

function scrapePage($url, $client){
    $crawler = $client->request('GET', url);
    $crawler->filter('.product_pod')->each(function ($node){
        $title = $node->filter('.image_container img')->attr('alt');
        $price = $node->filter('.price_color')->text();

        echo $title . "-" . $price . PHP_EOL;
    });
}


?>
