<?php

require_once "OlympicGames.php";


class OlympicReport{

    private OlympicGames $olympicGames;

    public function __construct(OlympicGames $olympicGames) {
        $this->olympicGames = $olympicGames;
    }

    public function __toString(): string {

        $output = "Olympic Games Results:\n";

        foreach ($this->olympicGames->getResults() as $result) {
            $output .= $result . "\n";
        }
        return $output;
    }
}
?>