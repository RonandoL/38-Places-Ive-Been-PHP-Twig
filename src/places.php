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
