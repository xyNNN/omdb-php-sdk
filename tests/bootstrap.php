<?php
/*
 * This file is part of the omdb-php-sdk project
 *
* (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
 */

$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies to run test suite.');
}
$loader = require_once $file;
$loader->add('OmDbApi\\Tests', __DIR__);
