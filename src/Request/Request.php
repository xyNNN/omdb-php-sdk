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

use GuzzleHttp\Message\Request as GuzzleRequest;
use GuzzleHttp\Query;
use InvalidArgumentException;

/**
 * Class Request
 *
 * @package OmDbApi\Request
 */
class Request extends GuzzleRequest
{
    /** @var string TYPE_MOVIES */
    const TYPE_MOVIES = 'movie';

    /** @var string TYPE_SERIES */
    const TYPE_SERIES = 'series';

    /** @var string TYPE_EPISODES */
    const TYPE_EPISODES = 'episode';

    /** @var string PLOT_SHORT */
    const PLOT_SHORT = 'short';

    /** @var string PLOT_FULL */
    const PLOT_FULL = 'full';

    /** @var string RESPONSE_JSON */
    const RESPONSE_JSON = 'json';

    /** @var string RESPONSE_XML */
    const RESPONSE_XML = 'xml';

    /**
     * @param $id
     *
     * @return $this
     */
    public function setRequestbyId($id)
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('i', $id);
        }

        return $this;
    }

    /**
     * @param $title
     *
     * @return $this
     */
    public function setRequestByTitle($title)
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('t', $title);
        }

        return $this;
    }

    /**
     * @param string $search
     *
     * @return $this
     */
    public function setRequestBySearch($search = '')
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('s', $search);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setTypeToMovie()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('type', self::TYPE_MOVIES);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setTypeToSeries()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('type', self::TYPE_SERIES);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setTypeToEpisode()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('type', self::TYPE_EPISODES);
        }

        return $this;
    }

    /**
     * @param $year
     *
     * @return $this
     */
    public function setYearOfRelease($year)
    {
        if (!is_int($year)) {
            throw new InvalidArgumentException(
                'Only integer values are valid'
            );
        }

        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('y', $year);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setPlotToShort()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('plot', self::PLOT_SHORT);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setPlotToFull()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('plot', self::PLOT_FULL);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setResponseToJson()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('r', self::RESPONSE_JSON);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setResponseToXml()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('r', self::RESPONSE_XML);
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseType()
    {
        $query = $this->getQuery();
        if($query instanceof Query) {
            return $query->get('r');
        }
    }

    /**
     * @return bool
     */
    public function isXml()
    {
        $isXml = false;
        $query = $this->getQuery();
        if($query instanceof Query) {
            $isXml = ($query->get('r') == self::RESPONSE_XML);
        }

        return $isXml;
    }

    /**
     * @return bool
     */
    public function isJson()
    {
        $isJson = false;
        $query = $this->getQuery();
        if($query instanceof Query) {
            $isJson = ($query->get('r') == self::RESPONSE_JSON);
        }

        return $isJson;
    }

    /**
     * @return $this
     */
    public function includeRottenTomatoeRatings()
    {
        $query = $this->getQuery();
        if ($query instanceof Query) {
            $query->set('tomatoes', true);
        }

        return $this;
    }
}