<?php

use AndreasWeber\YealinkWorkflow\Script\FilterScript;

// bootstrap application
$app = require_once __DIR__ . '/../inc/bootstrap.php';

// bootstrap script
$script = new FilterScript($app);

// invoke script
$script->invoke();
