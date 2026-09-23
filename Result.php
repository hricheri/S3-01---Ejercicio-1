<?php

require_once "Athlete.php";
require_once "Event.php";
require_once "Medal.php";

class Result{

    private Athlete $athlete;
    private Event $event;
    private Medal $medal;

    public function __construct(Athlete $athlete, Event $event, Medal $medal) {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;

    }

    public function getAthlete(): Athlete {
        return $this->athlete;
    }

    public function getEvent(): Event {
        return $this->event;
    }

    public function getMedal(): Medal {
        return $this->medal;
    }


    public function __toString(): string {
        return $this->athlete->getName() . " from " . $this->athlete->getCountry() . " won " . $this->medal->name . " in " . $this->event->getName(). " on " . $this->event->getDate();
    }
}

?>