<?php  

class Event {
    private string $eventName;
    private string $eventDate;

    public function __construct(string $eventName, string $eventDate) {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
    }

    public function getName() {
        return $this->eventName;
    }

    public function getDate() {
        return $this->eventDate;
    }

    /*public function __toString() {
        return $this->eventName . " on " . $this->eventDate;
    }*/

}

?>  