<?php
include('/home/quentinp/Documents/formation/challenge/assets/classes/Game.php');

$maKey = '1ecf8209e8b2de33353275b56faffc15'; // Ta Key
$codeChallenge = 'WALL_E'; // Le code challenge

$game = new Game($maKey, $codeChallenge);

$data = $game->getDatasGame(); // Pour comprendre les données proposées par le challenge
echo '<pre>';
print_r($data);
echo '</pre>';	

// ---
// Code dédié au challenge
// ---
$max_charge = 100;
$increase_force = 2;
$min_charge = 20;
$force_wall_e = $data['force'];
$speed_wall_e = $data['vitesse'];
$charge_wall_e = $data['batterie'];
$wastes  = $data['dechets'];

foreach($wastes as $waste){
    if($force_wall_e >= $waste){
        $charge_wall_e -= 1;
    }else {
        $diff_force = $waste - $force_wall_e;
        $cost = $diff_force * $increase_force;

        if($cost <= $force_wall_e/2){
            $force_wall_e -= $cost;
        }else{
            $force_wall_e -= 2;
        }
    }
    if($charge_wall_e < $min_charge){
        $charge_wall_e = $max_charge - $speed_wall_e;
    }
}
print_r($charge_wall_e);
// Pour répondre au challenge, à décommenter une fois le challenge complété
$reponse = ['reponse' => $charge_wall_e];
$game->push($reponse);