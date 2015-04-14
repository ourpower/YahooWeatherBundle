<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 4/14/15
 * Time: 9:42 AM
 */

namespace My\Bundle\WeatherBundle;


class YahooWeatherParser {

    public function parseData($json){

            $object = json_decode($json);
            $weatherData = $object->{'query'}->{'results'}->{'channel'}->{'item'}->{'description'};
            return $weatherData; //returning today's & next day forecast
    }
}