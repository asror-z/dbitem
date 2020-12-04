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


class ALLApp
{

    /**
     * @var
     * Attribute Given from Parent class
     */
    public ?string  $parentAttr = null;

    /**
     * @var
     * Parent Class name for Dynamicform
     */
    public ?string $parentClass = null;
    public ?string $parentClassName = null;
    public ?int $parentId = null;

    /* @var ConfigDB $configs */
    public $configs;

    /* @var FormDb[] $columns */
    public $columns = [];

    /* @var array $cards */
    public $cards = [];

    public function __construct()
    {
        $this->configs = new ConfigDB();
    }


}
