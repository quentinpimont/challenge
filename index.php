<?php
$behaviour_path = 'views/comportementale/';
$behaviour_files = scandir($behaviour_path);
$calcul_path = 'views/calcul/';
$calcul_files = scandir($calcul_path);
$break_path = 'views/break_the_code';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
</head>
<body>
    <h1>Challenge de : <a href="https://code-challenge.webandcow.com">code-challenge.webandcow.com</a></h1>
    <h2>Comprtementale</h2>
    <?php
        if(count($behaviour_files) == 2){
            ?>
            <p>Pas d'exercices trouvés</p>
            <?php
        }else{
            ?>
            <ul>
            <?php
            foreach ($behaviour_files as $behaviour_file) {
                if($behaviour_file != '.' && $behaviour_file != '..'){
                    ?>
                    <li><a href="<?= $behaviour_path . $behaviour_file ?>"><?= basename($behaviour_file, '.php') ?></a></li>
                    <?php
                }
            }
            ?>
            </ul>
            <?php
        }
    ?>
    <h2>Calcul</h2>
    <?php
        if(count($calcul_files) == 2){
            ?>
            <p>Pas d'exercices trouvés</p>
            <?php
        }else{
            ?>
            <ul>
            <?php
            foreach ($calcul_files as $calcul_file) {
                if($calcul_file != '.' && $calcul_file != '..'){
                    ?>
                    <li><a href="<?= $calcul_path . $calcul_file ?>"><?= basename($calcul_file, '.php') ?></a></li>
                    <?php
                }
            }
            ?>
            </ul>
            <?php
        }
    ?>
    <h2>Break_the_code</h2>
    <?php
        if(count($break_files) == 2){
            ?>
            <p>Pas d'exercices trouvés</p>
            <?php
        }else{
            ?>
            <ul>
            <?php
            foreach ($break_files as $break_file) {
                if($break_file != '.' && $break_file != '..'){
                    ?>
                    <li><a href="<?= $break_path . $break_file ?>"><?= basename($break_file, '.php') ?></a></li>
                    <?php
                }
            }
            ?>
            </ul>
            <?php
        }
    ?>
</body>
</html>