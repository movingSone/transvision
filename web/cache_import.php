<?php

## Deduce the memoire.tmx directory name
$tmxfile = '/home/pascalc/transvision/TMX/memoire_en-US_' . $locale . '.tmx';

# clearstatcache();

include '/home/pascalc/transvision/TMX/' . $base . '/' . $locale . '/cache_' . $locale . '.php'; // localised
$tmx_fr = $tmx;

include '/home/pascalc/transvision/TMX/' . $base . '/' . $locale . '/cache_en-US.php'; // english
$tmx_en = $tmx;

// get language arrays
$l_en = $tmx_en;
$l_fr = $tmx_fr;

// Recherche par entity
if ($check4 == 'checked') {
    $l_en = array_flip($l_en);
}
