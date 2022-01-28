<?php

function GET($what = null, $order = "desc") {
    $item = "all";

    if ($what !== null) {
        $item = $what;
    }

    echo "listing $item in $order order";
}