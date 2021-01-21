<?php
for ($i = 1; $i < 50; $i++) {
    if ($i % 3 == 0) {
        echo "foo $i ";
    }
}
echo "<br>";
for ($i = 1; $i < 50; $i++) {
    if ($i % 5 == 0) {
        echo "bar $i ";
    }
}
echo "<br>";
for ($i = 1; $i < 50; $i++) {
    if ($i % 3 == 0) {
        echo "fooBar $i ";
    } elseif ($i % 5 == 0) {
        echo "fooBar $i ";
    }
}
