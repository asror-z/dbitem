<?php

namespace zetsoft\dbitem\data;

use kartik\grid\GridView;
use kartik\popover\PopoverX;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use function False\true;

trait ALLTrait
{


    #region String





    #region Event

    /**
     * Auto reload form when value is changed
     * Value should be Pjax selector or ID
     */



    #endregion


    #region Widget

    /**
     *
     * @var
     * Widgets
     */

    public $widget;
    public $valueWidget;
    public $filterWidget;
    public $dynaWidget;

    /**
     * @var bool
     * Добавить плюс для Select2
     * Обкрытвает Dyna
     */
    public $editClass = ALLData::editClass['panel'];


    /**
     * @var bool
     * Danniyni configdan olish columndan
     */
    public $preferConfig = true;


    public $width = '100px';
    public $height = '200px';
    
    public $icon;

    public $modalWidth = '400px';
    public $modalHeight = '400px';

    public $popoverSize = PopoverX::SIZE_LARGE;
    public $popoverWidth;
    public $popoverHeight;


    #endregion



    #region Values

    public $namespace;
    public $service;
    public $method;
    public $args;






    /**
     * Columnlarni title. Dynagrid FormWidgetlada korsatiberadi
     *
     * $column->title = Az::l('Title');
     */
    public $title;



    /**
     * @var string
     *
     * Editable Class
     */
    public $value;
    public $valueShow;
    public $defaultValue;



    #endregion


    #region Labels

    public $labelType = ALLData::labelType['vertical'];


    #endregion

    #region Group

    public $groupOddCssClass;
    public $groupEvenCssClass;

    public $subGroupOf;

    #endregion












    #endregion


    #region Bools




    #region Event

    /**
     * @var bool
     * Enable or disable event
     */
    public $enableEvent = true;

    /**
     * @var bool
     *
     * Auto submit form when value is changed
     * Value should be form selector
     */
    public $changeSubmit = false;

    public $changeReloadPjax = true;
    
    /**
     * @var bool
     *
     * Auto save of model
     */
    public $changeReload = false;
    public $changeSave = false;
    public $changeChangeAll = false;

    #endregion


    #region Widget


    /**
     * @var bool
     * Enable Ajax loading of data
     */
    public $ajax = true;
    public $multiple = false;
    public $popoverScroll = false;
    public $addPlus = false;

    /**
     * @var bool
     *
     */
    public $between = false;

    #endregion



    #region DataColumn

    /**
     *
     * DataColumn
     */

    public $hiddenFromExport = false;
    public $mergeHeader = false;
    public $pageSummary = true;


    /**
     * @var bool
     * Сортировка
     */
    public $sort = true;

    public $showStats = true;

    /**
     * @var array|bool|callable $filter
     *
     * if filter shows or not on ZDynaWidget.
     * You can set bool, array or callable
     * $model->configs->filter = [
     * 'name' => true ,
     * 'email' => false
     * ];
     */

    public $edit = true;
    public $filter = true;

    #endregion


    #region Values

    public ?string $depends = null;



    /**
     * @var bool|Callable $readonly
     *
     */

    public $readonly = false;
    public $readonlyWidget = false;

    /**
     * @var bool|Callable $readonlyKernel
     *
     */

    public $readonlyKernel = false;


    /**
     *
     * Show Data
     */
    public $showForm = true;
    public $showDyna = true;
    public $showDetail = true;
    public $showView = true;


    #endregion


    #region Labels

    public $hasLabel = true;
    public $hasPlaceholder = true;

    #endregion

    #region Group


    /**
     * @var bool
     *
     * Is Dynamic form this is?
     */

    public ?bool $dynamic = false;

    public $group = false;
    public $groupedRow = false;
    #endregion


    #region Related

    /**
     * @var bool
     * Others
     */
     
    public $relatedSave = false;
    public $relatedDelete = false;


    #endregion

    


    #endregion






    #region Special


    /**
     *
     * @var array|string $rules
     *
     * Configuration Rules
     *
     * $model->configs->rules = [
     * 'main' => [[validatorSafe]],
     * 'type' => [[validatorSafe]],
     * ];
     *
     */

    public $rules = validatorSafe;

    #endregion








    #region Ints


    #region Labels

    public $labelSpan = 2;
    
    #endregion

    
    #endregion


    #region Array



    #region Group
    
    public $groupFooter;
    public $groupHeader;

    #endregion


    #region Core

    public $info = [];

    /**
     * @var array
     *
     * Add Value to all form items
     */

    public $data = [];

    #endregion


    #region Options


