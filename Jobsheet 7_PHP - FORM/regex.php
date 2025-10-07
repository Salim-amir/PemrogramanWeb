<?php
$pattern = '/go{1,3}d/';
$text = "god is good.";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok.";
}
