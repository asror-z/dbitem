<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    07.06.2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\wdg;


use zetsoft\models\menu\Menu;

class MenuItem
{

    /**
     *
     * Location
     */
    public const location = [
        'right' => 'right',
        'bottom' => 'bottom',
    ];

    public $location = MenuItem::location['right'];

    /**
     *
     * Target
     */

    public $target = Menu::target['_self'];

    public $title;
    public $tooltip;
    public $name;
    public $class;
    public $data;
    public $dataItem;
    public $url;
    public $href;
    public $id;
    public $args;
    public $visible = true;
    public $inline = false;
    public $items = [];
    public $child = [];
    public $extra = [];
    public $icon;

    public $image;

}

