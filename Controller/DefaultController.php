<?php

namespace My\Bundle\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $coordinates = "54.6891600 25.2798000";
        $weather = $this->get('nfq.weather');
        $request = $weather->getWeather($coordinates);
        return new Response($request);
    }


}
