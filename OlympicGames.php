<?php

require_once "Result.php";

class OlympicGames
{
    private array $results = [];

    public function addResult(Result $result): void
    {
        $this->results[] = $result;
    }

    public function getResults(): array
    {
        return $this->results;
    }
}