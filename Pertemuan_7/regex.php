<?php
$pattern = '/[a-z]/'; // Cocokan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan! <br>";
} else {
    echo "Tidak ada huruf kecil! <br>";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan:  " . $matches[0] . "<br>";

} else {
    echo "Tidak ada yang cocok! <br>";
}
?>