<?php
class frog extends animal{
    private $jump;

    public function set_Jump($jump){
        $this->jump=$jump;
    }
    public function get_Jump(){
        return $this->jump;
    }
}

?>