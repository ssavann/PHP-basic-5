<?php 
    $lePrix = $_POST['prix'];  // le "prix" vient du fichier prix1.php (superglobale)
    $laQte = $_POST['qt'];  // le "qt" vient du fichier prix1.php (superglobale)
   
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>




<?php  //test si $laQte est un entier - DEBUT

    $laQte = ceil($laQte);   // pour arrondir un chiffre si l'utilisateur rentre un chiffre decimale 3.9 ou 2.5

    if((is_numeric($laQte)) AND ($laQte > 0)){   //definir la condition pour que $laQte soit numerique, alors il peut continuer le programme
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
        $total = $lePrix * ($laQte);
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
    
    
    

</body>
</html>