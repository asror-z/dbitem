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


use zetsoft\service\cores\Rbac;

class RestItem
{
    public $authType = Rbac::authType['none'];
    public $cache = false;
    public $cacheHttp = false;
}
