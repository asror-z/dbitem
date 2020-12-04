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


use zetsoft\system\actives\ZActiveForm;
use zetsoft\system\column\ZEditableJspanel;
use zetsoft\system\column\ZEditableModalColumn;
use zetsoft\system\column\ZEditablePanelColumn;
use zetsoft\system\column\ZEditableSweetColumn;
use zetsoft\system\column\ZEditableSweetColumnAs;
use zetsoft\system\column\ZEditableSweetColumnF;
use zetsoft\system\column\ZEditableSweetColumnRav;
use zetsoft\system\column\ZKEditableColumn;

interface ALLData
{

    public const type = [
        'object' => 'object',
        'array' => 'array',
    ];

    public const format = [
        'text' => 'text',
        'raw' => 'raw',
        'html' => 'html',
    ];

    public const editClass = [
        'modal' => ZEditableModalColumn::class,
        'popover' => ZKEditableColumn::class,
        'panel' => ZEditableJspanel::class,
        'sweetAs' => ZEditableSweetColumnAs::class,
    ];


    public const labelType = [
        'horizontal' => ZActiveForm::TYPE_HORIZONTAL,
        'vertical' => ZActiveForm::TYPE_VERTICAL,
        'inline' => ZActiveForm::TYPE_INLINE,
    ];


    public const varArray = [
        'groupFooter',
        'groupHeader',
        
        'info',
        'rules',

        'roleShow',
        'roleEdit',
        'roleFilter',
    ];


    public const varArrayInner = [
        'data',
        'options',
        'valueOptions',
        'filterOptions',
        'dynaOptions',
    ];





    public const varString = [
        'title',
        'widget',
        
        'namespace',
        'service',
        'method',
        'args',

        'value',
        'defaultValue',
        'valueWidget',
        'filterWidget',
        'dynaWidget',
        'editClass',
        'width',
        'height',
        'modalWidth',
        'modalHeight',
        'popoverSize',
        'popoverWidth',
        'popoverHeight',
        'depends',
        'labelType',

        'groupOddCssClass',
        'groupEvenCssClass',
        'subGroupOf',
    ];


    public const varBool = [

        'enableEvent',
        'changeSubmit',
        'changeReload',
        'changeReloadPjax',
        'changeSave',
        'ajax',
        'dynamic',
        'multiple',

        'popoverScroll',
        'addPlus',
        'between',

        'hiddenFromExport',
        'mergeHeader',
        'pageSummary',
        'sort',
        'edit',
        'filter',

        'showForm',
        'showDyna',
        'showDetail',
        'showView',

        'hasLabel',
        'hasPlaceholder',

        'group',
        'groupedRow',

    ];
    public const varInt = [
        'labelSpan',
    ];


    public const varCalls = [
        'readonly',
        'readonlyKernel',
        'readonlyWidget',
    ];


    public const historyTarget = [
        'column' => 'column',
        'table' => 'table',
    ];


}
