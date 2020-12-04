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


use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class Event
{

    public $beforeDelete;
    public $afterDelete;
    
    public $beforeSave;
    public $afterSave;
    
    public $beforeValidate;
    public $afterValidate;

    public $afterRefresh;
    public $afterFind;

}
