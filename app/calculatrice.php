<?php

namespace App;

class Calculatrice {
    public function sum($a, $b){
        return $a + $b;
    }
    public function soustraction($a, $b){
        return $a - $b;
    }
    public function multi($a, $b){
        return $a * $b;
    }
    public function div($a, $b){
        return $a / $b;
    }
}