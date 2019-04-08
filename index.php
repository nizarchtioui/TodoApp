<?php
function Caluler($qte, $pu, $taux)
{

    $prix_ht = $pu * $qte;
    $tva = $prix_ht * $taux/100;

    return $prix_ht + $tva;
}
function echanger (&$a,&$b){
    $aux=$a;
    $a=$b;
    $b=$aux;

}

function effacer($nom,$prenom,$age){


}
if (isset($_POST['effacer'])){
    echo "effacer";
}
if (isset($_POST['envoyer'])){


    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $age= $_POST['age'];
    $sexe=$_POST['mas'];
    if ($nom==""||$prenom==""|$sexe==""){
        echo "Veuillez entez des valeur";
        return;
    }
    if ($sexe=="m"){
        echo "vous êtes Mr $nom $prenom ager de $age";
    }else{
        echo "vous êtes Mme $nom $prenom ager de $age";
    }



}
if(isset($_POST['calcul'])) {



   $qte = $_POST['qte'];
   $pu =$_POST['pu'];
   $taux =$_POST['taux'];
   if ($qte==""||$pu==""||$taux==""){
       echo "Veuillez entez des valeur";
       return;
   }
   $resut=Caluler($qte,$pu,$taux);

   echo "<table border='2px' width='20px' >
<tr>


<td>prix unitaire</td>
<td>$pu</td>
</tr>
<tr>


<td>taux</td>
<td>$taux</td>
</tr>
<tr>


<td>qte</td>
<td>$qte</td>
</tr>
<tr>


<td>Prixttc</td>
<td>$resut</td>
</tr>
</table>";
$a=1;
$b=2;
echo "valeur initial<br>  ";
    echo "a=". $a ."<br>";
    echo "b=".$b."<br>";
   echanger($a,$b);
    echo "valeur final\n"."<br>";
   echo "a=". $a."<br>";
   echo "b=".$b."<br>";

}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
</head>
<body>
<center>
    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom""><br>
        <input type="text" name="prenom" placeholder="Prenom"><br>
        <input type="text" name="age" placeholder="Age"><br>
        <input type="radio" name="mas" value="m">masculin <br>
        <input type="radio" name="mas" value="f" >Feminin <br>
        <select name="lang[]" id="">
            <option value="f">Francais</option>
            <option value="an">anglais</option>
            <option value="ar">arab</option>
            <option value="t">Francais</option>
        </select>
        <input type="submit" value="Effacer"   name="effacer" ><br>
        <input type="submit" value="Envoyer" name="envoyer"><br>

        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>

</center>
</body>
</html>
