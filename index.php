<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando 
(prodotto, cibo, gioco, cuccia). -->

<?php
require_once __DIR__ . '/petProducts.php';
require_once __DIR__ . '/cat.php';
require_once __DIR__ . '/dog.php';

$croquettes = new cat('#', 'Felix special', '12.99', 'food', 'cat');
$dogCroquettes = new dog('#', 'bobby j', '10.99', 'food', 'dog');
$pate = new cat('#', 'Fish pate', '8.99', 'food', 'cat');
$dogPate = new dog('#', 'dog pate', '8.99', 'food', 'dog');
$biscuits = new cat('#', 'bisc cat', '4.99', 'food', 'cat');
$kennel = new cat('#', 'pet villa', '35', 'kennel', 'cat');
$mouse = new cat('#', 'topo racer', '24.99', 'toys', 'cat');
$scratcher = new cat('#', 'pet scratcher', '14', 'toys', 'cat');
// var_dump($croquettes);

$food = [
    $croquettes,
    $pate,
    $biscuits
];
$kennels = [
    $kennel
];
$toys = [
    $mouse,
    $scratcher
];


$foodDog = [
    $dogCroquettes,
    $dogPate
];
$kennelsDog = [
];
$toysDog = [

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Pet Food</title>
</head>
<body>
    <h1>I NOSTRI PRODOTTI:</h1>

    <div class="pets">
        <h2>Sezione gatti</h2>
        <h3>Cibo:</h3>
        <div class="box">
            <?php foreach($food as $catFood) { ?>
            <div class="card">
                <div><img src=<?php echo $catFood->image; ?>></div>
                <div><?php echo $catFood->title; ?></div>
                <div><?php echo $catFood->price; ?> €</div>
            </div>
            <?php } ?>
        </div>

        <h3>Cucce:</h3>
        <div class="box">
            <?php foreach($kennels as $petHouse) { ?>
            <div class="card">
                <div><img src=<?php echo $petHouse->image; ?>></div>
                <div><?php echo $petHouse->title; ?></div>
                <div><?php echo $petHouse->price; ?> €</div>
            </div>
            <?php } ?>
        </div>

        <h3>Giochi:</h3>
        <div class="box">
            <?php foreach($toys as $toy) { ?>
            <div class="card">
                <div><img src=<?php echo $toy->image; ?>></div>
                <div><?php echo $toy->title; ?></div>
                <div><?php echo $toy->price; ?> €</div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="pets">
        <h2>Sezione cani</h2>
        <h3>Cibo:</h3>
        <div class="box">
            <?php foreach($foodDog as $dogFood) { ?>
            <div class="card">
                <div><img src=<?php echo $dogFood->image; ?>></div>
                <div><?php echo $dogFood->title; ?></div>
                <div><?php echo $dogFood->price; ?> €</div>
            </div>
            <?php } ?>
        </div>

        <h3>Cucce:</h3>
        <div class="box">
            <?php foreach($kennelsDog as $dogHouse) { ?>
            <div class="card">
                <div><img src=<?php echo $dogHouse->image; ?>></div>
                <div><?php echo $dogHouse->title; ?></div>
                <div><?php echo $dogHouse->price; ?> €</div>
            </div>
            <?php } ?>
        </div>

        <h3>Giochi:</h3>
        <div class="box">
            <?php foreach($toysDog as $toyDog) { ?>
            <div class="card">
                <div><img src=<?php echo $toyDog->image; ?>></div>
                <div><?php echo $toyDog->title; ?></div>
                <div><?php echo $toyDog->price; ?> €</div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>