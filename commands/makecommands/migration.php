<?php
/*
*@Author: Houmame LAZAR <houms937@gmail.com>
*@Class: NAME
*@NameSpace: Database\migrations;
*/
namespace Database\migrations;

use Core\SqlBuilder;

class NAME
{
	private $tableName;
	private $table;

	public function __construct()
	{
		$this->tableName = 'TABLENAME';
		$this->table = new SqlBuilder($this->tableName);
	}
	public function up(): string{
        return $this->table->create()
            ->id()
          //TODO: Add here the other columns;
            ->timestamp()
            ->endCreation();
	}
}

