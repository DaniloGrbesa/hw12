<?php




$drvo_vis = 100;
$drvo_brz = 1;
$puz_start = 0;
$puz_brz = 3;
$dan = 0;

$puz_preso = 0;

$ef_brz = $puz_brz - $drvo_brz;

$potrebni_dani = $drvo_vis / $ef_brz;


while ($dan <= $potrebni_dani) {
    if ($puz_start < $drvo_vis) {
        echo "Dan $dan: Puz je presao $puz_start cm, visina drveta je $drvo_vis<br>";
    } else {
        echo "Puz se popeo na drvo za $dan dana<br>";
    }
    $drvo_vis = $drvo_vis + $drvo_brz;
    $puz_start = $puz_start + $puz_brz;
    $dan++;
}
if ($drvo_brz >= $puz_brz) {
    echo "Puz se nece popeti na drvo";
}