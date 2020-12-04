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

namespace zetsoft\dbitem\pbx;

/**
 * Class    PbxUsermanUsersItem
 * @package $id avtamatik generatsiyda qilinadi
 */


class PbxUsermanUsersItem
{
    /**
     * @var Autoincrement user 
     */
    public $id;
    public $auth = '1';
    public $authid = 'NULL';
    public $username = '';
    public $description = '';
    public $password = '';
    public $default_extension = 'none';
    public $primary_group = 'NULL';
    public $permissions = 'NULL';
    public $fname = '';
    public $lname = '';
    public $displayname = '';
    public $title = '';
    public $company = '';
    public $department = '';
    public $language = 'NULL';
    public $timezone = 'NULL';
    public $dateformat = 'NULL';
    public $timeformat = 'NULL';
    public $datetimeformat = 'NULL';
    public $email = '';
    public $cell = '';
    public $work = '';
    public $home = '';
    public $fax = '';

}
