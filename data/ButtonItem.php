<?php

/**
 *
 *
 * @author MurodovMirbosit
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\data;

use zetsoft\dbitem\wdg\MenuItem;

class ButtonItem
{

    public const target = [
        'self' => '_self',
        'blank' => '_blank',
    ];

    public $url = '';
    public $icon = '';
    public $childAclass = '';
    public $imgClass = '';
    public $src = '';
    public $content = [];
}
