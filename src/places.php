<?php
    class Place
    {
        private $place;

        function __construct($place_been)
        {
            $this->place = $place_been;
        }

        // Setter & Getter
        function setPlace($new_place)
        {
            $this->place = $new_place;
        }
        function getPlace()
        {
            return $this->place;
        }

        // Save Place
        function savePlace()
        {

        }

    }
?>
