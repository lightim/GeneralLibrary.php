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

class Channel implements AddressInterface
{
    /**
     * Channel's Identify
     *
     * @var string
     */
    public $identify = '';

    /**
     * Postic Address
     *
     * @var Postic
     */
    public $postic;

    /**
     * Constructor
     *
     * @param string $name
     * @param Postic $postic
     */
    public function __construct(string $identify, Postic $postic)
    {
        $this->identify = $identify;
        $this->postic = $postic;
    }
}
