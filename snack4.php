<?php
/* Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text = "Questo talismano di ferro battuto incrementa enormemente la resistenza ai danni fisici (20% in PvE e 5% in PvP). 
Potete trovarlo al piano superiore dell’edificio che precede Malenia, calandovi dai grandi rami che sovrastano la struttura. 
Per raggiungere l’area in questione che ricordiamo far parte di un dungeon segreto e opzionale dovrete prima di tutto esplorare Ordina, 
la città a nord-ovest delle Vette dei giganti. Nel caso voleste altri indizi sul come trovare la Spada di Miquella, ecco la nostra guida 
dedicata allo Scarabeo d’argento di Elden Ring, nella quale spieghiamo anche dove si trovano le due metà del medaglione segreto con cui attivare il 
montacarichi di Rold. Inoltre, sulle pagine di Everyeye potete scoprire dove si trova lo Scarabeo d’oro di Elden Ring, il talismano più indicato per 
accumulare molte rune.";

$newText = explode(".", $text);
var_dump($newText);
for($i=0; $i < count($newText); $i++){
    echo "<p>" . $newText[$i] . "</p>";
}
?>