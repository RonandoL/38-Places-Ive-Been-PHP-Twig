<?php
    class Place
    {
        private $city;
        // private $country;

        function __construct($city_visited)
        {
            $this->city = $city_visited;
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



      // Save Place
        function save()
        {
            array_push($_SESSION['array_of_cities'], $this);
        }

      // Get All Places
        static function getAll()
        {
            return $_SESSION['array_of_cities'];
        }

      // Delete All Places
        static function deleteAll()
        {
            $_SESSION['array_of_cities'] = array();
        }

    }
?>
