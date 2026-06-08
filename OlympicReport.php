<?php

require_once "AthleteManager.php";
require_once "EventManager.php";
require_once "Medal.php";
require_once "ResultManager.php";

class Olympics{

    private array $athletes = [];
    private array $events = [];
    private array $results = [];


    public function getAthletes() {
        return $this->athletes;
    }

    public function getEvents() {
        return $this->events;
    }

    public function getResults() {
        return $this->results;
    }


    public function addAthlete(Athlete $athlete) {
        $this->athletes[] = $athlete;

    }

    public function addEvent(Event $event) {
        $this->events[] = $event;
    }

    public function addResult(Result $result) {
        $this->results[] = $result;
    }


    public function __toString(): string {

        $output = "Olympic Games Results:\n";

        foreach ($this->results as $result) {
            // Al concatenar $result, PHP llamará automáticamente al __toString() de la clase Result
            $output .= "- " . $result . "\n";
        }

        return $output;
    }
}
?>