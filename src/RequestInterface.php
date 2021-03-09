<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Request\Interfaces;

interface RequestInterface
{
    /**
     * Sets the parameters for this request-hh. If any parameter is null, globals will be used.
     * This method also re-initializes all properties.
     *
     * @param array|null $query The GET parameters
     * @param array|null $request The POST parameters
     * @param array|null $attributes The request-hh attributes (parameters parsed from the PATH_INFO, ...)
     * @param array|null $cookies The COOKIE parameters
     * @param array|null $files The FILES parameters
     * @param array|null $server The SERVER parameters
     * @param string|resource|null $content The raw body data
     *
     * @return  void
     */
    public function capture(?array $query = null, ?array $request = null, ?array $attributes = null, ?array $cookies = null, ?array $files = null, ?array $server = null, $content = null): void;
}