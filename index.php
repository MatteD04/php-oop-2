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

$croquettes = new cat('#', 'Felix special', '12.99', 'food', 'cat');
$pate = new cat('#', 'Fish pate', '8.99', 'food', 'cat');
$biscuits = new cat('#', 'bisc cat', '4.99', 'food', 'cat');
$kennel = new cat('#', 'pet villa', '35', 'kennel', 'cat');
// var_dump($croquettes);

$food = [
    $croquettes,
    $pate,
    $biscuits
];
$kennels = [
    $kennel
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

    <div class="cats">
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
            <?php foreach($kennels as $cot) { ?>
            <div class="card">
                <div><img src=<?php echo $cot->image; ?>></div>
                <div><?php echo $cot->title; ?></div>
                <div><?php echo $cot->price; ?> €</div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>