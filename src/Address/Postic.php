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

namespace Lightim\Library\General\Address;

use Lightim\Library\General\Address\Postic\Service;

class Postic implements AddressInterface
{
    /**
     * Postic Service Domain
     *
     * @var string
     */
    public $domain = "0.0.0.0";

    /**
     * Postic Service Connection Info
     *
     * @var Service
     */
    public $service;

    /**
     * Constructor
     *
     * @param string $domain
     * @param Service $service
     */
    public function __construct(string $domain, Service $service)
    {
        $this->domain = $domain;
        $this->service = $service;
    }
}
