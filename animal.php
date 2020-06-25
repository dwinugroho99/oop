<?php
    class animal
    {
        protected $legs;
        protected $coldBlooded;
        protected $name;

        public function set_Name($name){
            $this->name=$name;
        }
        public function get_Name(){
            return $this->name;
        }
        public function set_Legs($legs){
            $this->legs=$legs;
        }
        public function get_Legs(){
            return $this->legs;
        }
        public function set_coldBlooded($coldBlooded){
            $this->coldBlooded=$coldBlooded;
        }
        public function get_coldBlooded(){
            return $this->coldBlooded;
        }
    }
?>