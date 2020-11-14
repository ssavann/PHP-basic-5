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

<?php       // $_POST['calculer'] - DEBUT
if(isset($_POST['calculer'])) {        //determine si l'internaute a cliquer sur le bouton "calculer" 
    //echo 'Variable definie';            //permet de voir si on a recuperer la variable lorsqu'on a appuyer sur le bouton calculer

    if($_POST['qt']){   // $_POST['qt'] - DEBUT

?>

<?php 
    $lePrix = $_POST['prix'];  //provient du formulaire name="prix"
    $laQte = $_POST['qt'];      //provient du formulaire name="qt"
   
?>

<?php  //test si $laQte est un entier - DEBUT

    $laQte = ceil($laQte);   // pour arrondir un chiffre si l'utilisateur rentre un chiffre decimale 3.9 ou 2.5

    if((!is_numeric($laQte)) OR ($laQte <= 0)) {   //definir la condition pour que $laQte n'est pas numerique, alors il y a message d'erreur. Sinon, le programme continue
?>

<h1 align="center">Une erreur est survenue!</h1> 

<?php //test si $laQte est un entier - SUITE
}else{
?>



    <?php //calcul du prix

    if($laQte == 10) {
        $total = $lePrix * ($laQte-1);
        $message = 'Remise de ' .$lePrix. ' Euros'; 

    }elseif($laQte > 10){
        $total = $lePrix * $laQte;
        $remise = $total * 0.20;
        $total = $total - $remise;
        $message = 'Remise de ' .$remise. ' Euros';



    }else{
        $total = $lePrix * $laQte;
        $message = 'Pour beneficier d\'une remise, acheter 10 articles!';
    }


    ?>

    <h1 align="center">
        Le prix total a payer est de <?= $total; ?> Euros HT. <br />
        <?= $message; ?>
    </h1>

<?php  //test si $laQte est un entier - FIN
}       
?>

<?php //$_POST['qt'] - FIN
}
?>
<p align="center"><a href="prix3_economie.php">RETOUR</a></p>

<?php //$_POST['calculer'] - SUITE
} else {  // s'il n'est pas definie
    
?>


<h1 align="center"><?= $prix; ?> Euros HT</h1>
<p align="center">Si vous achetez 10 articles, nous vous offrons 1 article gratuit!</p>
<p align="center">Si vous achetez plus de 10 articles, nous vous offrons une remise de 20%</p>

<form method="post" action=""> <!-- "action" qui est vide --> 
<p align="center">
    <input type="text" name="qt" placeholder="Quantite" />  <!-- si le type est "text", l'utilisateur peut rentrer n'importe quel lettre, charactere %&)(&@! ou nombre decimal ou nombre negatif -->
    <!-- <input type="number" name="qt" placeholder="Quantite" /> -->
    <input type="hidden" name="prix" value="<?= $prix; ?>" />  <!-- pour cacher le calculateur -->
    <input type="submit" name="calculer" value="Calculer" />

    <!-- le "prix" et "qt" vont etre transferer au fichier prixTotal1.php -->

</p>
</form>

<?php //$_POST['calculer'] - FIN
}
?>

</body>
</html>