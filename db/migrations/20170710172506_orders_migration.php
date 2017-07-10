<?php

use Phinx\Migration\AbstractMigration;

class OrdersMigration extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `Orders` ( `OrderID` INT(20) NOT NULL AUTO_INCREMENT , `CustomerID` INT(20) NOT NULL , `OrderNumber` VARCHAR(50) NOT NULL , `PaymentID` INT(20) NOT NULL , `OrderDate` DATE NOT NULL , `ShipDate` DATE NOT NULL , `RequiredDate` DATE NOT NULL , `ShipperID` INT(50) NOT NULL , `Freight` VARCHAR(50) NOT NULL , `SalesTax` VARCHAR(50) NOT NULL , `TimeStamp` TIMESTAMP NOT NULL , `TransactStatus` INT(10) NOT NULL , `ErrLoc` VARCHAR(50) NOT NULL , `ErrMsg` VARCHAR(50) NOT NULL , `Fulfilled` INT(10) NOT NULL , `Deleted` INT(10) NOT NULL , `Paid` INT(10) NOT NULL , `PaymentDate` DATETIME NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL , INDEX `OrderID` (`OrderID`(50))) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
Close
        ");

    }
    public function down()
    {

    }

}
