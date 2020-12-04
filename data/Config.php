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


use kartik\form\ActiveForm;
use zetsoft\system\actives\ZActiveForm;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\Az;

class Config implements ALLData
{

    use ALLTrait;

    #region Type

    public $type = ALLData::type['array'];

    /**
     * @var array
     * Jsonb Columns list
     */
    public $jsonb = [];

    #endregion

    #region Main
    public $name = 'name';
    public $formId;

    public $clonable = true;
    public $newRecord = false;


    /**
     * @var array
     * Generate buttons for related item classes
     */
    public $relation = true;
    public $relationMany = true;
    public $relationMulti = true;

    
    public $relateMany = [];
    public $relateMulti = [];

    public $titles = [];

    public $relationBtn = true;
    public $relationWidth = '100px';

    public $extraConfig = false;
    public $extraColumn = true;


    /**
     * @var bool
     * Enable or disable system columns for current Dyna
     */
    public $showSystemColumn = false;
    public $showDeleted = false;


    /**
     *
     * @var bool
     * Gen Cruds
     */

    public $makeDB = true;
    public $makeMenu = true;
    public $makeInsert = true;

    
    public $columnCount = 2;

    public $orderCheck = false;
    /**
     * @var array $order
     * Генерация сортировок для колонок
     */
    public $order = [
        'id' => SORT_DESC,
    ];
    public bool $menu = true;

    #endregion


    #region Rest

    public $restLink = false;
    public $restMeta = false;

    public $restFields = [];
    public $restExtraFields = [];

    #endregion

    #region System

    /**
     *
     * @var
     * System Vars
     */

    public $ruleOn = [];
    
    public $nameOn = [];
    public $nameOff = [];
    
    public $nameShow = [];
    public $nameShowEx = [
        'modified_at',
        'modified_by',

        'created_by',
        'created_at',

        'deleted_at',
        'deleted_by',
        'deleted_text',
    ];

    public $before;
    public $after;

    public $groupOff = [];
    public $groupedRowOff = [];

    public $pageSummaryOff = [];
    public $pageSummaryOn = [];


    /**
     *
     * Roles
     */
    /* @var array $column */
    public $column = [];

    /* @var array $replace */
    public $replace = [];


    /**
     *
     * Edit & Filter columns
     */
    public $spa = true;

    public $denyDB;


    #endregion


    public function __construct()
    {

    }


}
