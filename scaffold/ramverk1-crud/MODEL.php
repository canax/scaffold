<?php

namespace NAMESPACE;

use \Anax\Database\ActiveRecordModel;

/**
 * A database driven model.
 */
class CLASSNAME extends ActiveRecordModel
{
    /**
     * @var string $tableName name of the database table.
     */
    protected $tableName = "CLASSNAME";



    /**
     * Columns in the table.
     *
     * @var integer $id primary key auto incremented.
     */
    public $id;
    public $column1;
    public $column2;
}
