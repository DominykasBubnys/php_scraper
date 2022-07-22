<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;
use Psy\Util\Json;

class ScraperController extends Controller
{
    //

    public function scraper(){

        $client = new Client();
        $url = "https://www.worldometers.info/coronavirus/";
        $page = $client->request('GET', $url);
        $virus_number = $page->filter(".maincounter-number")->text();

        echo "<h1>number: {{$virus_number}}</h1>";
        return view("scraper");
    }
}
