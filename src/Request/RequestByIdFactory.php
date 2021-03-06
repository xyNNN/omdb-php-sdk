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

use OmDbApi\OmDbApi;

/**
 * Class RequestByIdFactory
 *
 * @package OmDbApi\Request
 */
class RequestByIdFactory implements FactoryInterface
{
    /**
     * @param OmDbApi $api
     * @param string $value
     * @param array $options
     *
     * @return Request
     */
    public static function create(OmDbApi $api, $value, $options = array())
    {
        $request = new Request('GET', $api->getUrl());
        $request->setRequestbyId($value);

        return $request;
    }
}
