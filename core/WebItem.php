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


class   WebItem
{

    public $title;
    public $icon;

    public $debug = true;
    public $toolbar = true;
    public $csrf = true;
    public $apps = [];

    public $layout = false;
    public $layoutFile;

    public $type = self::type['html'];

    public $cache = false;
    public $cacheHttp = false;

    /* @var callable $call */
    public $call;

    /* @var callable $callHttp */
    public $callHttp;

    public const type = [
        'html' => 'html',
        'part' => 'part',
        'ajax' => 'ajax',
        'ajaxFile' => 'ajaxFile',
        'partFile' => 'partFile',
        'ajaxFilePreg' => 'ajaxFilePreg',
    ];


    /**
     *
     * Notify
     */

    public $loader = true;
    public $growl = true;

    public function __construct()
    {
        global $boot;

        if (empty($this->layoutFile))
            $this->layoutFile = $boot->env('layout');
    }


}
