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


use kartik\grid\GridView;
use kartik\popover\PopoverX;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;

class Form implements ALLData
{

    /**
     *
     * Core Apps
     */

    use ALLTrait;
    


    /**
     * @var array $dbType
     *                            It looks like you did not install the loader.
     * Columnlarni baza digi Type i, masalan: string, json, integer, boolean
     *
     * $column->dbType = dbTypeInteger; // dbTypeString    dbTypeJsonb  dbTypeBoolean
     */
    public string $dbType = dbTypeString;

    
    /**
     * @var bool
     * Переопределение параметров колонки при переопределнии
     */
    public $override = false;

    /**
     *
     * System Columns
     */

    public $slug = false;
    public $lang = false;
    public $history = false;


    public $name;


    /**
     * @var int
     * Обрезка строки при использовании Truncate
     */
    public $cropLength = 200;


    #region Label


    /**
     * @var array $tooltip
     *
     * Columnlarni tooltip malumotlarini chiqariberadi. Dynagrid FormWidgetlada korsatiberadi
     *
     * $column->tooltip = Az::l('Tooltip');
     */
    public $tooltip;

    #endregion

    #region DataColumn


    public $format = ALLData::format['html'];

    /**
     * @var bool|array|callable $pageSummary
     * DynaGrid da Columnlani summasini chiqariberadi
     *
     * $model->configs->summary = true
     */
    public $pageSummaryFunc = GridView::F_SUM;


    #endregion



    /**
     *
     * FKey
     */



    public $fkTable = '';
    public $fkMulti = false;
    
    public $fkQuery = [];
    public $fkOrQuery = [];
    public $fkAttr = 'name';
    public $fkAndQuery = [];
    public $fkColumn = 'id';

    



    /**
     *
     * Constants
     */

    public function __construct()
    {
    }


}
