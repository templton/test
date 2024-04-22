<?php

use App\TestClass;

require __DIR__ . './../vendor/autoload.php';

echo "ВЗЛЕТЕЛИ!!! start = " . (new TestClass())->start;
