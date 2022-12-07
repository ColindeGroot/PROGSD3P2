<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "klant");

$korting = array(
    "product" => str_replace("[[product]]", "Platenspeler", "U heeft in de voorgaande bestelling voor [[product]] gekozen"),
    "korting" => "Krijg eengarits cadeua bij je volgende beselling"
);

$ondertekening = array(
  "groet" => "Groet,",
  "naam" => "Colin",
  "functie" => "Directeur webshop"
);

$aanbieding = array_merge($aanhef, $korting, $ondertekening);

print_r(var_dump($aanbieding));
