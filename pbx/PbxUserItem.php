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


class PbxUserItem
{
    public $extention;
    public $pasword;
    public $name;
    public $voicemail = 'novm';
    public $ringtimer = '0';
    public $noanswer = '';
    public $recording = '';
    public $outboundcid = '';
    public $sipname = '';
    public $noanswer_cid = '';
    public $busy_cid = '';
    public $chanunavail_cid = '';
    public $noanswer_dest = '';
    public $busy_dest = '';
    public $chanunavail_dest = '';
    public $mohclass = 'default';
}
