<?php

require_once "Athlete.php";
require_once "Event.php";
require_once "Result.php";

class OlympicGames {

    private array $athletes = [];
    private array $events = [];
    private array $results = [];

    public function addAthlete(Athlete $athlete) {
        $this->athletes[] = $athlete;
    }

    public function addEvent(Event $event) {
        $this->events[] = $event;
    }

    public function addResult(Result $result) {
        $this->results[] = $result;
    }

    public function getAthletes(): array {
        return $this->athletes;
    }

    public function getEvents(): array {
        return $this->events;
    }

    public function getResults(): array {
        return $this->results;
    }
}