<?php

class Athlete {
    private string $athleteName;
    private string $country;

    public function __construct(string $athleteName, string $country) {
        $this->athleteName = $athleteName;
        $this->country = $country;
    }

    public function getName() {
        return $this->athleteName;
    }

    public function getCountry() {
        return $this->country;
    }

    /*public function __toString(): string {
        return $this->athleteName . " from " . $this->country;
    }*/
}
?>