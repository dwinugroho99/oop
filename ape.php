<?php
class ape extends animal{
    private $yell;

    public function set_Yell($yell){
        $this->yell=$yell;
    }
    public function get_Yell(){
        return $this->yell;
    }
}

?>