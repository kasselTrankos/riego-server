<?php
require_once __DIR__."/bootstrap.php";
require_once __DIR__.'/src/Riego.php';
require_once __DIR__.'/src/Water.php';

// $qb = $entityManager->createQueryBuilder();
// print_r($entityManager);
$riego = new Riego();
$water = new Water();
echo "<pre>";

$riego->setDate(new DateTime());
$riego->setDuration("20");
$entityManager->persist($riego);
$water->setState("100");
$water->setRiego($riego);
$entityManager->persist($water);

$entityManager->flush();
