<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer' . '/autoload_real.php';

spl_autoload_register(function ($classname) {
    require ("classes/" . $classname . ".php");
});
return ComposerAutoloaderInit929e6bedb764b411904704b65c6ec194::getLoader();
