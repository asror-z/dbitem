<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\elfin;


class ElfinderItem
{
    public $path;
    public $url;
    public $startPath = null;
    public $extension;
    public $handler = [];
    public $dispInlineRegex = '';
    public $alias = '';
    public $mimeDetect = 'auto';
    public $mimefile = '';
    public $additionalMimeMap = [];
    public $imgLib = 'auto';
    public $tmbPath = 'c:/elfind/';
    public $quarantine = 'c:/elfind/';
    public $tmpPath = '';
    public $tmbPathMode = 0777;
    public $tmbSize = 48;
    public $tmbCrop = true;
    public $tmbBgColor = 'transparent';
    public $bgColorFb = '#ffffff';
    public $tmbFbSelf = true;
    public $archiveMimes = [];
    public $uploadMaxSize = 0;
    public $uploadMaxConn = 3;
    public $accessControl = 'access';


    /*
     * Elfinder file and Folder permission
     */
    public $pattern;
    public $hidden = false;
    public $lock = false;
    public $read = true;
    public $write = true;
    public $attributes = [];


    /**
     * Permentions modes
     */
    public $mode = self::modeView;

    public const modeView = ['read' => true, 'write' => true, 'locked' => true];
    //
    public const modeEdit = ['read' => true, 'write' => true, 'locked' => false];


}
