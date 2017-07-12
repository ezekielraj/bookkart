<?php

use Phinx\Migration\AbstractMigration;

class CategoryMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
$this->execute("
CREATE TABLE IF NOT EXISTS `Category` ( `CategoryID` INT(10) NOT NULL AUTO_INCREMENT , `CategoryName` VARCHAR(50) NOT NULL , `Description` VARCHAR(100) NOT NULL , `Picture` VARCHAR(50) NOT NULL , `Active` INT(10) NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL , INDEX `CategoryID` (`CategoryID`(10))) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
 ");

    }
    public function down(){
        
    }
}
