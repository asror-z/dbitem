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

namespace zetsoft\dbitem\App\eyuf;


class PbxAccountItem
{
    public $user_id;
    public $display_name = '';
    public $peer = "SIP/";
    public $add_extension = "1";
    public $full = "1";
    public $add_user = "1";
    public $hashed_password = '';
    public $initial_password = '';
    public $auto_answer = "1";
    public $parent_user_id;
    public $password_dirty = "0";

}
