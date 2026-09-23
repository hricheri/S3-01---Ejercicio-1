<?php

require_once "Athlete.php";
require_once "Event.php";
require_once "Medal.php";
require_once "Result.php";
require_once "OlympicGames.php";
require_once "OlympicReport.php";

$olympics = new OlympicGames();

$bolt = new Athlete('Usain Bolt', 'Jamaica');
$phelps = new Athlete('Michael Phelps', 'USA');

$sprint = new Event('100m Sprint', '2024-08-01');
$swimming = new Event('Swimming', '2024-08-02');

$result1 = new Result($bolt, $sprint, Medal::GOLD);
$result2 = new Result($phelps, $swimming, Medal::GOLD);

$olympics->addResult($result1);
$olympics->addResult($result2);

$report = new OlympicReport($olympics);

echo $report;