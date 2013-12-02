#!/usr/bin/env php
<?php

/*
 * This file is part of the phprst package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/vendor/autoload.php';

use Rst\Application;

$application = new Application();
$application->run();

// filesystem component testing
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exeption\IOExceptionInterface;

$fs = new Filesystem();

try {
    
} catch (IOExceptionInterface $e) {
    echo "An error occured.";
}

