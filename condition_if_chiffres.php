<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php

$a = 20;
$b = 12;

$calcul = $a - $b;




if($calcul == 0){
echo 'Le resultat est nul';
} else {
echo 'Le resultat est positif. <br />';
echo 'la valeur est ' .$calcul. '. <br /><br />';
}
?>

<?php

$c = 5000;
$d = 8000;

$calcul2 = $c - $d;


if($calcul2 < 0){
echo 'Le resultat est negatif.<br />';
echo 'la valeur est ' .$calcul2. '. <br /><br />';
} else {
echo 'Le resultat est positif. <br />';
echo 'la valeur est ' .$calcul2. '. <br /><br />';
}

?>


</body>
</html>