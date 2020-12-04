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


use phpDocumentor\Reflection\Types\Boolean;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class FormDb extends Form
{


    public $length = 255;




    #region AutoSave


    /**
     * @var
     * Event For Column
     */
    public $event;

    /**
     * @var bool
     * Generate or not generate
     */
    public $auto = false;
    public $autoWhenEmpty = false;


    /**
     * @var
     *
     * Auto Generate
     * you can pass for $autoValue:
     * - you can give string with columns nameOn and it will replace columns nameOn
     *          for ex. '{title} - {user_ids} / {user_ids}'
     * - you can give your callable function for generating name
     *          for ex.   static function (ShopOrder $order) {
     * return $order->contact_name . ', ' . $order->contact_phone;
     * };
     */

    public $autoValue;

    #endregion


    #region DataBase


    /**
     * @var bool
     * Wheather write only difference of this column to Transaction table
     */
    public $diff = false;
    public $indexSearch = false;

    /**
     * @var string
     *
     *
     */
    public $historyTarget = ALLData::historyTarget['column'];


    #endregion


    #region Faker

    /**
     * @var
     * Faker
     */
    public $faker = false;

    public $fakerData = null;
    public $fakerFunc = null;
    public $fakerCount = 30;
    public $fakerClean = false;

    #endregion



    /**
     *
     * SQL Data
     */
    public $check = null;
    public $defaultExpression = null;
    public $append = null;

    /**
     *
     * Migration
     */

    public $notNull = false;
    public $unsigned = false;


    /**
     *
     * Index
     */
    public $index = false;
    public $noSearch = false;
    public $indexUnique = false;


    /**
     *
     * Keys
     */
    public $isPKey = false;
    public $fkCreate = false;



    public static function column()
    {
        return ZArrayHelper::merge(parent::column(), [

            'title' => function (Form $column) {

                $column->title = Az::l('Описание');
                $column->showForm = false;

                return $column;
            },

        ]);
    }


 
    public function __construct()
    {
        parent::__construct();

        if ($this->indexUnique)
            $this->index = true;


    }


}
