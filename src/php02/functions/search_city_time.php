<?php

require('config/cities.php');

function searchCityTime($city_name)
{
    require('config/cities.php');
    foreach($cities as $city){
        if($city['name'] === $city_name) {
            $date_time = new DateTime('',new DateTimeZone($city["time_zone"]));
            $time = $date_time -> format('H:i');
            $city['time'] = $time;
            if($city['president_years'] > 50){
                $city['judge'] = "高齢";
            }else{
                $city['judge'] = "若い";
            }
            return $city;
        }
    }
}
