<?php

class ScientificCalculator implements iScientifiCalculator {

    protected $stack;
    protected $op;
    protected $result;

    public function factorial($a) {
		$b = gmp_fact($a); 
        echo gmp_strval($b)
        return $b;
    }

    public function decToHex($a) {
        $b = dechex($a); 
        return $b;   
		}

    public function cubeRoot($a) {
		$b = pow($a, 1/3);
        return $b;
    }
    
    public function pressNumber($number) {
        $this->stack[] = $number;
    }

    public function pressFactorial() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "factorial";
    }

    public function pressdecToHex() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "decToHex";
    }

    public function presscubeRoot() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "cubeRoot";
    }

 

    protected function evaluateStack() {
        switch($this->op) {
            case "factorial":
                $result = $this->factorial(array_shift($this->stack));
                break;
            case "decToHex":
                $result = $this->decToHex(array_shift($this->stack));
                break;
            case "cubeRoot":
                $result = $this->cubeRoot(array_shift($this->stack));
                break;

        }
        $this->clearStack();
        $this->stack[] = $result;
    }

    protected function clearStack() {
        $this->stack = array();
    }

    public function readScreen() {
        $value = array_shift($this->stack);
        return $value;
    }
}
