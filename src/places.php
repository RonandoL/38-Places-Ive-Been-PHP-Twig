<?php
    class Place
    {
        private $city;
        private $country;

        function __construct($city_visited, $country_visted)
        {
            $this->city = $city_visited;
            $this->country = $country_visted;
        }

        // CITY: Setter & Getter
        function setCity($new_city)
        {
            $this->city = $new_city;
        }
        function getCity()
        {
            return $this->city;
        }

        // COUNTRY: Setter & Getter
        function setCountry($new_country)
        {
            $this->country = $new_country;
        }
        function getCountry()
        {
            return $this->country;
        }



      // Save Place
        function save()
        {
            array_push($_SESSION['array_of_places'], $this);
        }

      // Get All Places
        static function getAll()
        {
            return $_SESSION['array_of_places'];
        }

      // Delete All Places
        static function deleteAll()
        {
            $_SESSION['array_of_places'] = array();
        }

    }
?>
