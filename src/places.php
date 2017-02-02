<?php
    class Place
    {
        private $city;
        private $country;
        private $image;

        function __construct($city_visited, $country_visted, $city_image)
        {
            $this->city = $city_visited;
            $this->country = $country_visted;
            $this->image = $city_image;
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

        // IMAGE: Setter & Getter
        function setImage($new_image)
        {
            $this->image = $new_image;
        }
        function getImage()
        {
            return $this->image;
        }

    }
?>
