<?php

require __DIR__ . '/inc/all.inc.php';

$id = (int) ($_GET['id'] ?? 0);

$worldCityRepository = new WorldCityRepositoty($pdo);
$city = $worldCityRepository->fetchById($id);
if(empty($city)) {
    header('Location: index.php');
    die();
}

render('city.view', [
    'city' => $city
]);