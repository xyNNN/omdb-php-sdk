<?php
/*
 * This file is part of the omdb-php-sdk project
 *
* (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
 */

namespace OmDbApi;

use Exception;
use GuzzleHttp\ClientInterface;
use OmDbApi\Exception\OmDbApiException;
use OmDbApi\Request\RequestInterface;

/**
 * Class OmDbApi
 *
 * @package OmDbApi
 */
class OmDbApi
{
    /** @var ClientInterface $client */
    private $client;

    /** @var string $url */
    private $url;

    /**
     * @return ClientInterface
     */
    private function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param ClientInterface $client
     * @param                 $url
     */
    public function __construct(ClientInterface $client, $url)
    {
        $this->client = $client;
        $this->url = $url;
    }

    /**
     * @param RequestInterface $request
     *
     * @return mixed|\SimpleXMLElement
     * @throws OmDbApiException
     */
    public function send(RequestInterface $request)
    {
        $client = $this->getClient();

        try {
            $response = $client->send($request);

            if ($request->isXml()) {
                return $response->xml();
            }

            return $response->json();
        } catch (Exception $exception) {
            throw new OmDbApiException($exception);
        }
    }
}