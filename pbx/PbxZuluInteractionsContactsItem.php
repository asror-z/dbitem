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


class PbxZuluInteractionsContactsItem
{
    /**
     * @var Autoincrement user 
     */
    public $id;
    public $zulu_id = 'NULL';
    public $type = 'USER';
    public $calleridnumber = '';
    public $userman_id = '';
    public $calleridname = '';
    public $linkedid = '';
    public $contactman_id = 'NULL';

}
