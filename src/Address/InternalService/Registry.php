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

namespace Lightim\Library\General\Address\InternalService;

use Lightim\Library\General\Address\AddressInterface;

class Registry implements InternalServiceInterface, AddressInterface
{
    /**
     * Server Address
     *
     * @var string
     */
    public $address = '';

    /**
     * Constructor
     *
     * @param string $protocol
     * @param string $server
     */
    public function __construct(string $address)
    {
        $this->address = $address;
    }
}
