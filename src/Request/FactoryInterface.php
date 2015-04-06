<?php
/*
 * This file is part of the omdb-php-sdk project
 *
* (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
 */

namespace OmDbApi\Request;

use GuzzleHttp\Message\Request;
use OmDbApi\OmDbApi;

/**
 * Interface FactoryInterface
 *
 * @package OmDbApi\Request
 */
interface FactoryInterface
{
    /**
     * @param OmDbApi $api
     * @param mixed $value
     * @param array $options
     *
     * @return Request
     */
    public static function create(OmDbApi $api, $value, $options = array());
}
