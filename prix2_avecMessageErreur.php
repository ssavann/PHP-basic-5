<?php
$prix = 10;

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<h1 align="center"><?= $prix; ?> Euros HT</h1>
<p align="center">Si vous achetez 10 articles, nous vous offrons 1 article gratuit!</p>
<p align="center">Si vous achetez plus de 10 articles, nous vous offrons une remise de 20%</p>

<form method="post" action="prixTotal2_avecMessageErreur.php">
<p align="center">
    <input type="text" name="qt" placeholder="Quantite" />  <!-- si le type est "text", l'utilisateur peut rentrer n'importe quel lettre, charactere %&)(&@! ou nombre decimal ou nombre negatif -->
    <!-- <input type="number" name="qt" placeholder="Quantite" /> -->
    <input type="hidden" name="prix" value="<?= $prix; ?>" />  <!-- pour cacher le calculateur -->
    <input type="submit" value="Calculer" />

    <!-- le "prix" et "qt" vont etre transferer au fichier prixTotal1.php -->

</p>
</form>

</body>
</html>