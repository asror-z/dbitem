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


use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHInputWidget;
use function False\true;

class ConfigDB extends Config
{


    public $readonlyOn = [];
    public $readonlyOff = [];


    public $editOn = [];
    public $editOff = [];

    public $readonlyWidgetOn = [];
    public $readonlyWidgetOff = [];


    /**
     *
     * Events
     */

    public $beforeSave = true;
    public $afterSave = true;
    public $afterDelete = true;
    public $beforeDelete = true;
    public $beforeValidate = true;
    public $afterValidate = true;
    public $afterFind = true;
    public $afterRefresh = true;


    /**
     *
     * @var string
     * Core
     */

    public $dbase = 'db';
    public $formUrl;
    public $formId;


    public $lang = 'ru';
    public $sort;

    public $defaultOrder = [
        'id' => SORT_DESC
    ];

    /**
     *
     * @var bool
     * Generate
     */
    public $addID = true;
    public $addBy = true;

    public $addDel = true;
    public $addTranz = true;

    public $addName = true;
    public $addTitle = true;

    public $addActive = true;
    public $addAccept = true;

    public $addCode = false;
    public $addSort = true;
    public $addGuid = false;

    public $faker = false;
    public $indexSearch = false;

    public $showDeleted = false;
    public $showActive = false;
    public $showAccept = false;


    /**
     * @var string
     *
     * Titles
     */
    public $titleId = Azl . 'ID';
    public $titleTitle = Azl . 'Название';
    public $titleName = Azl . 'Уникальное имя';
    public $titleCode = Azl . 'Код';
    public $titleGuid = Azl . 'GUID';

    public $eventTitle;
    public $eventName;


    public $newRecordValues = [];
    public $reverseDate = true;
    public $customSort = true;
    public $customFilter = true;


    /**
     * @var bool
     *
     * Name Attribute
     */
    /**
     * @var bool
     */
    public $autoEx = [
        'id',
        'name',
        'created_at',
        'modified_at',
        'created_by',
        'modified_by',
    ];


//    put true for auto generate name value
    public $nameAuto = true;
    public $nameAutoWhenEmpty = false;
    public $guidAuto = false;

    /**
     * @var $nameValue
     * cases:
     * -if variable is null name will be auto generated from columns which types are String
     * - you can give string with columns nameOn and it will replace columns nameOn
     *          for ex. '{title} - {user_ids} / {user_ids}'
     * - you can give your callable function for generating name
     *          for ex.   static function (ShopOrder $order) {
     * return $order->contact_name . ', ' . $order->contact_phone;
     * };
     */

    public $nameValue = '{title}';
    public $guidValue = null;
    public $nameWidth = '250px';
    public $codeValue = null;


    /* @var ZActiveQuery $query */
    public $query;


    /**
     * @var string
     * Additionals for Name
     */

    public $nameWidget = ZHInputWidget::class;
    public $nameOptions = [];

    public $nameIndex = true;
    public $nameIndexUnique = false;

    public $nameValidator = null;
    public $nameValidatorUnique = true;

    public $nameLang = false;


    /**
     * @var bool
     *
     */
    public $nameShowDyna = true;
    public $nameShowForm = true;
    public $nameShowView = true;
    public $nameShowDetail = true;


    public $merge = true;

    /**
     * @var bool
     * DYNAGRID
     */


    public $dynaButtons = [];


    /**
     *
     * System Vars
     */

    /**
     *
     * @var bool
     * Edits
     */

    /**
     *
     * @var array
     * System Properties
     */

    public $depend = [];
    public $hasOne = [];
    public $hasMulti = [];
    public $hasMany = [];


    /**
     * Pagination & Sort
     */

    public $pageSize = 10;

    /**
     * Dyna with Card
     */
    public $isCard = true;

    /**
     * @var $allPageSize
     * @todo show count for use Dyna page size with all button
     * default = 100
     * max = 1000
     */
    public $allPageSize = 200;

    public ?string $historyInterval = self::historyInterval['null'];
    public const historyInterval = [
        'null' => null,
        '1H' => '1 hours',
        '2H' => '2 hours',
        '6H' => '6 hours',
        '12H' => '12 hours',
        '1D' => '1 days',
    ];

    // start|MuminovUmid|2020-10-24
    public const labelType = [
        'null' => null,
        'vertical' => 'vertical',
        'horizontal' => 'horizontal',
    ];

    // end|MuminovUmid|2020-10-24

    public function labels()
    {

        return [
            'name' => Az::l('Название Модели'),
            'title' => Az::l('Описание Модели'),
            'lang' => Az::l('Язык'),
            'icon' => Az::l('Иконка'),
            'relationBtn' => Az::l('Показать кнопку отношений формы'),
            'addBy' => Az::l('Add By'),
            'addID' => Az::l('Add ID'),
            'dbase' => Az::l('Data base'),
            'genName' => Az::l('Generate name'),
            'makeInsert' => Az::l('Generate insert'),
            'makeMenu' => Az::l('Generate CRUD'),
            'extraConfig' => Az::l('extraConfig'),
            'extraCard' => Az::l('extraCard'),
            'extraColumn' => Az::l('extraColumn'),
        ];

    }

    public function __construct()
    {
        parent::__construct();
    }


}
