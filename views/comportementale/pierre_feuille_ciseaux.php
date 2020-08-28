<?php
include('/home/quentinp/Documents/formation/challenge/assets/classes/Game.php');

$maKey = '1ecf8209e8b2de33353275b56faffc15'; // Ta Key
$codeChallenge = 'PIERRE_FEUILLE_CISEAUX'; // Le code challenge

$game = new Game($maKey, $codeChallenge);

$data = $game->getDatasGame(); // Pour comprendre les données proposées par le challenge
echo '<pre>';
print_r($data);
echo '</pre>';	

// ---
// Code dédié au challenge
// ---
$enemy_plays = $data['coups'];
$count_enemy_play = strlen($enemy_plays);
$my_plays = '';
for ($i=0; $i < $count_enemy_play; $i++) { 
    if($enemy_plays[$i] == 'C'){
        $my_plays .= 'P';
    }elseif($enemy_plays[$i] == 'P'){
        $my_plays .= 'F';
    }else{
        $my_plays .= 'C';
    }
}

// Pour répondre au challenge, à décommenter une fois le challenge complété
$reponse = ['reponse' => $my_plays];
$game->push($reponse);