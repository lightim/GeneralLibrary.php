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

class Path implements AddressInterface
{
    /**
     * Parts of the Path
     * 
     * @var string[]
     */
    public $parts = [];

    /**
     * Query Parameters
     *
     * @var string[string]
     */
    public $parameters = [];

    /**
     * Parent Address
     *
     * @var AddressInterface
     */
    public $parent;

    /**
     * Constructor
     *
     * @param AddressInterface $parent
     * @param string $uri
     */
    public function __construct(AddressInterface $parent, string $uri)
    {
        $this->parent = $parent;
        $pass_one = parse_url($uri);

        if (array_key_exists('path', $pass_one)) {
            $this->parts = explode('/', $pass_one['path']);
        }

        if (array_key_exists('query', $pass_one)) {
            parse_str($pass_one['query'], $this->parameters);
        }
    }
}
