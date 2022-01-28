<?php

function GET($user_id) {
    echo 'user id: ' . $user_id . '<br>';
}



function before_GET($user_id) {
    if ($user_id > 10) {
        echo 'invalid user id <br>';
        return false;
    }

    return true;
}

function after_GET($user_id) {
    echo 'Delete cache file for ' . $user_id;
}