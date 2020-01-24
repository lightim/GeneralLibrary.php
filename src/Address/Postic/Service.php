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

class Service
{
    /**
     * Http Service
     *
     * @var ConnectionInfo
     */
    public $httpService;

    /**
     * Socket Service
     *
     * @var ConnectionInfo
     */
    public $socketService;

    /**
     * Constructor
     *
     * @param ConnectionInfo $httpService
     * @param ConnectionInfo $socketService
     */
    public function __construct(ConnectionInfo $httpService, ConnectionInfo $socketService)
    {
        $this->httpService = $httpService;
        $this->socketService = $socketService;
    }
}
