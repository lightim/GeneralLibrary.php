<?php

/**
 * Lightim General Library
 * 
 * This repository is a part of the
 * Lightim Project, led by xtlsoft.
 * By xtlsoft, all rights reserved.
 * 
 * @author   Tianle Xu <xtl@xtlsoft.top>
 * @license  MIT
 * @package  lightim
 * @category im
 * @link     https://dev.lightim.pw
 */

namespace Lightim\Library\General\Address\Postic;

class ConnectionInfo
{
    /**
     * Protocol name
     *
     * 'tcp' or 'http' or 'tls' or 'https'
     * 
     * @var string
     */
    public $protocol = 'tcp';

    /**
     * Host IP Address
     *
     * @var string
     */
    public $host = '0.0.0.0';

    /**
     * Port number
     *
     * @var integer
     */
    public $port = 24431;

    /**
     * Convert to string
     *
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->protocol}://{$this->host}:{$this->port}";
    }

    /**
     * Constructor
     *
     * @param string $protocol
     * @param string $host
     * @param string $port
     */
    public function __construct(string $protocol, string $host, string $port)
    {
        $this->protocol = $protocol;
        $this->host = $host;
        $this->port = $port;
    }
}
