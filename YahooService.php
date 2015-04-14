<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 4/13/15
 * Time: 4:31 PM
 */

namespace My\Bundle\WeatherBundle;

use Buzz\Browser;

class YahooService {

    public function __construct(YahooWeatherParser $parser, Browser $browser)
    {
        $this->parser = $parser;
        $this->browser = $browser;
    }

    public function getYahooWeather($coordinates)
    {

        $url = "http://query.yahooapis.com/v1/public/yql?q=";
        $query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="'.$coordinates. '")';
        $request = $url . urlencode($query) . "&format=json"; // added &format=json here, because urlencode() encode it in a wrong way
        $json = $this->browser->get($request);
        $json = $json->getContent($json);

        return $this->parser->parseData($json);

    }
}