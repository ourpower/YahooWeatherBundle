<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 4/14/15
 * Time: 11:23 AM
 */

namespace My\Bundle\WeatherBundle;


class WeatherLoader {

    /**
     * @param YahooService $getYahooWeather
     */
    public function __construct(YahooService $getYahooWeather){
        $this->YahooService =$getYahooWeather;
    }

    /**
     * @param $coordinates
     * @return mixed
     */
    public function getWeather($coordinates){
        return $this->YahooService->getWeatherByCoordinates($coordinates);
    }
}