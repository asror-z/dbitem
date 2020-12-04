<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\data;


use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\models\menu\Menu;
use zetsoft\service\cores\Menus;

class TabItem
{

    public const target = [
        'self' => '_self',
        'blank' => '_blank',
    ];

    public $target = Menu::target['_self'];
    public $icTarget = '';
    public $slug;
    public $step;

    public $pushUrl = false;
    public $url = '';
    public $active = false;
    public $disabled = false;
    public $content;

    public $title;
    public $tooltip;
    public $name;
    public $class;
    public $id;
    public $param;
    public $visible = true;
    public $icon;

    public $image;
}
