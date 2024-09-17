<?php

setcookie("tema", "light", time() + 86400);

if (isset($_COOKIE['tema'])) {
    echo "o tema é " . $_COOKIE['tema'];
}
