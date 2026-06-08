<?php
require_once "OlympicReport.php";

// 1. Instanciar el orquestador
$olympics = new Olympics();

// 2. Crear las entidades de Atletas y agregarlas
$bolt = new Athlete('Usain Bolt', 'Jamaica');
$phelps = new Athlete('Michael Phelps', 'USA');
$olympics->addAthlete($bolt);
$olympics->addAthlete($phelps);

// 3. Crear las entidades de Eventos y agregarlas
$sprint = new Event('100m Sprint', '2024-08-01');
$swimming = new Event('Swimming', '2024-08-02');
$olympics->addEvent($sprint);
$olympics->addEvent($swimming);

// 4. Crear los Resultados relacionando los objetos y el Enum, y agregarlos
$result1 = new Result($bolt, $sprint, Medal::GOLD);
$result2 = new Result($phelps, $swimming, Medal::GOLD);
$olympics->addResult($result1);
$olympics->addResult($result2);

// 5. ¡MOSTRAR TODO JUNTO!
// Al hacer echo a un objeto, PHP busca automáticamente su método __toString()
echo $olympics;

?>