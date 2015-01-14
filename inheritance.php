<?php


class Gymnastics {
        public $events;
        public $score;
        public $teams;
        public $place;

        function __construct($teams, $score, $events, $place) {
        	$this->events = $events;
        	$this->score = $score;
        	$this->teams = $teams;
        	$this->place = $place;
        }

        function Welcome() {
            return "Come and watch these" . $this->teams . 
            "and see these girls compete on ." . $this->events;
        }
}

class Gymnastics2 extends Gymnastics {

	    function Welcome() {
            return "The best girl scored" . $this->score . " on all around.";
            
        }
       
}

class Gymnastics3 extends Gymnastics {

	    function Welcome() {
            return "She won" . $this->place . "and was very happy.";
            
        }
       
}

        $National = new Gymnastics(" teams ", " 37.4 ", "vault, beam, bars and floor", "1st" );
           echo $National->Welcome();



?>