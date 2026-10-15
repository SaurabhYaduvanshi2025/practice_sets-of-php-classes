<?php
// Error display on karne ke liye
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Aapka testing logic:
if (!empty($_REQUEST)) {
    foreach ($_REQUEST as $key => $data) {
        echo htmlspecialchars($key) . " is " . htmlspecialchars($data) . "<br/>";
    }
} else {
    echo "Koi data receive nahi hua! Pehle form submit karein.";
}
?>