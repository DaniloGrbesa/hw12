<?php
    $sir_zid= $_POST["sir_zid"];
    $vis_zid= $_POST["vis_zid"];
    $sir_ploc= $_POST["sir_ploc"];
    $vis_ploc= $_POST["vis_ploc"];

    $zid_pov= $sir_zid * $vis_zid;

    $ploc_pov= $sir_ploc * $vis_ploc;

    $br_ploc= round($zid_pov / $ploc_pov, 2);



    if ($zid_pov<$ploc_pov){
        echo "Zid ne moze biti manje povrsine od povrsine plocice";
    } else{
        echo "Potrebno je " . $br_ploc ." plocica." . "<br>";
    }




?>