<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\core;


class ServiceItem
{


    public $namespace = App;
    public $service;
    public $method;

    public $args;
    public $delay = false;


    /**
     * @var bool
     *
     * Run from App folder
     */
    public $App = false;
}
