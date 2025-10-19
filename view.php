<?php
header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "✅ Полученные данные:\n\n";
    foreach ($_POST as $key => $value) {
        printf("%s: %s\n", $key, $value);
    }
} else {
    echo "⛔ Данные не отправлены методом POST.";
}
