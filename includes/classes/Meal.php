<?php
class Meal
{   /**
    * @var Appetizer
    */
    protected $appetizer;
    /**
     * @var MainDish
     */
    protected $mainDish;
    /** 
     * @var Dessert
     */
    protected $dessert;
    
    /**
     * Constacts a new instance of Meal, using an appetizer, a main dish and a dessert.
     * 
     * @param Appetizer $appetizer
     * @param MainDish | Appetizer $mainDish
     * @param Dessert $dessert
     */

    public function __construct(Appetizer $appetizer, MainDish  $mainDish, Dessert $dessert)
    {
        $this->appetizer = $appetizer;
        $this->mainDish = $mainDish;
        $this->dessert = $dessert;
    }

    public function eat(): string
    {   
        // grab whatever "eat"ing the appetizer, main and dessert looks like, and store them in a variable
        $eatenAppetizer = $this->appetizer->eat();
        $eatenMainDish = $this->mainDish->eat();
        $eatenDessert = $this->dessert->eat();

        return $eatenAppetizer . '' . $eatenMainDish . '' . $eatenDessert;
    }
}