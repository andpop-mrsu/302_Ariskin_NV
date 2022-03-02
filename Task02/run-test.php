<?php
$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once($autoloadPath);
} 

use function App\Test\runTest;

runTest();
?>