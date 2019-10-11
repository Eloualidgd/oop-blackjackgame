<?php

declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//$score_now = $_SESSION['score'];
//$_SESSION['score'] = 0;

class Blackjack {


    private $score = 0;
    const MIN = 1;
    const MAX = 11;
    const BJ_MAX = 21;

   //return value (int)
    public function getScore(): int
    {
        return $this->score;
    }
    //method 1 random
    //:void solamente significa q lo deje vacio pero no es importante
    public function Hit() :void
    {
        $hit = rand(self::MIN,self::MAX);
        //$this->score = $hit;
        $this->score +=  $hit;
        echo $this->score;

    }
    //method 2
   public function surrender()
    {
        echo "You have lost the game";
        //return(true);
    }
    //method 3
    public function stand()
    {
        echo "stand";

    }
}

