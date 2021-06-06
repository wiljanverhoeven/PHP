<?php

$arrayone = [];

for ($i = 0; $i < 10; $i++) {
    $arrayone[] = "Herder" . $i;
}

foreach ($arrayone as $jaap => $piet) {
    if (!isset($arrayone[$jaap+10])) {
        $arrayone[$jaap + 10] = $piet;
    }
    unset ($arrayone[$jaap]);
}

echo "<pre>";
print_r($arrayone);
echo "</pre>";