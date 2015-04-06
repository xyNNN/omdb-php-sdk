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

use GuzzleHttp\Message\RequestInterface as GuzzleRequestInterface;

/**
 * Interface RequestInterface
 *
 * @package OmDbApi\Request
 */
interface RequestInterface extends GuzzleRequestInterface
{
    /**
     * @return string
     */
    public function getResponseType();

    /**
     * @return bool
     */
    public function isXml();

    /**
     * @return mixed
     */
    public function isJson();
}
