<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 4/14/15
 * Time: 11:23 AM
 */

namespace My\Bundle\WeatherBundle;


class WeatherLoader {

    public function __construct(YahooService $getYahooWeather){
        $this->YahooService =$getYahooWeather;
    }

    public function getWeather($coordinates){
        return $this->YahooService->getYahooWeather($coordinates);
    }
}