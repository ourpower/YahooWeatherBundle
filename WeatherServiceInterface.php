<?php
/**
 * Created by PhpStorm.
 * User: aleksandr
 * Date: 4/14/15
 * Time: 9:31 PM
 */

namespace My\Bundle\WeatherBundle;


/**
 * Interface WeatherServiceInterface
 * @package My\Bundle\WeatherBundle
 */
interface WeatherServiceInterface {

    public function getWeatherByCoordinates($coordinates);
        


}