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


class PbxContactManagerEntryNumbersItem
{
    public $entryid;
    
    public $number;
    public $extension;
    public $countrycode = '';
    public $nationalnumber = '';
    public $regioncode = '';
    public $locale = '';
    public $stripped;
    public $type = 'internal';
    public $flags = '';
    public $E164 = '';
    public $possibleshort = '';

}