    public $options = [];
    public $valueOptions = [];
    public $filterOptions = [];
    public $dynaOptions = [];

    #endregion




    #region Role

    /**
     * /**
     * @var array $roleShow
     *
     * Dynagrid da userlani tizimdegi roliga qarab columnlani chiqariw
     * Array value siga tizimdegi userlani roli yoziladi
     * $model->configs->roleShow = [
     * 'user',
     * ];
     *
     */
    public $roleShow = [];
    public $roleShowEx = [];
    /**
     * @var array $roleEdit
     *  Dynagrid da userlani tizimdegi roliga qarab columnlani edit qiliw functionalini iwqlatiw
     *  Array value siga tizimdegi userlani roli yoziladi
     *
     * $model->configs->roleDenyEdit = [
     * 'user',
     * ];
     */
    public $roleEdit = [];
    public $roleEditEx = [];
    
    public $roleFilter = [];
    public $roleFilterEx = [];

    #endregion


    #endregion


    #region Column


    //start: MurodovMirbosit
    public static function column()
    {
        return [

            'title' => function (Form $column) {

                $column->title = Az::l('Описание');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'name' => function (Form $column) {

                $column->title = Az::l('Описание');
                $column->widget = ZHInputWidget::class;

                return $column;
            },

            'dbType' => function (Form $column) {

                $column->title = Az::l('Тип в базе данных');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'value' => function (Form $column) {

                $column->title = Az::l('Значение');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'data' => function (Form $column) {

                $column->title = Az::l('Данные для массива');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'rules' => function (Form $column) {

                $column->title = Az::l('Валидации');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;

                return $column;
            },

            'widget' => function (Form $column) {

                $column->title = Az::l('Виджет');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'valueWidget' => function (Form $column) {

                $column->title = Az::l('Значения Виджета');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'filterWidget' => function (Form $column) {

                $column->title = Az::l('Виджет для фильтра');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'options' => function (Form $column) {

                $column->title = Az::l('Опции виджета');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;

                return $column;
            },

            'valueOptions' => function (Form $column) {

                $column->title = Az::l('Опции значения');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'filterOptions' => function (Form $column) {

                $column->title = Az::l('Опции фильтра');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'showForm' => function (Form $column) {

                $column->title = Az::l('Показать в ZFormWidget?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'showDyna' => function (Form $column) {

                $column->title = Az::l('Показать в ZDynaWidget?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'showDetail' => function (Form $column) {

                $column->title = Az::l('Показать в ZDetailWidget?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'showView' => function (Form $column) {

                $column->title = Az::l('Показать в ZViewWidget?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'fkTable' => function (Form $column) {

                $column->title = Az::l('Связанная Таблица');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'fkMulti' => function (Form $column) {

                $column->title = Az::l('Множественная свзяь');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'fkColumn' => function (Form $column) {

                $column->title = Az::l('Связанная колонка');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'format' => function (Form $column) {

                $column->title = Az::l('Формат колонки');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'override' => function (Form $column) {

                $column->title = Az::l('Отменить');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;

                return $column;
            },

            'width' => function (Form $column) {

                $column->title = Az::l('Ширина колонки');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'mergeHeader' => function (Form $column) {

                $column->title = Az::l('mergeHeader');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'contentOptions' => function (Form $column) {

                $column->title = Az::l('contentOptions');
                $column->widget = ZKSelect2Widget::class;
                $column->dbType = dbTypeJsonb;
                return $column;
            },

            'hiddenFromExport' => function (Form $column) {

                $column->title = Az::l('hiddenFromExport');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'popoverWidth' => function (Form $column) {

                $column->title = Az::l('Ширина Popover');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'popoverHeight' => function (Form $column) {

                $column->title = Az::l('Высота Popover');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'popoverSize' => function (Form $column) {

                $column->title = Az::l('Размер Popover');
                $column->widget = ZHInputWidget::class;
                return $column;
            },

            'edit' => function (Form $column) {

                $column->title = Az::l('Редактировать Колонку?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'filter' => function (Form $column) {

                $column->title = Az::l('Включить Фильтр?');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'summary' => function (Form $column) {

                $column->title = Az::l('Показать Сумму');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'roleShow' => function (Form $column) {

                $column->title = Az::l('Запрет для ролей');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'roleDenyEdit' => function (Form $column) {

                $column->title = Az::l('Запрет для редактитрования');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },

            'roleDenyFilter' => function (Form $column) {

                $column->title = Az::l('Запрет для фильтра');
                $column->widget = ZKSwitchInputWidget::class;
                $column->dbType = dbTypeBoolean;
                return $column;
            },
        ];


    }
    //end


    #endregion
}

