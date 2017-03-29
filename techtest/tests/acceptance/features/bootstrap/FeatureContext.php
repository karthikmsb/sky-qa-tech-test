<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

set_include_path(get_include_path() . PATH_SEPARATOR . "../../lib");

require_once("iCalculator.php");
require_once("iScientificCalculator.php");
require_once("Calculator.php");
require_once("ScientificCalculator.php");



class FeatureContext extends BehatContext {
    protected $calculator;
	protected $scienticCalculator
	public $number1;
	public $number2;
	public $number3;
	public $buttonValue1;
	public $buttonValue2;

    
    public function __construct() {
        $this->calculator = new Calculator();
		$this->scientificCalculator = new ScienticCalculator();

    }

    /**
     * @Given /^I enter "(\d+)" into the calculator$/
     */
    public function iHaveEnteredIntoTheCalculator($number) {
        $this->calculator->pressNumber($number);
    }
    /**
     * @And /^I hit "(\d+)" $/
     */
    public function iHit($button) {
		  switch($this->button) {
            case "add":
                $result = $this->calculator->pressAdd();
                break;
            case "subtract":
                $result = $this->calculator->pressSubtract();
                break;
            case "multiply":
                $result = $this->calculator->pressMultiply();
                break;
            case "divide":
                $result = $this->calculator->pressDivide();
                break;
				
    }
	}

    /**
     * @When /^I hit "equals"$/
     */
    public function iHitEquals() {
        $this->calculator->pressEquals();
    }

    /**
     * @Then /^I see a result of "(\d+)"$/
     */
    public function iSeeAResultOf($result) {
        $result = $this->calculator->readScreen();
        if($result != $result) {
            throw new Exception("Wrong result, actual is [$result]");
        }
    }
	
	
	 /**
     * Scientic Calcultor Computations
     */
	
	 /**
     * @Given /^I enter "(\d+)" into the scientificCalculator$/
     */
    public function iHaveEnteredIntoTheCalculator($number) {
        $this->scienticCalculator->pressNumber($number);
    }
    /**
     * @When /^I hit "(\d+)" $/
     */
    public function iHit($button) {
		  switch($this->button) {
            case "factorial":
                $result = $this->scienticCalculator->pressFactorial();
                break;
            case "decToHex":
                $result = $this->scienticCalculator->pressDecToHex();
                break;
            case "cubeRoot":
                $result = $this->scienticCalculator->pressCubeRoot();
                break;
           
    }

   
    /**
     * @Given /^I hit "equals"$/
     */
    public function iHitEquals() {
        $this->scienticCalculator->pressEquals();
    }

    /**
     * @Then /^I see a result of "(\d+)"$/
     */
    public function iSeeAResultOf($expResult) {
        $result = $this->scienticCalculator->readScreen();
        if($result != $expResult) {
            throw new Exception("Wrong result, actual is [$result]");
        }
    }
	
	
	 /**
     * Test Operator Precedence
     */
	
	  public function iHaveEnteredIntoTheCalculator($number1) {
         $numberValue1  = $number1;
    }
    /**
     * @And /^I hit "(\d+)" $/
     */
    public function iHit($button1) {
		  switch($this->button1) {
            case "add":
                  $buttonValue1 = "+";
                break;
            case "subtract":
                  $buttonValue1 = "-";
					break;
            case "multiply":
                $buttonValue1 = "*";
                  break;
            case "divide":
                $buttonValue1 = "/";
                break;
				
    }
	    return $buttonValue1;
	}
	
	 public function iHaveEnteredIntoTheCalculator($number2) {
         $numberValue2  = $number2;
    }
	
	public function iHit($button2) {
       switch($this->button2) {
            case "add":
                  $buttonValue2 = "+";
                break;
            case "subtract":
                  $buttonValue2 = "-";
					break;
            case "multiply":
                $buttonValue2 = "*";
                  break;
            case "divide":
                $buttonValue2 = "/";
                break;
				
    }
	    return $buttonValue2;
	}				
    }
	
	}
 public function iHaveEnteredIntoTheCalculator($number3) {
         $numberValue3  = $number3;
    }
    /**
     * @When /^I hit "equals"$/
     */
    public function iHitEquals() {
		
		if ((buttonValue1.equals("+"))
		{
			$result  = $numberValue1+ ($numberValue2 * $numberValue3);
		}
		else 
		{
			$result = ($numberValue1 * $numberValue2 ) + $numberValue3;

		}
		return $result;
    }

    /**
     * @Then /^I see a result of "(\d+)"$/
     */
    public function iSeeAResultOf($result) {
        $result = $this->calculator->readScreen();
        if($result != $result) {
            throw new Exception("Wrong result, actual is [$result]");
        }
    }
	
}
