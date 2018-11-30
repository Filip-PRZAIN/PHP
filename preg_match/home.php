<?php
$tekst=$_POST["tekst"];
if(preg_match("/(\w)(.7z)$/", $tekst,$rjesenje, PREG_OFFSET_CAPTURE)) {
    echo $tekst;
} else {
    echo "Pogrešan unos!";
}

/*
 * Unosite ime 7zip arhive
 * primjer: ime_prezime.7z
 * */
?>