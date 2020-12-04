<?php

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\crms;


class FirebirdItem
{

	/*
	 *
	 * DB Type
	 */

	public const Terrasoft = 1;
	public const Infinity = 2;


	public $sDbType;


	/**
	 *
	 * Gived Param
	 */

	public $sDbName;
	public $sHostName;


	/**
	 *
	 * Inited Params
	 */

	public $sDbLocation;
	public $sDbExt;

	public $sUserName;
	public $sPassword;
	
	public $sDbFullPath;


	/**
	 *
	 * @var int
	 * In Mikro Seconds
	 * 1000 000 = 1 second
	 */
	public $delay = 1000 * 1000;


	public function zinit(): void
	{

		switch ($this->sDbType) {
		
			case self::Terrasoft:

				$this->sUserName = 'SYSDBA';
				$this->sPassword = 'masterkey';
				$this->sDbName = 'TS';
				
				$this->sDbLocation = 'C:/Program Files/Terrasoft/DB/';
				$this->sDbExt = '.FDB';
				break;

			case self::Infinity:

				$this->sUserName = 'INFINITYUSER';
				$this->sPassword = 'wizard';
				$this->sDbName = 'INFDATA';

				$this->sDbLocation = 'C:/Program Files/IntelTelecom/Infinity Contact-center/Servers/ServerBD/Data/';
				$this->sDbExt = '.DAT';
				break;
		}


		$this->sDbFullPath = "{$this->sDbLocation}{$this->sDbName}{$this->sDbExt}";

	}

}
