<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\grap;


class GrapeBtnItem
{
    public const type = [
        'native' => 'native',
        'delimiter' => 'delimiter',
        'dropdown' => 'dropdown',
    ];

    public $type = GrapeBtnItem::type['delimiter'];


    public $id;
    public $className;
    public $command;
    public $tagName;
    public $href;
    public $title;
    public $attributes = null;
    public $label;
    public $icon;
    public $target;
    public $active = false;
    public $dragDrop = false;
    public $panelId = null;
    public $togglable = false;
    public $disable = false;


}
