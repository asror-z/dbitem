<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\data;


class Settings
{

    public $type;
    public const type = [
        'model' => 'model',
        'form' => 'form',
    ];
    
    public $dbName;
    public $allApp;

    public $class;
    public $className;
    public $classBase;
    public $namespace;

}
