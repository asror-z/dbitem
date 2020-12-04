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


class AppItem
{
    public $id;

    public $template = 'Azk.php';
    public $templatePath;
    public $replace;
    public $generate;
    public $generatePath;

    public $trashPath = '\.trash';
    public $recyclePath = 'D:/Develop/Projects/ALL/history/recycle';
    public $affectFileOnly = false;
    public $affectFileToo = false;

    public $state;
    public $dirOnly = false;
    public $sourceDir;
    public $isLink = false;
    public $linkSource;
    public $linkPlace;

    /**
     * returns directory where this->trashPath must be created
     * Function  getTrashDir
     */
    public function getTrashDir()
    {
        $trashLoc = '';
        if($this->generatePath) {
            $dirs = explode('/', $this->generatePath);
            $dirs = array_filter($dirs);
            $trashLoc = array_shift($dirs);
        }

        //$this->generatePath = '/' . implode('/', $dirs);
        return '/' . $trashLoc;
    }

    public function getTrashSubDir()
    {
        $path = '';

        if($this->affectFileOnly)
            $path = $this->generate;
        else $path = $this->generatePath;

        $trashSubLoc = '';
        if($path) {
            $dirs = explode('/', $path);
            $dirs = array_filter($dirs);
            array_shift($dirs);
            $trashSubLoc = implode('/', $dirs);
        }

        return '/' . $trashSubLoc;
    }

    public function getFullTrashPath($path = false)
    {
        if($path)
            $in = $this->generatePath;
        else $in = $this->generate;

        $generatePath = explode('/', $in);
        array_splice( $generatePath, 2, 0, [$this->trashPath] );

        $result = implode('/', $generatePath);
        return '/'. $result;
    }
}
