<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\pbx;


class PBXExtItem
{
    public $login = "admin";
    public $password = "Formula1";
    public $url = "http://10.10.3.31";
    
    public $extName;
    public $extPassword;
    
    public $recoding = [
        'yes' => true,
        'no' => false
    ];
    
    public $adminName = "test1222";
    public $adminPassword = "test1222";
    public $loginMethod;
    public $iDriver;

}
