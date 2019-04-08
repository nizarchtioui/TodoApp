<?php
Class Compter
{
    function Caluler($qte, $pu, $taux)
    {

        $prix_ht = $pu * $qte;
        $tva = $prix_ht * $taux;

        return $prix_ht + $tva;
    }
}